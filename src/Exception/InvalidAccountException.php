<?php


namespace HikCloud\Exception;


use Exception;

class InvalidAccountException extends Exception
{
    public function __construct()
    {
        parent::__construct("account is invalid");
    }
}