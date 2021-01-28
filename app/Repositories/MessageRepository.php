<?php
namespace App\Repositories;

class ResponseRepository
{
    public function success($name, $message)
    {
        return [
            'title'      => $name,
            'message'    => $message,
            'alert-type' => 'success',
        ];
    }
    public function error($name, $message)
    {
        return [
            'title'      => $name,
            'message'    => $message,
            'alert-type' => 'error',
        ];
    }
}
