<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email()
    {
        $return = validate_email('kfiguera@smartwebtools.net');
        $this->assertTrue($return);
        $return = validate_email('kfiguera@@smartwebtools.net');
        $this->assertFalse($return);
    }
}
