<?php

use horstoeko\invoicesuite\InvoiceSuitePdfDocumentReader;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;

require __DIR__ . "/../vendor/autoload.php";

$documentReader = InvoiceSuitePdfDocumentReader::createFromFile(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "04_Invoice.pdf"));
