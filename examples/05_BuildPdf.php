<?php

use horstoeko\invoicesuite\InvoiceSuitePdfDocumentBuilder;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;

require __DIR__ . "/../vendor/autoload.php";

$xmlContent = file_get_contents(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "05_xml.xml"));
$pdfContent = file_get_contents(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "05_pdf.pdf"));

$builder = InvoiceSuitePdfDocumentBuilder::createFromDocumentContentAndPdfContent($xmlContent, $pdfContent);

$builder->generatePdfDocumentAndSaveToFile(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "05_pdf_1.pdf"));
