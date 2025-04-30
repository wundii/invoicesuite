<?php

namespace horstoeko\invoicesuite\concerns;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProvider;
use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\Exception\InvalidArgumentException;
use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

/**
 * Trait representing methods for handling the serializer/deserializer
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
trait HandlesSerializer
{
    /**
     * @var SerializerBuilder $serializerBuilder Serializer builder
     */
    protected $serializerBuilder;

    /**
     * @var SerializerInterface $serializer Serializer
     */
    protected $serializer;

    /**
     * Build the serializer by a format provider
     *
     * @param InvoiceSuiteAbstractFormatProvider $invoiceSuiteAbstractFormatProvider
     * @return void
     * @throws InvalidArgumentException
     * @throws RuntimeException
     */
    public function createAndInitSerializerByFormatProvider(InvoiceSuiteAbstractFormatProvider $invoiceSuiteAbstractFormatProvider): void
    {
        $this->serializerBuilder = SerializerBuilder::create();

        $this->serializerBuilder->addMetadataDirs($invoiceSuiteAbstractFormatProvider->getSerializerMetadataDirectories());

        $this->serializerBuilder->addDefaultListeners();
        $this->serializerBuilder->addDefaultHandlers();

        $this->serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handlerRegistry) use ($invoiceSuiteAbstractFormatProvider): void {
            $handlerRegistry->registerSubscribingHandler(new BaseTypesHandler());
            $handlerRegistry->registerSubscribingHandler(new XmlSchemaDateHandler());
            foreach ($invoiceSuiteAbstractFormatProvider->getSerializerHandlers() as $handlerClassname) {
                $handlerRegistry->registerSubscribingHandler(new $handlerClassname());
            }
        });

        $this->serializerBuilder->configureListeners(function (EventDispatcher $eventDispatcher) use ($invoiceSuiteAbstractFormatProvider): void {
            foreach ($invoiceSuiteAbstractFormatProvider->getSerializerListeners() as $event => $callback) {
                $eventDispatcher->addListener($event, $callback);
            }
        });

        $this->serializerBuilder->configureListeners(function (EventDispatcher $eventDispatcher) use ($invoiceSuiteAbstractFormatProvider): void {
            foreach ($invoiceSuiteAbstractFormatProvider->getSerializerSubscribers() as $subscriberClassname) {
                $eventDispatcher->addSubscriber(new $subscriberClassname());
            }
        });

        $this->serializer = $this->serializerBuilder->build();
    }
}
