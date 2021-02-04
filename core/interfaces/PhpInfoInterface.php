<?php


namespace diagnosticsphp\core\phpInfoInterface;

/**
 * Interface PhpInfoInterface
 * @package diagnosticsphp\core\phpInfoInterface
 * @version 0.1
 *
 * Imports PHP related tests
 */
interface PhpInfoInterface
{
    public function getAuthBrokerInfo();
    public function getAuthUserInfo();
    public function getPhpInfo();
}