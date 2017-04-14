<?php

use Mockery as m;
use PHPUnit\Framework\TestCase;
use GeekGhc\LaraFlash\FlashNotifier;

class TestFlash extends TestCase
{
    protected $session;
    protected $flashy;

    public function setUp()
    {
        $this->session = m::mock('GeekGhc\LaraFlash\SessionStore');
        $this->flashy = new FlashNotifier($this->session);
    }

    public function testSuccess()
    {
        $this->session->shouldReceive('flash')->with('flash_notification.message', 'Welcome Aboard');
        $this->session->shouldReceive('flash')->with('flash_notification.type', 'success');
        $this->flashy->success('Welcome Aboard');
    }

    public function testError()
    {
        $this->session->shouldReceive('flash')->with('flash_notification.message', 'Welcome Aboard');
        $this->session->shouldReceive('flash')->with('flash_notification.type', 'error');
        $this->flashy->error('Welcome Aboard');
    }

    public function testInfo()
    {
        $this->session->shouldReceive('flash')->with('flash_notification.message', 'Welcome Aboard');
        $this->session->shouldReceive('flash')->with('flash_notification.type', 'info');
        $this->flashy->info('Welcome Aboard');
    }

    public function testWarning()
    {
        $this->session->shouldReceive('flash')->with('flash_notification.message', 'Welcome Aboard');
        $this->session->shouldReceive('flash')->with('flash_notification.type', 'warning');
        $this->flashy->warning('Welcome Aboard');
    }
}