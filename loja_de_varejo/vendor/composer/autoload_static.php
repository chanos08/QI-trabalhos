<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7c25c8fb9e32033311bc9fbe13a33a6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src ',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita7c25c8fb9e32033311bc9fbe13a33a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7c25c8fb9e32033311bc9fbe13a33a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7c25c8fb9e32033311bc9fbe13a33a6::$classMap;

        }, null, ClassLoader::class);
    }
}
