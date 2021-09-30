<?php namespace Hittler;


class HitllerValidation
{
    public function has(array $data , $field)
    {
         return isset($data[$field]);
    }
}