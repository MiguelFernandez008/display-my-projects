<?php

defined('ABSPATH') or die();

interface i_page {
    public function query_vars($query_vars);
    public function template_redirect();
    public function generate_rewrite_rules($wp_rewrite);
}