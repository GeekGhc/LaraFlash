<?php
namespace GeekGhc\LaraFlash;

class FlashNotifier
{
    private $session;

    function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    public function success($message)
    {
        return $this->message($message,'success');
    }

    public function error($message)
    {
        return $this->message($message,'error');
    }

    public function warning($message)
    {
        return $this->message($message,'warning');
    }

    public function info($message){
        return $this->message($message,'info');
    }

    public function modal($message, $title = 'Message', $type = 'info')
    {
        $this->message($message, $type);
        $this->session->flash('flash_notification.modal', true);
        $this->session->flash('flash_notification.title', $title);
        return $this;
    }

    public function message($message,$type = 'info')
    {
        $this->session->flash('flash_notification.message',$message);
        $this->session->flash('flash_notification.type',$type);
        return $this;
    }

}