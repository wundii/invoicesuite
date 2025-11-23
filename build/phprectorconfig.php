<?php

declare(strict_types=1);

use Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector;
use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector;
use Rector\DeadCode\Rector\Property\RemoveUselessVarTagRector;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/../src',
        __DIR__ . '/../tests/testcases',
    ])
    ->withSkip([
        RemoveUselessParamTagRector::class,
        RemoveUselessReturnTagRector::class,
        RemoveUselessVarTagRector::class,
    ])
    ->withSets([
        SetList::PHP_81,
        SetList::DEAD_CODE,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
        SetList::INSTANCEOF,
        SetList::PRIVATIZATION,
        PHPUnitSetList::PHPUNIT_90,
        PHPUnitSetList::PHPUNIT_CODE_QUALITY,
    ])
    ->withConfiguredRule(EncapsedStringsToSprintfRector::class, [
        'always' => true,
    ])
    ->withRules([
        //RenamePropertyToMatchTypeRector::class,
        //RenameParamToMatchTypeRector::class,
        //RenameVariableToMatchNewTypeRector::class,
        DeclareStrictTypesRector::class,
    ])
    ->withImportNames(
        importShortClasses: true,
        removeUnusedImports: true
    )
    ->withoutParallel()
    ->withTypeCoverageLevel(0);
