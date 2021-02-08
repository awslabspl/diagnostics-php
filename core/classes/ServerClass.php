<?php


namespace diagnosticsphp\core\serverClass;


use diagnosticsphp\core\serverInfoInterface\ServerInfoInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Class ServerClass
 * @package diagnosticsphp\core\serverClass
 * @version 0.1
 *
 * WARMING: This class returns potentially dangerous info. Use wisely!
 */
abstract class ServerClass implements ServerInfoInterface, LoggerInterface
{
    // Server Address
    private $sa;
    private $sai;
    private $sn;
    private $sport;
    private $sprot;
    private $ssign;
    private $ssoft;

    /**
     * @since 0.1-pre
     */
    public function getServerAddress()
    {
        include './core/defines/definesClass.php';
        $this->sa = $_SERVER['SERVER_ADDR'];
        if (isset($this->sa)){
            // @todo Implement something more sophisticated
            echo $this->sa;
        } else {
            $this->log(LogLevel::ERROR, NO_SERVER_ADR_DEFINED);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerAdminInfo()
    {
        $this->sai = $_SERVER['SERVER_ADMIN'];
        if (isset($this->sai)){
            // @todo Implement something more sophisticated
            echo $this->sai;
        } else {
            $this->log(LogLevel::ERROR, SERVER_ADMIN_INFO);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerName()
    {
        if (isset($this->sn)){
            // @todo Implement something more sophisticated
            echo $this->sn;
        } else {
            $this->log(LogLevel::ERROR, NO_SERVER_NAME);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerPort()
    {
        if (isset($this->sport)){
            // @todo Implement something more sophisticated
            echo $this->sport;
        } else {
            $this->log(LogLevel::NOTICE, $this->sport);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerProtocol()
    {
        if (isset($this->sprot)){
            // @todo Implement something more sophisticated
            echo $this->sprot;
        } else {
            $this->log(LogLevel::NOTICE, $this->sprot);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerSignature()
    {
        if (isset($this->ssign)){
            // @todo Implement something more sophisticated
            echo $this->ssign;
        } else {
            $this->log(LogLevel::NOTICE, $this->ssign);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerSoftware()
    {
        if (isset($this->ssoft)){
            // @todo Implement something more sophisticated
            echo $this->ssoft;
        } else {
            $this->log(LogLevel::NOTICE, $this->ssoft);
        }
    }
}