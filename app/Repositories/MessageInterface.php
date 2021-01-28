<?php
namespace App\Repositories;

interface MessageInterface
{
    public function success($name, $message);
    public function error($name, $message);
}
