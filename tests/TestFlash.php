<?php

use Mockery as m;
use PHPUnit\Framework\TestCase;
use GeekGhc\LaraFlash\FlashNotifier as FlashNotify;

class TestFlash extends TestCase
{
    protected $session;
    protected $flashy;

    public function setUp()
    {
        $this->session = m::mock('GeekGhc\LaraFlash\SessionStore');
        $this->flashy = new FlashNotify($this->session);
    }

    public function testSuccess()
    {
        $this->flashy->success('Message');
        $this->assertEquals(Session::get('flash_notification.message'), 'Message');
    }

    public function testError()
    {
        $this->flashy->error('Message');
        $this->assertEquals(Session::get('flash_notification.message'), 'Message');
    }

    public function testInfo()
    {
        $this->myflash->info('Message');
        $this->assertEquals(Session::get('flash_notification.message'), 'Message');
    }

    public function testWarning()
    {
        $this->myflash->warning('Message');
        $this->assertEquals(Session::get('flash_notification.message'), 'Message');
    }
}