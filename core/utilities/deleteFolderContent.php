<?php


namespace diagnosticsphp\core\utilities;


use PhpParser\Error;
use PHPUnit\Util\Exception;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class deleteFolderContent implements LoggerInterface
{
    /**
     * @param $dir
     * @version 0.1
     * @since 10/02/2021
     */
    public function delete_folder_and_contents($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir."/".$object) == "dir")
                        // @todo: Find better alternative
                    {
                        $this->log(LogLevel::INFO, OBJECT_IS_ELIGIBLE_FOR_DELETION);
                    }
                    else unlink   ($dir."/".$object);
                }
            }
            reset($objects);
            if (! rmdir($dir)){
                echo '<div class = "warning">Could not delete existing content, please ensure no other programs or 
			utilities are accessing the folder or contents - <strong>' . $dir . '</strong></div><br>';
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function emergency($message, array $context = array())
    {
        $message = (new Error)->getMessage();
        $this->log(LogLevel::EMERGENCY, $message);
    }

    /**
     * @inheritDoc
     */
    public function alert($message, array $context = array())
    {
        $this->emergency();
    }

    /**
     * @inheritDoc
     */
    public function critical($message, array $context = array())
    {
        $this->emergency();
    }

    /**
     * @inheritDoc
     */
    public function error($message, array $context = array())
    {
        $message = (new Error)->getMessage();
        $this->log(LogLevel::ERROR, $message);
    }

    /**
     * @inheritDoc
     */
    public function warning($message, array $context = array())
    {
        $message = "Warning !!!";
        $this->log(LogLevel::WARNING, $message);
    }

    /**
     * @inheritDoc
     */
    public function notice($message, array $context = array())
    {
        $message = ""; // Insert text here
        $this->log(LogLevel::NOTICE, $message);
    }

    /**
     * @inheritDoc
     */
    public function info($message, array $context = array())
    {
        $message = ""; // Insert text here
        $this->log(LogLevel::INFO, $message);
    }

    /**
     * @inheritDoc
     */
    public function debug($message, array $context = array())
    {
        $message = \http\Exception::getMessage;
        $this->log(LogLevel::DEBUG, $message);
    }

    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = array())
    {
    }
}