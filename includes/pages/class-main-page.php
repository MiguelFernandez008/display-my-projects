<?php 

defined('ABSPATH') or die();

class dmyp_page_main implements i_init, i_page {

    private $slug;
    private $query_var;
    private $template;

    public function __construct($slug, $query_var, $template) {
        $this->slug = $slug;
        $this->query_var = $query_var;
        $this->template = $template;
    }

    public function init() {
        add_filter('generate_rewrite_rules', array($this, 'generate_rewrite_rules'));
        add_filter('query_vars', array($this, 'query_vars'));
        add_action('template_redirect', array($this, 'template_redirect'));
    }

    public function query_vars($query_vars) {
        $query_vars[] = $this->query_var;
        return $query_vars;
    }

    public function generate_rewrite_rules($wp_rewrite) {
        $wp_rewrite->rules = array_merge(
            [$this->slug . '/?$' => 'index.php?'.$this->query_var.'=1'],
            $wp_rewrite->rules
        );
    }

    public function template_redirect() {
        global $wp_query;
        $query_var = intval(get_query_var($this->query_var));
        if ($query_var) {
            // Block non-logged users
            if(is_user_logged_in()) {
                include TEMPLATE_PATH . $this->template;
                die;
            }
            else {                
                $wp_query->set_404();
                status_header( 404 );
                get_template_part( 404 ); 
                die;
            }
        }
    }
}
