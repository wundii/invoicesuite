<?php

use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;
use horstoeko\invoicesuite\validators\kosit\InvoiceSuiteKositDocumentValidator;

require __DIR__ . "/../vendor/autoload.php";

// Create (Remote-) Validator

$filesToValidate = [
    InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_comfort_simple.xml"),
    InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_comfort_simple_dto.xml"),
    InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_extended_simple.xml"),
    InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_extended_simple_dto.xml"),
    InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_xrechnung_cii_simple.xml"),
    InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_xrechnung_cii_simple_dto.xml"),
    InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_xrechnung_ublinvoice_simple.xml"),
    InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_xrechnung_ublinvoice_simple_dto.xml"),
];

foreach ($filesToValidate as $fileIndex => $fileToValidate) {
    $validator = InvoiceSuiteKositDocumentValidator::createFromFile($fileToValidate);
    $validator->enableRemoteMode();
    $validator->setRemoteModeHost('192.168.1.83');
    $validator->setRemoteModePort(8081);
    $validator->validate();

    echo sprintf("Validated file %s: %s\n", $fileIndex + 1, realpath($fileToValidate));
    echo sprintf("HasErrorMessages .......... %s\n", $validator->hasErrorMessagesInMessageBag() === true ? "Yes": "No");
    echo sprintf("HasWarningMessages ........ %s\n", $validator->hasWarningMessagesInMessageBag() === true ? "Yes": "No");
    echo sprintf("HasLogMessages ............ %s\n", $validator->hasInfoMessagesInMessageBag() === true ? "Yes": "No");

    foreach ($validator->getErrorMessagesInMessageBag() as $message) {
        echo sprintf("  %s\n", $message->getMessageContent());
    }

    echo "\n\n";
}
