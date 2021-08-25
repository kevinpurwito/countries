<?php

namespace Kevinpurwito\LaravelCountry\Contracts;

interface ProvinceContract
{
    public function setOrdinal(int $ordinal);

    public function createCity($code, $name);
}
