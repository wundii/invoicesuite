<?php

use horstoeko\invoicesuite\InvoiceSuitePdfDocumentReader;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;

require __DIR__ . "/../vendor/autoload.php";

$documentReader = InvoiceSuitePdfDocumentReader::createFromFile(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "04_Invoice.pdf"));
$documentReader->getDocumentReader()->getDocumentNo($documentNo);
$documentReader->getDocumentReader()->getDocumentDate($documentDate);
echo $documentNo . PHP_EOL;
echo $documentDate->format("d.m.Y") . PHP_EOL;
echo count($documentReader->getAdditionalDocumentAttachments()) . " additional attachments found... \n";
foreach($documentReader->getAdditionalDocumentAttachments() as $attachment) {
    echo sprintf(" - %s (%s)\n", $attachment->getAttachmentFilename(), $attachment->getAttachmentMimeType());
}