<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8a0dd4ded6e5542b62d0de5c2719df9
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nazliguelaydin\\ProjectWeather\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nazliguelaydin\\ProjectWeather\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8a0dd4ded6e5542b62d0de5c2719df9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8a0dd4ded6e5542b62d0de5c2719df9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8a0dd4ded6e5542b62d0de5c2719df9::$classMap;

        }, null, ClassLoader::class);
    }
}