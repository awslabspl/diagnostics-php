<?php


namespace diagnosticsphp\core\scriptClass;


use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Class ScriptClass
 * @package diagnosticsphp\core\scriptClass
 */
abstract class ScriptClass implements ScriptInfoInterface, LoggerInterface
{

    private $scn;
    private $sfn;

    /**
     * @since 0.1-pre
     */
    public function getScriptName()
    {
        $this->scn = $_SERVER['SCRIPT_NAME'];
        if (isset($this->scn)){
            echo $this->scn;
        } else {
            echo $this->scn;
            $this->log(LogLevel::NOTICE, "Script name: ".$this->scn);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getScriptFileName()
    {
        $this->sfn = $_SERVER['SCRIPT_FILENAME'];
        if (isset($this->sfn)){
            echo $this->sfn;
        } else {
            echo $this->sfn;
            $this->log(LogLevel::NOTICE, "File name: ".$this->sfn);
        }
    }
}