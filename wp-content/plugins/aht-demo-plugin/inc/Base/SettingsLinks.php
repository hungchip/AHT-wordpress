<?php

namespace Inc\Base;

class SettingsLinks extends BaseController
{
    public function register()
    {
        add_filter("plugin_action_links_" . $this->plugin, array($this, 'setting_link'));
    }

    public function setting_link($links)
    {
        $test = '<a href="admin.php?page=aht_demo" target="blank">Setting</a>';
        $test1 = '<a href="https://www.google.com/" target="blank">Setting 1</a>';
        array_push($links, $test);
        array_push($links, $test1);
        return $links;
    }
}
