<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7c6619c11cb4878b43ca53bd39815ae
{
    public static $classMap = array (
        'CSV' => __DIR__ . '/../..' . '/classes/CSV.php',
        'CakeDay' => __DIR__ . '/../..' . '/classes/CakeDay.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DataSend' => __DIR__ . '/../..' . '/classes/DataSend.php',
        'EmployeeData' => __DIR__ . '/../..' . '/classes/EmployeeData.php',
        'FilterRows' => __DIR__ . '/../..' . '/classes/EmployeeData.php',
        'NameDate' => __DIR__ . '/../..' . '/classes/NameDate.php',
        'RowDates' => __DIR__ . '/../..' . '/classes/RowDates.php',
        'SingleDates' => __DIR__ . '/../..' . '/classes/SingleDates.php',
        'ThirdDates' => __DIR__ . '/../..' . '/classes/ThirdDates.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita7c6619c11cb4878b43ca53bd39815ae::$classMap;

        }, null, ClassLoader::class);
    }
}
