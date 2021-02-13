<?php

namespace diagnosticsphp\core\generalInterface;

use generalInterfaceTest;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class generalInterfaceTestSuite
 * @package diagnosticsphp\core\generalInterface
 */
class generalInterfaceTestSuite extends TestCase
{

    /**
     * @covers \PHPUnit\Util\Exception
     */
    public function testDefinition(){
        if ((!file_exists(GENERAL_INTERFACE)) && (!is_readable(GENERAL_INTERFACE))){
            throw new Exception(NON_EXISTENT_OR_NOT_READABLE);
        } else {
            $this->doDelete();
        }
    }

    /**
     * @param string $originalClassName
     * @param array $configuration
     * @return MockObject
     */
    public function createConfiguredMock(string $originalClassName, array $configuration): MockObject
    {
        $originalClassName = ClassName::class;
        $configuration = $_GET['settings'];
        return parent::createConfiguredMock($originalClassName, $configuration);
    }

    /**
     * @return void
     */
    public function expectError(): void
    {
        parent::expectError();
    }

    /**
     * @param string $originalClassName
     * @return MockObject
     */
    protected function createMock(string $originalClassName): MockObject
    {
        $originalClassName = ClassName::class;
        return parent::createMock($originalClassName);
    }

    /**
     * @return bool
     */
    public function isRunTestInSeparateProcess(): bool
    {
        return $this->runTestInSeparateProcess;
    }
}
