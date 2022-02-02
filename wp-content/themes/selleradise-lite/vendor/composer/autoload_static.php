<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96437a68c2519f1a6e4736906c4fac6e
{
    public static $files = array (
        'f1e97837e9855c40e752d92dd36d8542' => __DIR__ . '/../..' . '/inc/Helpers.php',
        '1c3c3d83dcc98acbeaced130fd339e05' => __DIR__ . '/../..' . '/inc/class-tgm-plugin-activation.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Selleradise_Lite\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Selleradise_Lite\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96437a68c2519f1a6e4736906c4fac6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96437a68c2519f1a6e4736906c4fac6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit96437a68c2519f1a6e4736906c4fac6e::$classMap;

        }, null, ClassLoader::class);
    }
}
