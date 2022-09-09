<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfb5bf08e3efc93e08944731e651e7efb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitfb5bf08e3efc93e08944731e651e7efb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfb5bf08e3efc93e08944731e651e7efb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfb5bf08e3efc93e08944731e651e7efb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
