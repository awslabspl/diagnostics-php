<?php


namespace diagnosticsphp\core;


use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

abstract class RemoteInfoClass implements RemoteInfoInterface, LoggerInterface
{

    private $rh;
    private $ra;
    private $rp;

    public function getRemoteHost()
    {
        $this->rh = $_SERVER['REMOTE_ADDR'];
        if (isset($this->rh)){
            echo $this->rh;
        } else {
            // @todo Think of something better
            $this->log(LogLevel::ERROR, "Cannot be empty.");
        }
    }

    public function getRemoteAddress()
    {
        $this->ra = $_SERVER['REMOTE_ADDR'];
        if (isset($this->ra)){
            echo $this->ra;
        } else {
            $this->log(LogLevel::ERROR, "Cannot be empty.");
        }
    }

    public function getRemotePort()
    {
        $this->rp = $_SERVER['REMOTE_PORT'];
        if (isset($this->rp)){
            echo $this->rp;
        } else {
            $this->log(LogLevel::ERROR, "Cannot be empty.");
        }
    }
}