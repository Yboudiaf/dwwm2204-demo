<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1ec4557f9b3d8e309cb7709d1984d86
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Users\\' => 6,
        ),
        'T' => 
        array (
            'Toto\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Users\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Toto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/chemin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1ec4557f9b3d8e309cb7709d1984d86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1ec4557f9b3d8e309cb7709d1984d86::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita1ec4557f9b3d8e309cb7709d1984d86::$classMap;

        }, null, ClassLoader::class);
    }
}
