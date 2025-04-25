<?php

use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;

require __DIR__ . "/../vendor/autoload.php";

$builder = InvoiceSuiteDocumentBuilder::createByProviderUniqueId('xrechnung');
$builder->setDocumentNo('2025-04-000001');
echo $builder->getContentAsXml();
