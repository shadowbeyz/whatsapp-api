<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0eafaa73ecb37f6c7009603af21792b3
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0eafaa73ecb37f6c7009603af21792b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0eafaa73ecb37f6c7009603af21792b3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
