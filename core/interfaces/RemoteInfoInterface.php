<?php


namespace diagnosticsphp\core\rii;


interface RemoteInfoInterface
{
    public function getRemoteHost();
    public function getRemoteAddress();
    public function getRemotePort();
}