<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda7103cf40f2d4b1fde71d0a15c3f8d8
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jirid\\Why\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jirid\\Why\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda7103cf40f2d4b1fde71d0a15c3f8d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda7103cf40f2d4b1fde71d0a15c3f8d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda7103cf40f2d4b1fde71d0a15c3f8d8::$classMap;

        }, null, ClassLoader::class);
    }
}
