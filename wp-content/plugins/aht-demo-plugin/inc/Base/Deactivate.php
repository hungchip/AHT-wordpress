<?php

namespace Inc\Base;

class Deactivate
{
    public static function deactitive()
    {
        flush_rewrite_rules();
    }
}
