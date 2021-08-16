<?php namespace RocketValidation;


use http\Encoding\Stream;

class Validation
{
    //**
    public function requir(array $data,string $field)
    {
        return isset($data[$field]);
}
}