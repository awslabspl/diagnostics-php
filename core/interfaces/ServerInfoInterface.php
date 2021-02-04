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
    public function getServerAddress();

    // @todo Dodać ostrzeżenie o niebezpieczeństwie
    public function getServerAdminInfo();
    public function getServerName();
    public function getServerPort();
    public function getServerProtocol();
    public function getServerSignature();
    public function getServerSoftware();
}