<?php


namespace diagnosticsphp\core\generalInterface;

/**
 * Interface General
 * @package diagnosticsphp\core\generalInterface
 * @version 0.1
 *
 * Imports general tests
 */
interface General
{
    /**
     * @since 0.1
     * @return mixed
     */
    public function getUserAgent();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getHttpServerVars();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getAuthType();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getDocumentRoot();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getGateWayInterface();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getHttpAccept();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getHttpEncoding();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getCharset();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getUsedLanguage();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getConnectionDetails();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getHttpHost();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getHttpReferer();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getHttps();
}