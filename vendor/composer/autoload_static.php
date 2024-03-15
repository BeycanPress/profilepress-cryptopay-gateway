<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b588e2e3118b6a111006bb6d905d6b6
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BeycanPress\\CryptoPay\\PP\\' => 25,
            'BeycanPress\\CryptoPay\\Integrator\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BeycanPress\\CryptoPay\\PP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'BeycanPress\\CryptoPay\\Integrator\\' => 
        array (
            0 => __DIR__ . '/..' . '/beycanpress/cryptopay-integrator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b588e2e3118b6a111006bb6d905d6b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b588e2e3118b6a111006bb6d905d6b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b588e2e3118b6a111006bb6d905d6b6::$classMap;

        }, null, ClassLoader::class);
    }
}
