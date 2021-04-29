<?php
require_once "./libs/smarty/Smarty.class.php";
class view_index
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function show_home()
    {
        $this->smarty->display('./templates/home.tpl');
    }

    function mensaje_enviado()
    {
        $this->smarty->display('./templates/mailEnviado.tpl');

    }
}
