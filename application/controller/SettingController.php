<?php

namespace WiseChain\controller;

use WiseChain\core\Controller;
use WiseChain\model\Groups;
use WiseChain\model\Privileges;

class SettingController extends Controller
{
    public function setting(): string|array|bool
    {
        return $this->render('setting');
    }
    public function groups(): bool|array|string
    {
        return $this->render('groups', [
            'Groups' => (new Groups)->getAll()
        ]);
    }
    public function privileges(): bool|array|string
    {
        return $this->render('privileges',[
            'Privileges' => (new Privileges)->getAll()
        ]);
    }
}