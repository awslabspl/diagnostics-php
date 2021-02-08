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
    /**
     * @since 0.1
     * @return mixed
     */
    public function getScriptName();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getScriptFileName();
}