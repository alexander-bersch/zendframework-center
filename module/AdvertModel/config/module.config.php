<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

use AdvertModel\Hydrator\AdvertHydrator;
use AdvertModel\Repository\AdvertRepositoryFactory;
use AdvertModel\Repository\AdvertRepositoryInterface;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'service_manager' => [
        'factories' => [
            AdvertRepositoryInterface::class =>
                AdvertRepositoryFactory::class
        ],
    ],

    'hydrators' => [
        'factories' => [
            AdvertHydrator::class => InvokableFactory::class,
        ],
    ],
];