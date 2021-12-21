<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe039094b485c483fc96742830dde946
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe039094b485c483fc96742830dde946::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe039094b485c483fc96742830dde946::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe039094b485c483fc96742830dde946::$classMap;

        }, null, ClassLoader::class);
    }
}