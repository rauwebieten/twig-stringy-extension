<?php

declare(strict_types=1);

use RauweBieten\TwigStringyExtension;

class TwigStringyExtensionTest extends \Twig\Test\IntegrationTestCase
{
    public function getExtensions(): array
    {
        return [
            new TwigStringyExtension(),
        ];
    }

    public function getFixturesDir(): string
    {
        return __DIR__.'/fixtures';
    }
}
