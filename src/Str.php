<?php

namespace Hillel\Str;

class Str
{

    public static function after($subject,$after)
    {
        if (strpos($subject, $after) !== false) {
            return substr($subject, strpos($subject, $after) + strlen($after));
        } else {
            return $subject;
        }

    }
    public static function afterLast($subject, $after)
    {
        if (strrpos($subject, $after) !== false) {
            return substr($subject, strrpos($subject, $after) + strlen($after));
        } else {
            return $subject;
        }
    }
}