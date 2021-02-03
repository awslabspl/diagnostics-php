<?php

namespace Psr\Log\Test;

/**
 * This classes is internal and does not follow the BC promise.
 *
 * Do NOT use this classes in any way.
 *
 * @internal
 */
class DummyTest
{
    public function __toString()
    {
        return 'DummyTest';
    }
}
