<?php namespace EniackValidation;

class Validation
{
    public function require(array $data , string $field) : bool
    {
        return isset($data[$field]);
    }
}