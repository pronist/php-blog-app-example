<?php

namespace Pronist\PHPBlog\Tests\Controller\User;

use PHPUnit\Framework\TestCase;

/**
 * @requires extension mysqli
 */
final class UpdateTest extends TestCase
{
    use \Pronist\PHPBlog\Tests\DatabaseTrait;

    /**
     * @covers \showUserUpdateForm
     * @runInSeparateProcess
     */
    public function testShowUserUpdateForm()
    {
        ob_start();

        $user = $this->user();
        startSession();

        $this->assertEquals(showUserUpdateForm($this->conn, $user), 1);

        ob_end_clean();
    }
}