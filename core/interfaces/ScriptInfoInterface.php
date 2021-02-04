<?php


namespace diagnosticsphp\core\scriptInfoInterface;

/**
 * Interface ScriptInfoInterface
 * @package diagnosticsphp\core\scriptInfoInterface
 * @version 0.1
 *
 * Imports script related tests
 */
interface ScriptInfoInterface
{
    public function getScriptName();
    public function getScriptFileName();
}