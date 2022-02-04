<?php

namespace app\core\middlewares;
use app\core\exception\ForbiddenException;
use app\core\Application;


class AuthMiddleware extends BaseMiddleware{
    public array $actions = [];

    /** AuthMiddleware Construct
     * 
     * @param array $actions
     */

     public function __construct (array $actions = []){
         $this->actions = $actions;
     }
    public function execute(){
        if(Application::isGuest()){
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)){
                throw new ForbiddenException();
            }
        }
    }
}