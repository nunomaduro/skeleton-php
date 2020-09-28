<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set(Option::SETS, [
        SetList::ACTION_INJECTION_TO_CONSTRUCTOR_INJECTION,
        SetList::ARRAY_STR_FUNCTIONS_TO_STATIC_CALL,
        SetList::DOCTRINE_CODE_QUALITY,
        SetList::PHPUNIT_CODE_QUALITY,
        SetList::SOLID,
        SetList::CODE_QUALITY,
        SetList::PHP_71,
        SetList::PHP_72,
        SetList::PHP_73,
    ]);
};
