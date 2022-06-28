<?php

namespace App\Exceptions;

use Exception;

class CanNotGetFormActionException extends Exception
{
    public $message = 'Can not get form action';
}
