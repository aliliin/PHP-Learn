<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad8781a26e58654da00a92e15264fcd6
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Learn\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Learn\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad8781a26e58654da00a92e15264fcd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad8781a26e58654da00a92e15264fcd6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
