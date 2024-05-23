<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6401571a62d462b3eeaad3207b3a7a3
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6401571a62d462b3eeaad3207b3a7a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6401571a62d462b3eeaad3207b3a7a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita6401571a62d462b3eeaad3207b3a7a3::$classMap;

        }, null, ClassLoader::class);
    }
}
