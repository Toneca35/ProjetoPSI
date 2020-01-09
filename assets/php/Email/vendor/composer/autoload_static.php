<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit563c12868aa60b33ed1ff43735de64ab
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit563c12868aa60b33ed1ff43735de64ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit563c12868aa60b33ed1ff43735de64ab::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
