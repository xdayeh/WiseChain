<?php

namespace WiseChain\controller;

use WiseChain\core\Controller;

class BlockController extends Controller
{
    public function block(): bool|array|string
    {
        return $this->render("block");
    }
}