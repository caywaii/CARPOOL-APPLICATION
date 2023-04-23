<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f1a9a4b2bdf317102d7e222a0404048
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f1a9a4b2bdf317102d7e222a0404048::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f1a9a4b2bdf317102d7e222a0404048::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f1a9a4b2bdf317102d7e222a0404048::$classMap;

        }, null, ClassLoader::class);
    }
}