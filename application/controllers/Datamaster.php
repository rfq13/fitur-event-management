
<?php
class Datamaster extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master_m', 'master');
    }
    public function index()
    {
        $data['judul'] = 'Event Management | Data Master';


        $this->load->view('templates/mheader', $data);
        $this->load->view('Master/index');
        $this->load->view('templates/mfooter');
    }
    function load_peserta()
    {
        $this->load->library('pagination');

        $config = [];
        $config['base_url'] = '#';
        $config['total_rows'] = $this->master->hitung_page();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination pagination-circle pg-blue">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'first';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];
        $config['attributes']['rel'] = FALSE;

        $config['num_links'] = 2;

        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config['per_page'];

        $output = [
            'link_paginasi' => $this->pagination->create_links(),
            'tabel_master' => $this->master->detail_page($config['per_page'], $start)
        ];

        echo json_encode($output);
    }

    public function search()
    {
        if (isset($_GET['term'])) {
            $result = $this->master->search($_GET['term'])->result();
            if (count($result) > 0) {
                foreach ($result as $row) {
                    $output[] =
                        [
                            'label' => strtolower($row->nama),
                            'value' => strtoupper($row->nama),
                            'nisn' => $row->nisn,
                            'email' => $row->email,
                            'alamat' => $row->alamat,
                            'fhoto' => $row->fhoto,
                            'id' => $row->id,
                            'sekolah' => $row->nama_sekolah
                        ];
                }
            } else {
                $output[] = 'tidak ditemukan.';
            }
        }
        echo json_encode($output);
    }

    public function tampil()
    {
        $id = $this->input->post('id');
        $tampil = $this->master->tampil($id)->result();
        foreach ($tampil as $t) {
            $output = $t;
        }
        echo json_encode($output);
    }

    public function update()
    {
        $this->load->library('form_validation');
        $mm = $this->master;
        $validation =  $this->form_validation;
        $validation->set_rules($mm->rules());
        if ($validation->run()) {
            // $this->Master_m->update();
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
