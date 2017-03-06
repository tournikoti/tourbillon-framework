<?php

namespace Tourbillon;

/**
 * Description of Tourbillon
 *
 * @author gjean
 */
class Tourbillon
{
    static protected $oInstance;
    static protected $configPath;
    static protected $mode;

    public function __construct()
    {
        
    }

    /**
     * Permet de lancer l'application. Utilise dans le fichier index.php a la
     * racine
     */
    public static function run()
    {
        if (self::$oInstance === null) {
            self::$oInstance = new self();
        }
    }

    /**
     *
     * @param string $path
     */
    public static function configuration($path)
    {
        self::$configPath = $path;
    }

    /**
     *
     * @param string $mode
     */
    public static function mode($mode)
    {
        self::$mode = $mode;
    }

    /**
     *
     * @param string $mode
     */
    public static function getMode()
    {
        return self::$mode;
    }

}
