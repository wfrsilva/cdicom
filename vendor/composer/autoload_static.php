<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06737c9951df163e6314ac5e4087a7ae
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPOnCouch\\Exceptions\\' => 22,
            'PHPOnCouch\\Adapter\\' => 19,
            'PHPOnCouch\\' => 11,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPOnCouch\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-on-couch/php-on-couch/src/Exceptions',
        ),
        'PHPOnCouch\\Adapter\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-on-couch/php-on-couch/src/Adapter',
        ),
        'PHPOnCouch\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-on-couch/php-on-couch/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Thrift' => 
            array (
                0 => __DIR__ . '/..' . '/leric/php-thrift/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06737c9951df163e6314ac5e4087a7ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06737c9951df163e6314ac5e4087a7ae::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit06737c9951df163e6314ac5e4087a7ae::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
