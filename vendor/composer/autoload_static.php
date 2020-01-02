<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7aa737f5f1fa2fcfbf8a80294596532
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CentryPs\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CentryPs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7aa737f5f1fa2fcfbf8a80294596532::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7aa737f5f1fa2fcfbf8a80294596532::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}