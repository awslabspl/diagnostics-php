<?php


namespace diagnosticsphp\core\phpInfoInterface;


interface PhpInfoInterface
{
    public function getAuthBrokerInfo();
    public function getAuthUserInfo();
    public function getPhpInfo();
}