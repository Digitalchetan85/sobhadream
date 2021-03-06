<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2f73df9183841b7f0a58d6ee4d7888c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2f73df9183841b7f0a58d6ee4d7888c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2f73df9183841b7f0a58d6ee4d7888c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb2f73df9183841b7f0a58d6ee4d7888c::$classMap;

        }, null, ClassLoader::class);
    }
}
