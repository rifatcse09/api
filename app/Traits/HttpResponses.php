<?php

declare(strict_types=1);

namespace App\Traits;

trait HtttpResponsea
{
    protected function success($data, $message = null, $status = 200)
    {
        return true;
    }
}
