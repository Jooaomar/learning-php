<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9669a6c99977c03c9a02f44da0881e8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9669a6c99977c03c9a02f44da0881e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9669a6c99977c03c9a02f44da0881e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9669a6c99977c03c9a02f44da0881e8::$classMap;

        }, null, ClassLoader::class);
    }
}
