<?php

namespace diagnosticsphp\core\scriptClass;

use diagnosticsphp\core\generalInfoClass\GeneralInfoClass;
use PHPUnit\Framework\TestCase;

/**
 * Class GeneralInfoClassTest
 * @package diagnosticsphp\core\scriptClass\
 */
class GeneralInfoClassTest extends TestCase
{
    /**
     * @return bool
     */
    public function isPreserveGlobalState(): bool
    {
        return $this->preserveGlobalState;
    }
}