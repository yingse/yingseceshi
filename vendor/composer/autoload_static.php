<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit877d8bbc8570406edc39e1d20e13f777
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit877d8bbc8570406edc39e1d20e13f777::$classMap;

        }, null, ClassLoader::class);
    }
}
