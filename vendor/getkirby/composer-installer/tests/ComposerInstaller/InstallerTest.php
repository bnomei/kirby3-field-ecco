<?php

namespace Kirby\ComposerInstaller;

use PHPUnit\Framework\TestCase;
use ReflectionProperty;

use Composer\Composer;
use Composer\Config;
use Composer\IO\NullIO;
use Composer\Package\Package;
use Composer\Package\RootPackage;

class InstallerTest extends TestCase
{
    protected $composer;
    protected $installer;

    public function setUp()
    {
        // initialize new Composer and Installer instances
        $this->composer = new Composer();
        $this->composer->setConfig(new Config());
        $this->installer = new Installer(new NullIO(), $this->composer);
    }

    public function testSupports()
    {
        $this->assertTrue($this->installer->supports('kirby-cms'));
        $this->assertFalse($this->installer->supports('kirby-plugin'));
        $this->assertFalse($this->installer->supports('amazing-cms'));
    }

    public function testGetInstallPathDefault()
    {
        $package = new Package('getkirby/cms', '1.0.0.0', '1.0.0');
        $package->setType('kirby-cms');
        $this->assertEquals('kirby', $this->installer->getInstallPath($package));
    }

    public function testGetInstallPathCustomPaths()
    {
        $rootPackage = new RootPackage('getkirby/amazing-site', '1.0.0.0', '1.0.0');
        $rootPackage->setExtra([
            'kirby-cms-path' => 'cms'
        ]);
        $this->composer->setPackage($rootPackage);

        $package = new Package('getkirby/cms', '1.0.0.0', '1.0.0');
        $package->setType('kirby-cms');
        $this->assertEquals('cms', $this->installer->getInstallPath($package));
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage The path . is an unsafe installation directory for getkirby/cms.
     */
    public function testGetInstallPathUnsafe1()
    {
        $rootPackage = new RootPackage('getkirby/amazing-site', '1.0.0.0', '1.0.0');
        $rootPackage->setExtra([
            'kirby-cms-path' => '.'
        ]);
        $this->composer->setPackage($rootPackage);

        $package = new Package('getkirby/cms', '1.0.0.0', '1.0.0');
        $package->setType('kirby-cms');
        $this->installer->getInstallPath($package);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage The path vendor is an unsafe installation directory for getkirby/cms.
     */
    public function testGetInstallPathUnsafe2()
    {
        $rootPackage = new RootPackage('getkirby/amazing-site', '1.0.0.0', '1.0.0');
        $rootPackage->setExtra([
            'kirby-cms-path' => 'vendor'
        ]);
        $this->composer->setPackage($rootPackage);

        $package = new Package('getkirby/cms', '1.0.0.0', '1.0.0');
        $package->setType('kirby-cms');
        $this->installer->getInstallPath($package);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage The path custom-vendor is an unsafe installation directory for getkirby/cms.
     */
    public function testGetInstallPathUnsafe3()
    {
        $rootPackage = new RootPackage('getkirby/amazing-site', '1.0.0.0', '1.0.0');
        $rootPackage->setExtra([
            'kirby-cms-path' => 'custom-vendor'
        ]);
        $this->composer->setPackage($rootPackage);

        $package = new Package('getkirby/cms', '1.0.0.0', '1.0.0');
        $package->setType('kirby-cms');
        $this->assertEquals('custom-vendor', $this->installer->getInstallPath($package));

        $this->composer->getConfig()->merge([
            'config' => [
                'vendor-dir' => 'custom-vendor'
            ]
        ]);

        $package = new Package('getkirby/cms', '1.0.0.0', '1.0.0');
        $package->setType('kirby-cms');
        $this->installer->getInstallPath($package);
    }
}
