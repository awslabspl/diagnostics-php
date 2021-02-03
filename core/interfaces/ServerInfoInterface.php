<?php


namespace diagnosticsphp\core;


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