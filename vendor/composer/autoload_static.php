<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadb7e92794e0533e519cb48ddfe047a3
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploOO\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploOO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadb7e92794e0533e519cb48ddfe047a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadb7e92794e0533e519cb48ddfe047a3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}