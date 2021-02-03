<?php


namespace diagnosticsphp\core;


class ServerClass implements ServerInfoInterface
{
    // Server Address
    private $sa;
    private $sai;
    private $sn;
    private $sport;
    private $sprot;
    private $ssign;
    private $ssoft;

    public function getServerAddress()
    {
        $this->sa = $_SERVER['SERVER_ADDR'];
        if (isset($this->sa)){
            // @todo Implement something more sophisticated
            echo $this->sa;
        } else {
            // Error
        }
    }

    public function getServerAdminInfo()
    {
        $this->sai = $_SERVER['SERVER_ADMIN'];
        if (isset($this->sai)){
            // @todo Implement something more sophisticated
            echo $this->sai;
        } else {
            // Error
        }
    }

    public function getServerName()
    {
        if (isset($this->sn)){
            // @todo Implement something more sophisticated
            echo $this->sn;
        } else {
            // Error
        }
    }

    public function getServerPort()
    {
        if (isset($this->sport)){
            // @todo Implement something more sophisticated
            echo $this->sport;
        } else {
            // Error
        }
    }

    public function getServerProtocol()
    {
        if (isset($this->sprot)){
            // @todo Implement something more sophisticated
            echo $this->sprot;
        } else {
            // Error
        }
    }

    public function getServerSignature()
    {
        if (isset($this->ssign)){
            // @todo Implement something more sophisticated
            echo $this->ssign;
        } else {
            // Error
        }
    }

    public function getServerSoftware()
    {
        if (isset($this->ssoft)){
            // @todo Implement something more sophisticated
            echo $this->ssoft;
        } else {
            // Error
        }
    }
}