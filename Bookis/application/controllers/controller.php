<?php
/**
 * 
 */
class controller extends CI_Controller
{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['judul'] = "Homepage";
        $this->load->view('header', $data);
        $this->load->view('V_halaman_utama', $data);
    }

    public function login()
    {
        $data['judul'] = "Login";
        $data['pelanggan'] = $this->model->getAllUsers();
        $this->load->view('header', $data);
        $this->load->view('V_login', $data);
    }

    public function login_check()
    {
        $data['pelanggan'] = $this->model->getAllUsers();
        if ($this->model->login() > 0) {
            redirect(site_url("controller/home"));
        } else {
            $this->load->view('header', $data);
            $this->load->view('V_login', $data);
            $this->load->view('footer', $data);
        }
    }

    public function home()
    {
        $data['judul'] = "Home";
        $this->load->view('header', $data);
        $this->load->view('V_home', $data);
        $this->load->view('footer', $data);
    }

    public function register()
    {
        $this->load->view('header');
        $this->load->view('V_register');
    }
    public function add_user()
    {
    	$this->form_validation->set_rules('email', 'required');
        $this->form_validation->set_rules('name','required');
        $this->form_validation->set_rules('username', 'required');
        $this->form_validation->set_rules('password', 'required');
        // $this->form_validation->set_rules('re_pass', 're_pass', 'required');
        $this->form_validation->set_rules('addres',  'required');
        $this->form_validation->set_rules('phoneno', 'required');
        $this->form_validation->set_rules('gender', 'required');
        $this->form_validation->set_rules('age', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "register";
            $this->load->view('header', $data);
            $this->load->view('V_register');
            $this->load->view('footer');
        } else {
            $login = [
                "username" => $this->input->post('username', true),
                "Password" => $this->input->post('password', true),
            ];
            $this->session->set_userdata('login', $login);
            $this->model->tambah_user();
            redirect('controller');
        }
    }
    public function logout()
	{
		$this->session->unset_userdata('login');
		$this->session->sess_destroy();
		redirect("controller/index");
	}
}
?>