<?php 

defined('ABSPATH') or die();

class dmyp_init_config implements i_init {
    public function __construct() {
        
    }

    public function init() {
        add_filter( 'dmyp_variables_css', array($this, 'dmyp_variables_css'), 10 );
        add_filter( 'dmyp_core_css', array($this, 'dmyp_core_css'), 10 );
        add_filter( 'dmyp_app_css', array($this, 'dmyp_app_css'), 10 );
    }

    public function dmyp_variables_css() {
        ob_start();
        ?>
        <?php
        return ob_get_clean();
    }

    public function dmyp_core_css() {
        ob_start();
        ?>
        <?php
        return ob_get_clean();
    }

    public function dmyp_app_css() {
        return ASSETS_URL . 'css/app.css';
    }
}