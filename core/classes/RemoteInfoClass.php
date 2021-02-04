<?php


namespace diagnosticsphp\core\remoteInfoClass;


use diagnosticsphp\core\rii\RemoteInfoInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Class RemoteInfoClass
 * @package diagnosticsphp\core\remoteInfoClass
 * @version 0.1
 */
abstract class RemoteInfoClass implements RemoteInfoInterface, LoggerInterface
{

    private $rh;
    private $ra;
    private $rp;

    /**
     * @since 0.1-pre
     */
    public function getRemoteHost()
    {
        $this->rh = $_SERVER['REMOTE_ADDR'];
        if (isset($this->rh)){
            echo $this->rh;
        } else {
            // @todo Think of something better
            $this->log(LogLevel::ERROR, VAR_CANNOT_BE_EMPTY);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getRemoteAddress()
    {
        $this->ra = $_SERVER['REMOTE_ADDR'];
        if (isset($this->ra)){
            echo $this->ra;
        } else {
            $this->log(LogLevel::ERROR, VAR_CANNOT_BE_EMPTY);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getRemotePort()
    {
        $this->rp = $_SERVER['REMOTE_PORT'];
        if (isset($this->rp)){
            echo $this->rp;
        } else {
            $this->log(LogLevel::ERROR, VAR_CANNOT_BE_EMPTY);
        }
    }
}