<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    // load the profiler
    $container->loadFromExtension('sensio_framework_extra', [
        'router'      => ['annotations' => false]
    ]);
    // $containerConfigurator->extension('sensio_framework_extra', [
    //     'router' => [
    //         'annotations' => null
    //     ]
    // ]);
};
