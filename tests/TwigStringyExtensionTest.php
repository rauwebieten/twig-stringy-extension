<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class TwigStringyExtensionTest extends TestCase
{
    public function testImplementsTwigExtensionInterface() {
        $extension = new \RauweBieten\TwigStringyExtension();
        $this->assertInstanceOf(Twig_ExtensionInterface::class, $extension);
    }
}
