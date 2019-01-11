<?php

namespace Kirby\ComposerInstaller;

use PHPUnit\Framework\TestCase;

use Composer\Composer;
use Composer\Config;
use Composer\Installer\InstallationManager;
use Composer\IO\NullIO;

class PluginTest extends TestCase
{
    public function testActivate()
    {
        $composer            = new Composer();
        $installationManager = new InstallationManager();
        $composer->setInstallationManager($installationManager);
        $composer->setConfig(new Config());

        $plugin = new Plugin();
        $plugin->activate($composer, new NullIO());

        $installer = $installationManager->getInstaller('kirby-cms');
        $this->assertInstanceOf(Installer::class, $installer);
    }
}
