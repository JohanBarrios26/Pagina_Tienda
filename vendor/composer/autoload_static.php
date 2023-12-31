<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c3d62e919c2177ee2d1eff04c5d4018
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c3d62e919c2177ee2d1eff04c5d4018::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c3d62e919c2177ee2d1eff04c5d4018::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c3d62e919c2177ee2d1eff04c5d4018::$classMap;

        }, null, ClassLoader::class);
    }
}
