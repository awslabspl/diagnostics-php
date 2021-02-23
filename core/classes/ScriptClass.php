<?php


namespace diagnosticsphp\core\scriptClass;


use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Class ScriptClass
 * @package diagnosticsphp\core\scriptClass
 * @version 0.1
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
            echo htmlspecialchars($this->scn);
        } else {
            echo htmlspecialchars($this->scn);
            $this->log(LogLevel::NOTICE, htmlspecialchars($this->scn, NO_SCRIPT_LOADED, 'UTF-8'));
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getScriptFileName()
    {
        $this->sfn = $_SERVER['SCRIPT_FILENAME'];
        if (isset($this->sfn)){
            echo htmlspecialchars($this->sfn);
        } else {
            echo $this->sfn;
            $this->log(LogLevel::ERROR, htmlspecialchars($this->sfn, NO_SCRIPT_LOADED, 'UTF-8'));
        }
    }
}