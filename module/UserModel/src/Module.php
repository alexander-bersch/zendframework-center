<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace UserModel;

use Zend\Config\Factory;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\InitProviderInterface;
use Zend\ModuleManager\ModuleManagerInterface;

/**
 * Class Module
 *
 * @package UserModel
 */
class Module implements ConfigProviderInterface, InitProviderInterface
{
    /**
     * Initialize module
     *
     * @param ModuleManagerInterface $manager
     */
    public function init(ModuleManagerInterface $manager)
    {
        if (!defined('USER_MODEL_MODULE_ROOT')) {
            define('USER_MODEL_MODULE_ROOT', __DIR__ . '/..');
        }
    }

    /**
     * Get module configuration
     */
    public function getConfig()
    {
        return Factory::fromFile(
            USER_MODEL_MODULE_ROOT . '/config/module.config.php'
        );
    }
}