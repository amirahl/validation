<?php namespace FormValidation;


use http\Encoding\Stream;

class Validation
{
    //**
    public function has(array $data,string $field)
    {
        return isset($data[$field]);
}
}
