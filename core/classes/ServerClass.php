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
            echo htmlspecialchars($this->sa, ENT_QUOTES, 'UTF-8');
        } else {
            $this->log(LogLevel::ERROR, htmlspecialchars(NO_SERVER_ADR_DEFINED, ENT_QUOTES, 'UTF-8'));
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
            echo htmlspecialchars($this->sai, ENT_QUOTES, 'UTF-8');
        } else {
            $this->log(LogLevel::ERROR, htmlspecialchars(SERVER_ADMIN_INFO, ENT_QUOTES, 'UTF-8'));
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerName()
    {
        if (isset($this->sn)){
            // @todo Implement something more sophisticated
            echo htmlspecialchars($this->sn, ENT_QUOTES, 'UTF-8');
        } else {
            $this->log(LogLevel::ERROR, htmlspecialchars(NO_SERVER_NAME, ENT_QUOTES, 'UTF-8'));
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerPort()
    {
        if (isset($this->sport)){
            // @todo Implement something more sophisticated
            echo htmlspecialchars($this->sport, ENT_QUOTES, 'UTF-8');
        } else {
            $this->log(LogLevel::NOTICE, htmlspecialchars($this->sport, ENT_QUOTES, 'UTF-8'));
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerProtocol()
    {
        if (isset($this->sprot)){
            // @todo Implement something more sophisticated
            echo htmlspecialchars($this->sprot, ENT_QUOTES, 'UTF-8');
        } else {
            $this->log(LogLevel::NOTICE, htmlspecialchars($this->sprot, ENT_QUOTES, 'UTF-8'));
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerSignature()
    {
        if (isset($this->ssign)){
            // @todo Implement something more sophisticated
            echo htmlspecialchars($this->ssign, ENT_QUOTES, 'UTF-8');
        } else {
            $this->log(LogLevel::NOTICE, htmlspecialchars($this->ssign, ENT_QUOTES, 'UTF-8'));
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getServerSoftware()
    {
        if (isset($this->ssoft)){
            // @todo Implement something more sophisticated
            echo htmlspecialchars($this->ssoft, ENT_QUOTES, 'UTF-8');
        } else {
            $this->log(LogLevel::NOTICE, htmlspecialchars($this->ssoft, ENT_QUOTES, 'UTF-8'));
        }
    }
}