<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit691228bab338c936087f977f9788e407
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit691228bab338c936087f977f9788e407::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit691228bab338c936087f977f9788e407::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit691228bab338c936087f977f9788e407::$classMap;

        }, null, ClassLoader::class);
    }
}
