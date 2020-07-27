<?php
class Guess extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guess_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'tittle' => 'EMS UKS DISPENDIK SBY'
        ];
        $this->load->view('Guess/header', $data);
        $this->load->view('Guess/landing_page');
        $this->load->view('Guess/footer');
    }

    public function form()
    {
        $token = $_GET['token'];
        $tkn = $this->Guess_m->getbytoken($token);
        $data = [
            'tittle' => 'Form Pendaftaran | ' . $tkn['nama'],
            'id' => $tkn['ide'],
            'event' => $tkn['nama']
        ];


        if ($tkn) {
            $this->load->view('Guess/form', $data);
            $this->load->view('Guess/footer');
        } else {
            redirect("Guess");
        }
    }

    public function add()
    {
        $gm = $this->Guess_m;
        $validation = $this->form_validation;
        $validation->set_rules($gm->rules());
        if ($validation->run()) {
            $gm->add();
            $array = array(
                'success' => '<script>toastr.success("Berhasil menambah data ' . $_POST['nama'] . '.");</script>'
            );
        } else {
            $array = array(
                'error'   => true,
                'nama_error' => form_error('nama'),
                'email_error' => form_error('email'),
                'alamat_error' => form_error('alamat'),
                'nis_error' => form_error('nis'),
                'sekolah_error' => form_error('sekolah')
            );
        }

        echo json_encode($array);
    }
}
