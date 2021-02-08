<?php


namespace diagnosticsphp\core\generalInfoClass;


use diagnosticsphp\core\generalInterface\General;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Class GeneralInfoClass
 * @package diagnosticsphp\core\generalInfoClass
 * @version 0.1
 *
 * This abstract class tests all the HTTP_* subarrays
 */
abstract class GeneralInfoClass implements General, LoggerInterface
{
    private $ua;
    private $httpServersVars;
    private $authType;
    private $docRoot;
    private $gwi;
    private $httpAccept;
    private $httpEncoding;
    private $charset;
    private $usedRealLanguage;
    private $connDetails;
    private $httpHost;
    private $httpReferer;
    private $https;

    /**
     * @since 0.1-pre
     */
    public function getUserAgent()
    {
        include '../defines/definesClass.php';
        $this->ua = $_SERVER['HTTP_USER_AGENT'];
        if (!$this->ua){
            $this->log(LogLevel::ERROR, NO_UA_OR_UA_NOT_VALID);
        } else {
            echo $this->ua;
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpServerVars()
    {
        $this->httpServersVars = HTTP_SERVER_VARS;
        if (!$this->httpServersVars){
            $this->log(LogLevel::ERROR, NO_GLOBALS_SET_OR_MISCONFIGURED_PHP);
        } else {
            print_r($this->httpServersVars);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getAuthType()
    {
        $this->authType = $_SERVER['AUTH_TYPE'];
        if (!$this->authType){
            $this->log(LogLevel::ERROR, NO_AUTH_SET);
        } else {
            echo $this->authType;
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getDocumentRoot()
    {
        $this->docRoot = $_SERVER['DOCUMENT_ROOT'];
        if (!$this->docRoot){
            $this->log(LogLevel::ERROR, NO_ROOT_SET);
        } else {
            echo $this->docRoot;
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getGateWayInterface()
    {
        $this->gwi = $_SERVER['GATEWAY_INTERFACE'];
        if (!$this->gwi){
            $this->log(LogLevel::ERROR, NO_GATEWAY_SET);
        } else {
            echo $this->gwi;
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpAccept()
    {
        $this->httpAccept = $_SERVER['HTTP_ACCEPT'];
        if (!$this->httpAccept){
            $this->log(LogLevel::INFO, SERVER_ACCEPTS);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpEncoding()
    {
        $this->httpEncoding = $_SERVER['HTTP_ACCEPT_ENCODING'];
        if (!$this->httpEncoding){
            $this->log(LogLevel::INFO, SERVER_ACCEPTS);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getCharset()
    {
        $this->charset = $_SERVER['HTTP_ACCEPT_CHARSET'];
        if (!$this->charset){
            $this->log(LogLevel::INFO, SERVER_ACCEPTS);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getUsedLanguage()
    {
        $this->usedRealLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        if (!$this->usedRealLanguage){
            $this->log(LogLevel::INFO, SERVER_ACCEPTS);
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getConnectionDetails()
    {
        $this->connDetails = $_SERVER['HTTP_CONNECTION'];
        print_r($this->connDetails);
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpHost()
    {
        $this->httpHost = $_SERVER['HTTP_HOST'];
        if (!$this->httpHost){
            $this->log(LogLevel::WARNING, NO_HOSTNAME_SET);
        } else {
            echo $this->httpHost;
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpReferer()
    {
        $this->httpReferer = $_SERVER['HTTP_REFERER'];
        if (!$this->httpReferer){
            $this->log(LogLevel::INFO, NO_REFERER_SET);
        } else {
            echo $this->httpReferer;
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttps()
    {
        $this->https = $_SERVER['HTTPS'];
        if ((0 == !$this->https) || (!HTTP_SERVER_VARS['https'])){
            $this->log(LogLevel::WARNING, NO_HTTPS);
        }
    }
}