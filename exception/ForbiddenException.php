<?php

namespace app\core\exception;



class Forbiddenexception extends \Exception{
    protected $message = 'You do not have permission to access this page.';
    protected $code = 403;
}