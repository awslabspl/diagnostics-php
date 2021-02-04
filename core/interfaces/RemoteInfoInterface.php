<?php


namespace diagnosticsphp\core\rii;

/**
 * Interface RemoteInfoInterface
 * @package diagnosticsphp\core\rii
 * @version 0.1
 *
 * Imports REMOTE_* related tests
 */
interface RemoteInfoInterface
{
    public function getRemoteHost();
    public function getRemoteAddress();
    public function getRemotePort();
}