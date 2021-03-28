<?php


require_once './view/view_index.php';

class controller_index {
    private $view;


    function __construct() {
            $this->view = new view_index();
    }

    function home(){
        $this->view->show_home();
    }

    function enviar(){
        $to = "juanmutilba@gmail.com";
        $subject = $_POST['nombre'];
        $message = $_POST['mensaje'];
        mail($to , $subject , $message);
        
        $this->view->mensaje_enviado();
        
    }

}