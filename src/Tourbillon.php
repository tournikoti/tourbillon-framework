<?php

namespace Tourbillon;

use Tourbillon\Configurator\Configurator;
use Tourbillon\ServiceContainer\ServiceLocator;

/**
 * Description of Tourbillon
 *
 * @author gjean
 */
class Tourbillon
{
    protected $configPath;
    protected $mode;

    /**
     *
     * @var ServiceLocator
     */
    protected $serviceLocator;

    /**
     * Permet de lancer l'application. Utilise dans le fichier index.php a la
     * racine
     */
    public function run()
    {
        $configurator = Configurator::getInstance($this->configPath);
        $this->serviceLocator = new ServiceLocator((array) $configurator->get('services'));
    }

    /**
     *
     * @param string $path
     */
    public function setConfiguration($path)
    {
        $this->configPath = $path;
    }

    /**
     *
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     *
     * @param string $mode
     */
    public function getMode()
    {
        return self::$mode;
    }

}
