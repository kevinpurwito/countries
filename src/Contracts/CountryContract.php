<?php

namespace Kevinpurwito\LaravelCountry\Contracts;

interface CountryContract
{
    public static function findByName(string $name): self;

    public static function findByIso2(string $iso2): self;

    public static function findByIso3(string $iso3): self;

    public function setPopular(bool $isPopular);

    public function setOrdinal(int $ordinal);

    public function createProvince($code, $name);
}
