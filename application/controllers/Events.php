<?php
class Events extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Events_m');
        $this->load->library('form_validation');
        $this->load->model('Master_m', 'master');

        $this->db->delete('events', array('tgl_mulai' => date('Y-m-d')));
    }

    public function index()
    {

        $data['judul'] = 'Events';
        $data['jmldm'] = $this->master->jumlahmaster();
        $data['msg'] = $this->session->flashdata('msg');

        $this->load->view('templates/mheader', $data);
        $this->load->view('Events/index', $data);
        $this->load->view('templates/mfooter');
        $this->load->view('templates/modal');
    }
    public function edit($id = '')
    {
        $data['detail_event'] = $this->Events_m->detail_e($id);
        $data['judul'] = 'Edit Event | ' . $data['detail_event']['nama'];
        $data['jenis'] =  $this->Events_m->jenis();


        if ($data['detail_event'] < 1) {
            echo 'link tidak tersedia';
        } else {

            $this->load->view('templates/mheader', $data);
            $this->load->view('Events/edit', $data);
            $this->load->view('templates/mfooter');
        }
    }
    public function detail($id = '')
    {
        $data['detail_event'] = $this->Events_m->detail_e($id);
        $data['jml'] = $this->Events_m->jml($id);
        $data['judul'] = 'Detail Event | ' . $data['detail_event']['nama'];
        $data['psrt'] = $this->Events_m->peserta($id);
        $data['jenis'] =  $this->Events_m->jenis();
        if ($id == '') {
            echo 'link tidak tersedia';
        } elseif ($data['detail_event'] == 0) {
            echo 'link tidak tersediaaaa';
        } else {

            $this->load->view('templates/mheader', $data);
            $this->load->view('Events/detail', $data);
            $this->load->view('templates/mfooter');
        }
    }

    function add()
    {
        $em = $this->Events_m;
        $validation = $this->form_validation;
        $validation->set_rules($em->rules());
        $post = $this->input->post();
        if ($validation->run()) {
            $this->load->helper('selisihtgl');
            if (selisihtgl($post['buka']) < 1) {
                $array = array(
                    'error' => true,
                    'buka_error' => 'Pendaftaran minimal dibuka setelah tanggal saat ini'
                );
            } elseif (selisihtgl($post['mulai']) < 1) {
                $array = array(
                    'error' => true,
                    'mulai_error' => 'Mulai Event harus setelah tanggal sekarang'
                );
            } else {
                if ($_FILES['file_gambar'] == '') {
                    $array = array(
                        'error' => true,
                        'gambar_error' => '<p class="text-danger">gambar kosong</p>'
                    );
                } else {
                    $em->tambahEvent();
                    $array = array(
                        'success' => '<script>toastr.success("Berhasil menambah event ' . $_POST['nama_event'] . '.");</script>'
                    );
                }
            }
        } else {
            $array = array(
                'error'   => true,
                'judul_error' => form_error('nama_event'),
                'deskripsi_error' => form_error('deskripsi'),
                'buka_error' => form_error('buka'),
                'tutup_error' => form_error('tutup'),
                'mulai_error' => form_error('mulai'),
                'selesai_error' => form_error('selesai'),
                'kuota_error' => form_error('kuota'),
                'jenis_error' => form_error('jenis'),
                'status_error' => form_error('status')
            );
        }

        echo json_encode($array);
    }
    public function tambah()
    {
        $data['judul'] = 'Tambah event';


        $this->load->view('templates/mheader', $data);
        $this->load->view('Events/tambahevent', $data);
        $this->load->view('templates/mfooter');
    }

    function load_events()
    {
        $this->load->library('pagination');

        $config = [];
        $config['base_url'] = '#';
        $config['total_rows'] = $this->Events_m->hitung_page_event();
        $config['per_page'] = 4;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination justify-content-center pagination-circle pg-blue blue-gradient">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = '';
        $config['first_tag_open'] = '<li class="page-item matio">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '';
        $config['last_tag_open'] = '<li class="page-item matio">';
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
        // $config['display_pages'] = FALSE;

        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config['per_page'];

        $output = [
            'link_page_event' => $this->pagination->create_links(),
            'card_event' => $this->Events_m->detail_page_event($config['per_page'], $start)
        ];

        echo json_encode($output);
    }
    function oncoming()
    {

        $query = $this->db->get('events')->result_array();
        $this->load->helper('selisihtgl');
        foreach ($query as $m) {
            if (selisihtgl($m['tgl_mulai']) < 4) {
                if (selisihtgl($m['tgl_mulai']) < 1) {
                    # code...
                    echo '
                        <li class="list-group-item">
                              <div class="d-flex w-100 justify-content-between">
                              <a style="color:#14213d;" href="' . base_url('events/detail/') . $m['id'] . '">
                              ' . $m['nama'] . '
                              </a>
                              <small>
                                  Sesaat lagi
                                   <i class="fas fa-alarm-exclamation"></i>
                                </small>
                              </div>
                            </li>
                        ';
                } else {
                    echo '
                        <li class="list-group-item">
                              <div class="d-flex w-100 justify-content-between">
                              <a style="color:#14213d;" href="' . base_url('events/detail/') . $m['id'] . '">
                              ' . $m['nama'] . '
                              </a>
                              <small>
                                  ' . selisihtgl($m['tgl_mulai']) . ' Hr lagi
                                   <i class="fad fa-stopwatch"></i>
                                </small>
                              </div>
                            </li>
                        ';
                }
            }
        }
    }
    function update()
    {
        $em = $this->Events_m;
        $validation = $this->form_validation;
        $validation->set_rules($em->rules());

        if ($validation->run()) {

            $em->update();
            $array = array(
                'success' => '<script>toastr.success("Berhasil Mengedit Event")</script>'
            );
        } else {
            $array = array(
                'error'   => true,
                'judul_error' => form_error('nama_event'),
                'deskripsi_error' => form_error('deskripsi'),
                'buka_error' => form_error('buka'),
                'tutup_error' => form_error('tutup'),
                'mulai_error' => form_error('mulai'),
                'selesai_error' => form_error('selesai'),
                'kuota_error' => form_error('kuota'),
                'jenis_error' => form_error('jenis'),
                'status_error' => form_error('status')
            );
        }

        echo json_encode($array);
    }

    public function hapus($id)
    {
        if ($this->Events_m->delete($id)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> Menghapus data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('Events');
        }
    }

    public function search($ide)
    {
        if (isset($_GET['term'])) {
            $result = $this->Events_m->search($_GET['term'], $ide);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] =
                        [
                            'label' => strtolower($row->nama),
                            'value' => strtoupper($row->nama),
                            'nisn' => $row->nisn,
                            'email' => $row->email,
                            'alamat' => $row->alamat,
                            'fhoto' => $row->fhoto,
                        ];
            } else {
                $arr_result[] = 'tidak ditemukan.';
            }
        }
        echo json_encode($arr_result);
    }

    public function jmlpsrt()
    {
        $peserta =  $this->Events_m->jumlahpeserta();

        var_dump($peserta);
    }
}
