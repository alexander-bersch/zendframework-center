<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace CompanyModelTest\Hydrator;

use CompanyModel\Hydrator\CompanyHydrator;
use PHPUnit_Framework_TestCase;

/**
 * Class CompanyHydratorTest
 *
 * @package CompanyModelTest\Hydrator
 */
class CompanyHydratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @group company-backend
     * @group model
     */
    public function testClassExists()
    {
        $this->assertTrue(class_exists(CompanyHydrator::class));
    }
}
