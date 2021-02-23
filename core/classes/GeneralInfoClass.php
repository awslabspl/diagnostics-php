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
            $this->log(LogLevel::ERROR, htmlspecialchars(NO_UA_OR_UA_NOT_VALID, ENT_QUOTES, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->ua, ENT_QUOTES, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpServerVars()
    {
        $this->httpServersVars = HTTP_SERVER_VARS;
        if (!$this->httpServersVars){
            $this->log(LogLevel::ERROR, htmlspecialchars(NO_GLOBALS_SET_OR_MISCONFIGURED_PHP, ENT_QUOTES, 'UTF-8'));
        } else {
            print_r(htmlspecialchars($this->httpServersVars, ENT_QUOTES, 'UTF-8'));
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getAuthType()
    {
        $this->authType = $_SERVER['AUTH_TYPE'];
        if (!$this->authType){
            $this->log(LogLevel::ERROR, htmlspecialchars(NO_AUTH_SET, ENT_QUOTES, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->authType, ENT_QUOTES, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getDocumentRoot()
    {
        $this->docRoot = $_SERVER['DOCUMENT_ROOT'];
        if (!$this->docRoot){
            $this->log(LogLevel::ERROR, htmlspecialchars($this->docRoot, NO_ROOT_SET, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->docRoot, NO_ROOT_SET, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getGateWayInterface()
    {
        $this->gwi = $_SERVER['GATEWAY_INTERFACE'];
        if (!$this->gwi){
            $this->log(LogLevel::ERROR, htmlspecialchars($this->gwi, NO_GATEWAY_SET, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->gwi, NO_GATEWAY_SET, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpAccept()
    {
        $this->httpAccept = $_SERVER['HTTP_ACCEPT'];
        if (!$this->httpAccept){
            $this->log(LogLevel::INFO, htmlspecialchars($this->httpAccept, SERVER_ACCEPTS, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->httpAccept, SERVER_ACCEPTS, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpEncoding()
    {
        $this->httpEncoding = $_SERVER['HTTP_ACCEPT_ENCODING'];
        if (!$this->httpEncoding) {
            $this->log(LogLevel::INFO, htmlspecialchars($this->httpAccept, SERVER_ACCEPTS, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->httpAccept, SERVER_ACCEPTS, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getCharset()
    {
        $this->charset = $_SERVER['HTTP_ACCEPT_CHARSET'];
        if (!$this->charset){
            $this->log(LogLevel::INFO, htmlspecialchars($this->charset, NO_CHARSET, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->charset, NO_CHARSET, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getUsedLanguage()
    {
        $this->usedRealLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        if (!$this->usedRealLanguage){
            $this->log(LogLevel::INFO, htmlspecialchars($this->usedRealLanguage, NO_LANG_SET, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->usedRealLanguage, NO_LANG_SET, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getConnectionDetails()
    {
        $this->connDetails = $_SERVER['HTTP_CONNECTION'];
        print_r(htmlspecialchars($this->connDetails));
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpHost()
    {
        $this->httpHost = $_SERVER['HTTP_HOST'];
        if (!$this->httpHost){
            $this->log(LogLevel::WARNING, htmlspecialchars($this->httpHost, NO_HOSTNAME_SET, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->httpHost, NO_HOSTNAME_SET, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttpReferer()
    {
        $this->httpReferer = $_SERVER['HTTP_REFERER'];
        if (!$this->httpReferer){
            $this->log(LogLevel::INFO, htmlspecialchars($this->httpReferer, NO_REFERER_SET, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->httpReferer, NO_REFERER_SET, 'UTF-8');
        }
    }

    /**
     * @since 0.1-pre
     */
    public function getHttps()
    {
        $this->https = $_SERVER['HTTPS'];
        if ((0 == !$this->https) || (!HTTP_SERVER_VARS['https'])){
            $this->log(LogLevel::WARNING, htmlspecialchars($this->https, NO_HTTPS, 'UTF-8'));
        } else {
            echo htmlspecialchars($this->https, NO_HTTPS,'UTF-8');
        }
    }
}