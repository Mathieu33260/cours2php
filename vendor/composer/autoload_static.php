<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f8146cf7e7f9426661dd725b53be964
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit6f8146cf7e7f9426661dd725b53be964::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
