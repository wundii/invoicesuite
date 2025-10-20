<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\DeadCode\Rector\Property\RemoveUselessVarTagRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector;
use Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector;
use Rector\PHPUnit\Set\PHPUnitSetList;

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
        PHPUnitSetList::PHPUNIT_90,
    ])
    ->withConfiguredRule(EncapsedStringsToSprintfRector::class, [
        'always' => true,
    ])
    ->withRules([
        //RenamePropertyToMatchTypeRector::class,
        //RenameParamToMatchTypeRector::class,
        //RenameVariableToMatchNewTypeRector::class,
    ])
    ->withoutParallel()
    ->withTypeCoverageLevel(0);
