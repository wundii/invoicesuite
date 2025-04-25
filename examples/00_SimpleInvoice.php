<?php

use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;

require __DIR__ . "/../vendor/autoload.php";

$builder = InvoiceSuiteDocumentBuilder::createByProviderUniqueId('zffxextended');
//$builder = InvoiceSuiteDocumentBuilder::createByProviderUniqueId('xrechnung');
$builder->setDocumentNo('2025-04-000001');
$builder->setDocumentType("380");
$builder->setDocumentDescription("Some document description");
$builder->setDocumentLanguage("German");
$builder->setDocumentDate(new DateTime());
$builder->setDocumentCompleteDate(new DateTime());
$builder->setDocumentCurrency("EUR");
$builder->setDocumentTaxCurrency("GBP");
$builder->setDocumentIsTest(true);
$builder->setDocumentIsCopy(true);
$builder->addDocumentNote("Some content", "CC00", "SC00");
$builder->addDocumentNote("Some other content", "CC99", "SC99");

$builder->setSellerName("Lieferant GmbH");
$builder->setSellerId("0815-4711");
$builder->addSellerId("0815-4712");
$builder->setSellerGlobalId("347364862366467", "0088");
$builder->setSellerTaxRegistration("VA", "893489787987");
$builder->setSellerAddress("line1", "line2", "line3", "06108", "City", "DE", "Bavaria");
$builder->setSellerLegalOrganisation("8884", "3874837489237", "Lieferant AG");
$builder->setSellerContact("Horst Meier", "Buchhaltung", "0815-4711", "0815-4712", "horst.meier@lieferant.de");
$builder->setSellerCommunication("EM", "info@lieferant.de");

$builder->setBuyerName("Kunde GmbH");
$builder->setBuyerId("0815-4711");
$builder->addBuyerId("0815-4712");
$builder->setBuyerGlobalId("347364862366467", "0088");
$builder->setBuyerTaxRegistration("VA", "333355525");
$builder->setBuyerAddress("line1", "line2", "line3", "06108", "City", "DE", "Bavaria");
$builder->setBuyerLegalOrganisation("8884", "3874837489237", "Kunde AG");
$builder->addBuyerContact("Lars Müller", "Buchhaltung", "0815-9991", "0815-9992", "la.mue@kunde.de");
$builder->setBuyerCommunication("EM", "invoice@kunde.de");

echo $builder->getContentAsXml();
