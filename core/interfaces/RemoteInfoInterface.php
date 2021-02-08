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
    /**
     * @since 0.1
     * @return mixed
     */
    public function getRemoteHost();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getRemoteAddress();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getRemotePort();
}