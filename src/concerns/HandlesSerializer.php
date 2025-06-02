<?php

namespace horstoeko\invoicesuite\concerns;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Exception\InvalidArgumentException;
use horstoeko\invoicesuite\concerns\HandlesCurrentFormatProvider;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

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
    use HandlesCurrentFormatProvider;

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
     * @return void
     * @throws InvalidArgumentException
     * @throws RuntimeException
     */
    public function createAndInitSerializerByFormatProvider(): void
    {
        $this->serializerBuilder = SerializerBuilder::create();

        $this->serializerBuilder->addMetadataDirs($this->getCurrentFormatProvider()->getSerializerMetadataDirectories());
        $this->serializerBuilder->setCacheDir(sys_get_temp_dir() . "\jms");
        $this->serializerBuilder->addDefaultListeners();
        $this->serializerBuilder->addDefaultHandlers();

        $this->serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handlerRegistry): void {
            $handlerRegistry->registerSubscribingHandler(new BaseTypesHandler());
            $handlerRegistry->registerSubscribingHandler(new XmlSchemaDateHandler());
            foreach ($this->getCurrentFormatProvider()->getSerializerHandlers() as $handlerClassname) {
                $handlerRegistry->registerSubscribingHandler(new $handlerClassname());
            }
        });

        $this->serializerBuilder->configureListeners(function (EventDispatcher $eventDispatcher): void {
            foreach ($this->getCurrentFormatProvider()->getSerializerListeners() as $event => $callback) {
                $eventDispatcher->addListener($event, $callback);
            }
        });

        $this->serializerBuilder->configureListeners(function (EventDispatcher $eventDispatcher): void {
            foreach ($this->getCurrentFormatProvider()->getSerializerSubscribers() as $subscriberClassname) {
                $eventDispatcher->addSubscriber(new $subscriberClassname());
            }
        });

        $this->serializer = $this->serializerBuilder->build();
    }
}
