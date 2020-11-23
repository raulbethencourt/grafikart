<?php

namespace App\Entity;

use Core\Interfaces\SessionInterface;

class Flash
{
    private $session;
    private $injection;
    const KEY = 'c_flash';

    public function __construct(SessionInterface $session, $injection = [])
    {
        $this->session = $session;
        $this->injection = $injection;
    }

    public function set($msg, $type = 'success')
    {
        $this->session->set(self::KEY, [
            'msg' => $msg,
            'type' => $type
        ]);
    }

    public function get()
    {
        $flash = $this->session->get(self::KEY);
        $this->session->delete(self::KEY);

        return "<div class='alert alert-{$flash['type']}'>{$flash['msg']}</div>";
    }
}

