<?php


namespace diagnosticsphp\core\serverInfoInterface;

/**
 * Interface ServerInfoInterface
 * @package diagnosticsphp\core\serverInfoInterface
 * @version 0.1
 *
 * Imports server related tests
 */
interface ServerInfoInterface
{
    /**
     * @since 0.1
     * @return mixed
     */
    public function getServerAddress();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getServerAdminInfo();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getServerName();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getServerPort();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getServerProtocol();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getServerSignature();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getServerSoftware();
}