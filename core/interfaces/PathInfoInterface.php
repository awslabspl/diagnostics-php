<?php


namespace diagnosticsphp\core\pathInfoInterface;

/**
 * Interface PathInfoInterface
 * @package diagnosticsphp\core\pathInfoInterface
 * @version 0.1
 *
 * Imports PATH related test
 */
interface PathInfoInterface
{
    /**
     * @since 0.1
     * @return mixed
     */
    public function getpathInfo();

    /**
     * @since 0.1
     * @return mixed
     */
    public function getPathTranslationInfo();
}