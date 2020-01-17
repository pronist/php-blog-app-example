<?php

namespace Pronist\PHPBlog\Tests\Controller\Post;

use PHPUnit\Framework\TestCase;

/**
 * @requires extension mysqli
 */
final class WriteTest extends TestCase
{
    use \Pronist\PHPBlog\Tests\DatabaseTrait;

    /**
     * @covers \showWriteForm
     * @runInSeparateProcess
     */
    public function testShowRegisterForm()
    {
        ob_start();

        $user = $this->user();
        startSession();
        setSession('user', $user);

        $this->assertEquals(showWriteForm($user), 1);

        ob_end_clean();
    }
}