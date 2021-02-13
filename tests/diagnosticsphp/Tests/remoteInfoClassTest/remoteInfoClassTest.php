<?php

namespace diagnosticsphp\Tests\remoteInfoClassTest;

use diagnosticsphp\core\generalInterface\generalInterfaceTestSuite;
use remoteInfoClassTest;

/**
 * Class remoteInfoClassTestTest
 * @package diagnosticsphp\Tests\remoteInfoClassTest
 */
class remoteInfoClassTestTest extends generalInterfaceTestSuite
{
    /**
     * @param $test
     */
    public function hasNewThread($test){
        $this->$test = $test;
        $gits = new generalInterfaceTestSuite();
        $gits->isRunTestInSeparateProcess();
    }
}
