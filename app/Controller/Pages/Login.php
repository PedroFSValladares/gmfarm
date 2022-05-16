<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Login extends Page
{
    public static function getLogin(){

        $content = View::render('pages/login', []);

        return parent::getPage('LOGIN > GMFARM', $content);
    }
}