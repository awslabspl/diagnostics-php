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
    /**
     * @since 0.1
     * @return mixed
     */
    public function getAuthBrokerInfo();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getAuthUserInfo();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getPhpInfo();
}