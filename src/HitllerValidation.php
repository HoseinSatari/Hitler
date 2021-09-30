<?php namespace Hittler;


class HitllerValidation
{
    public function validation(array $data , $field)
    {
         return isset($data[$field]);
    }
}