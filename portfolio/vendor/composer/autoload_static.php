<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71f41345b1f6763fe89751b1708a7306
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71f41345b1f6763fe89751b1708a7306::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71f41345b1f6763fe89751b1708a7306::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71f41345b1f6763fe89751b1708a7306::$classMap;

        }, null, ClassLoader::class);
    }
}
