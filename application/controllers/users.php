<?php
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_class');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['users'] = $this->Users_class->get_user();
    }

    public function view($slug = NULL)
    {
        $data['users'] = $this->Users_class->get_user($slug);
    }
}