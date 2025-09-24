<?php

use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;

require __DIR__ . "/../vendor/autoload.php";

$reader = InvoiceSuiteDocumentReader::createFromFile(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "01_SimpleInvoice.xml"));
$builder = $reader->copyToBuilder();
$builder->saveAsXmlFile(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "01_SimpleInvoice_Copy.xml"));
