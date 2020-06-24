<?php

namespace Tests;

use Actb\BladeFeatherIcons\FeatherIconsServiceProvider;
use Orchestra\Testbench\TestCase;
use BladeUI\Icons\BladeIconsServiceProvider;
use Davidhsianturi\BladeBootstrapIcons\BladeBootstrapIconsServiceProvider;

/**
 * Class CompilesIconsTest
 *
 * @package Tests
 */
class CompilesIconsTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            FeatherIconsServiceProvider::class,
        ];
    }

    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('fi-activity')->toHtml();

        $expected = <<<SVG
<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
</svg>
SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('fi-activity', 'text-primary')->toHtml();

        // Note: the double class here seems to be a Blade components / BladeUI Icons bug.
        $expected = <<<SVG
<svg class="text-primary"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
</svg>
SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('fi-activity', ['style' => 'color: #555'])->toHtml();

        $expected = <<<SVG
<svg style="color: #555"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
</svg>
SVG;

        $this->assertSame($expected, $result);
    }
}
