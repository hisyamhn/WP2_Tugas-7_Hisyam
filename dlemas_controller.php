<?php
class dlemas_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dlemas_model');
    }
    public function index() {
        $this->load->view('v_form_dlemas');    
    }

    public function cetak_data() {
        // Load the form validation library
        $this->load->library('form_validation');

        // Set validation rules for each input field
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]',
        array('required' => 'Nama harus diisi!'),
        array('min_length' => 'Nama terlalu pendek!'),);
        $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]',
        array('required' => 'NIS harus diisi!'),
        array('min_length' => 'NIS terlalu pendek!'),);
        $this->form_validation->set_rules('tanggallahir', 'Tanggal lahir', 'required|min_length[3]',
        array('required' => 'Tanggal lahir harus diisi!'),);
        $this->form_validation->set_rules('tempatlahir', 'Tempat lahir', 'required|min_length[3]',
        array('required' => 'Tempat lahir harus diisi!'),
        array('min_length' => 'Tempat lahir terlalu pendek!'),);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]',
        array('required' => 'Alamat harus diisi!'),
        array('min_length' => 'Alamat terlalu pendek!'),);
        $this->form_validation->set_rules('kelamin', 'Kelamin', 'required',
        array('required' => 'Kelamin harus diisi!'),);
        $this->form_validation->set_rules('agama', 'Agama', 'required');

        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the input form
            $this->load->view('v_form_dlemas');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'kelamin' => $this->input->post('kelamin'),
                'agama' => $this->input->post('agama')
            );
            $this->load->view('v_data_dlemas', $data);
        }
    }
}
?>