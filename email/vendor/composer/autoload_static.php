<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23ce66e3ed8de16fe30af117972df970
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23ce66e3ed8de16fe30af117972df970::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23ce66e3ed8de16fe30af117972df970::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
