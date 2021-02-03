<?php


namespace diagnosticsphp\core;


interface RemoteInfoInterface
{
    public function getRemoteHost();
    public function getRemoteAddress();
    public function getRemotePort();
}