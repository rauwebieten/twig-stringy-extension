<?php
declare(strict_types=1);

class TwigStringyExtensionTest extends Twig_Test_IntegrationTestCase
{
    public function getExtensions()
    {
        return [
            new \RauweBieten\TwigStringyExtension()
        ];
    }

    public function getFixturesDir()
    {
        return __DIR__ . '/fixtures';
    }
}
