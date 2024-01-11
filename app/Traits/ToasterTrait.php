<?php

namespace App\Traits;

trait ToasterTrait
{
    public function warning($msg)
    {
        return  toastr()->warning($msg);
    }
    public function error($msg)
    {
        return  toastr()->error($msg);
    }
    public function success($msg)
    {
        return  toastr()->success($msg);
    }
}