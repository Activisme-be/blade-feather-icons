<?php

namespace Actb\BladeFeatherIcons\Tests;

use Actb\BladeFeatherIcons\FeatherIconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as TestCaseAlias;

/**
 * Class TestCase
 *
 * @package Actb\BladeFeatherIcons\Tests
 */
class TestCase extends TestCaseAlias
{
   protected function getPackageProviders($app): array
   {
       return [BladeIconsServiceProvider::class, FeatherIconsServiceProvider::class];
   }
}

