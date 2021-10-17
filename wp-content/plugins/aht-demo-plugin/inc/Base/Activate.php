<?php

namespace Inc\Base;

class Activate
{
    public static function actitive()
    {
        flush_rewrite_rules();
    }
}
