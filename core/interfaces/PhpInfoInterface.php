<?php


namespace diagnosticsphp\core;


interface PhpInfoInterface
{
    public function getAuthBrokerInfo();
    public function getAuthUserInfo();
    public function getPhpInfo();
}