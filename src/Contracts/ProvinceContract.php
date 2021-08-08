<?php

namespace Kevinpurwito\LaravelCountry\Contracts;

interface ProvinceContract
{
    public function setOrderNo(int $orderNo);

    public function createCity($code, $name);
}
