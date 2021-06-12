<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email_validate()
    {
        $return = Email::validate( 'kfiguera@smartwebtools.net');
        $this->assertTrue($return);

        $return = Email::validate( 'kfiguera@@smartwebtools.net');
        $this->assertFalse($return);
    }
}
