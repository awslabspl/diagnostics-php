<?php


namespace diagnosticsphp\core;


interface WebBrowserInfo
{
    public function getUserAgent();
    public function getHttpServerVars();
    public function getUserOSInfo();
    public function getRandomization();
}