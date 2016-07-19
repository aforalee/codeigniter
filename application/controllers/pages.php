<?php
class Pages extends CI_Controller {

    public function index()
    {
        $data['title'] = ucfirst('home'); // Capitalize the first letter
        $this->load->model('users_class');
        $data['users'] = $this->users_class->get_user();
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/slider');
        $this->load->view('home');
        $this->load->view('include/footer');
    }
    public function about()
    {
        $data['title'] = ucfirst('About'); // Capitalize the first letter
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/noslider');
        $this->load->view('about');
        $this->load->view('include/footer');
    }
    public function page()
    {
        $data['title'] = ucfirst('page'); // Capitalize the first letter
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/noslider');
        $this->load->view('page');
        $this->load->view('include/footer');
    }
    public function services()
    {
        $data['title'] = ucfirst('home'); // Capitalize the first letter
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/noslider');
        $this->load->view('services');
        $this->load->view('include/footer');
    }
    public function full_page()
    {
        $data['title'] = ucfirst('full page'); // Capitalize the first letter
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/noslider');
        $this->load->view('full');
        $this->load->view('include/footer');
    }
    public function ColumnTwo()
    {
        $data['title'] = ucfirst('2-Column'); // Capitalize the first letter
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/noslider');
        $this->load->view('2-column');
        $this->load->view('include/footer');
    }
    public function ColumnThree()
    {
        $data['title'] = ucfirst('3-Column'); // Capitalize the first letter
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/noslider');
        $this->load->view('services');
        $this->load->view('include/footer');
    }
    public function portfolio()
    {
        $data['title'] = ucfirst('portfolio'); // Capitalize the first letter
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/noslider');
        $this->load->view('portfolio');
        $this->load->view('include/footer');
    }
    public function contact()
    {
        $data['title'] = ucfirst('contact'); // Capitalize the first letter
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/noslider');
        $this->load->view('contact');
        $this->load->view('include/footer');
    }
    public function submitproposal(){
        $data['title'] = ucfirst('Submit Your proposal');
        $data['cat'] = 'no';
        $data['breadc'] = 'Post Proposal';
        $this->load->view('include/head',$data);
        $this->load->view('include/menu');
        $this->load->view('include/noslider');
        $this->load->view('submitproposal',$data);
        $this->load->view('include/footer');
    }
    public function SubmitmaleNCR()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $data['title'] = ucfirst('Submit Your proposal');
            $data['cat'] = 'maleNCR';
            $data['breadc'] = 'Male (No cast Restriction)';
            $this->load->view('include/head',$data);
            $this->load->view('include/menu');
            $this->load->view('include/noslider');
            $this->load->view('submitproposal',$data);
            $this->load->view('include/footer');

        }
        else
        {
            $this->load->view('success');
        }
    }
    public function SubmitmaleCR()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $data['title'] = ucfirst('Submit Your proposal');
            $data['cat'] = 'maleCR';
            $data['breadc'] = 'Male (Cast Restriction)';
            $this->load->view('include/head',$data);
            $this->load->view('include/menu');
            $this->load->view('include/noslider');
            $this->load->view('submitproposal',$data);
            $this->load->view('include/footer');

        }
        else
        {
            $this->load->view('success');
        }
    }
}