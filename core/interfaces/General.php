<?php


namespace diagnosticsphp\core;


interface General
{
    // Misc
    public function getUserAgent();
    public function getHttpServerVars();
    public function getAuthType();
    public function getDoxumentRoot();
    public function getGateWayInterface();
    public function getHttpAccept();
    public function getHttpEncoding();
    public function getCharset();
    // @todo Sprawdzić czy chodzi o język programowania czy ludzki
    public function getUsedLanguage();
    public function getConnectionDetails();
    public function getHttpHost();
    public function getHttpReferer();
    public function getHttps();
}