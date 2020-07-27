<?php
class Events_m extends CI_Model
{
    private $_table = 'events';
    public $nama;
    public $kuota;
    public $deskripsi;
    public $tgl_buka_pendaftaran;
    public $tgl_tutup_pendaftaran;
    public $tgl_mulai;
    public $tgl_selesai;
    public $jenis;
    public $status;
    public $gambar = 'default.jpg';

    public function rules()
    {
        return [
            [
                'field' => 'nama_event',
                'label' => 'Judul Event',
                'rules' => 'required'
            ],

            [
                'field' => 'deskripsi',
                'label' => 'Deskripisi',
                'rules' => 'required'
            ],

            [
                'field' => 'buka',
                'label' => 'Tgl Buka Pendaftaran',
                'rules' => 'required'
            ],
            [
                'field' => 'tutup',
                'label' => 'Tgl Tutup Pendaftaran',
                'rules' => 'required'
            ],
            [
                'field' => 'mulai',
                'label' => 'Tgl Mulai Pendaftaran',
                'rules' => 'required'
            ],
            [
                'field' => 'selesai',
                'label' => 'Tgl Selesai Pendaftaran',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis',
                'label' => 'kategori',
                'rules' => 'required'
            ],
            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required'
            ],
            [
                'field' => 'kuota',
                'label' => 'kuota',
                'rules' => 'required'
            ]
        ];
    }

    function detail_page_event($limit, $start)
    {
        $output = '';
        $this->db->select('events.*, galeri.file as f');
        $this->db->from('events');
        $this->db->join('galeri', 'events.id=galeri.id_evn');
        $this->db->order_by('events.id', 'ASC');
        $this->db->limit($limit, $start);
        $query = $this->db->get()->result();

        foreach ($query as $q) {

            $output .= '
<div class="col-lg-3 col-md-3">
            <!-- Card Narrower -->
    <div class="card card-cascade narrower">

    <div class="view view-cascade overlay">
        <img class="card-img-top" height="120px" src="' . base_url('assets/fhoto/') . $q->f . '"
        alt="Card image cap">
        <a>
        <div class="mask rgba-white-slight"></div>
        </a>
    </div>

    <div class="card-body card-body-cascade">

        <h5 class="font-weight-bold card-title">' . strtoupper(substr($q->nama, 0, 10)) . '...' . '</h5>
        
        <a type="button" class="float-right badge badge-pill mb-5" data-toggle="collapse" data-target="#deskripsi' . $q->id . '"><span class="text-black-50">Deskripsi</span></a>
        <div id="deskripsi' . $q->id . '" class="collapse"><div class="mt-5"></div><p class="card-text mt-4">' . $q->deskripsi .  '</p></div>
        <a href="' . base_url('events/detail/') . $q->id . '" type="button" class="btn-floating btn-sm blue-gradient mb-2 float-left"><i class="fas fa-info-circle fa-xs"></i></a>
        </div>
    </div>
</div>';
        }

        return $output;
    }

    function hitung_page_event()
    {
        $page = $this->db->get('events')->num_rows();
        return $page;
    }

    function detail_e($id)
    {
        $this->db->select('events.*, galeri.file as f');
        $this->db->from('events');
        $this->db->join('galeri', 'events.id=galeri.id_evn');
        $this->db->where(['events.id' => $id]);
        return $this->db->get()->row_array();
    }

    function tambahEvent()
    {
        $post = $this->input->post();
        $insert = [
            'nama' => $post['nama_event'],
            'kuota' => $post['kuota'],
            'deskripsi' => $post['deskripsi'],
            'tgl_buka_pendaftaran' => date_format(date_create($post['buka']), 'Y-m-d'),
            'tgl_tutup_pendaftaran' => date_format(date_create($post['tutup']), 'Y-m-d'),
            'tgl_mulai' => date_format(date_create($post['mulai']), 'Y-m-d'),
            'tgl_selesai' => date_format(date_create($post['selesai']), 'Y-m-d'),
            'jenis' => $post['jenis'],
            'status' => $post['status']
        ];

        $gambar = $this->_uploadgbr();
        if ($gambar) {
            // insert ke table event

            if ($this->db->insert($this->_table, $insert)) {
                $evn_id = $this->db->insert_id();

                $token = base64_encode(random_bytes(32));
                $penerima = ['hadimrifqyfakhrul@gmail.com', 'soccerind.id@gmail.com'];

                // kirim gmail
                $kirim = [
                    'email' => $penerima,
                    'event' => $insert['nama'],
                    'link' => base_url('guess/form/') . '?token=' . urlencode($token),
                    'detail' => base_url('events/detail/') . $evn_id
                ];
                $this->load->helper('kirimgmail');
                gmail($kirim);

                //insert token ke db
                $insert_token = [
                    'id_evn' => $evn_id,
                    'token' => $token
                ];

                $this->db->insert('tokene', $insert_token);

                //insert ke table galeri
                $galeri = [
                    'id_evn' => $evn_id,
                    'cat_img' => 4,
                    'file' => $gambar
                ];
                return $this->db->insert('galeri', $galeri);
            }
        }
    }

    function update()
    {
        $post = $this->input->post();
        $insert = [
            'nama' => $post['nama_event'],
            'kuota' => $post['kuota'],
            'deskripsi' => $post['deskripsi'],
            'tgl_buka_pendaftaran' => date_format(date_create($post['buka']), 'Y-m-d'),
            'tgl_tutup_pendaftaran' => date_format(date_create($post['tutup']), 'Y-m-d'),
            'tgl_mulai' => date_format(date_create($post['mulai']), 'Y-m-d'),
            'tgl_selesai' => date_format(date_create($post['selesai']), 'Y-m-d'),
            'jenis' => $post['jenis'],
            'status' => $post['status']
        ];


        if (!empty($_FILES['file_gambar']['name'])) {
            $gambar = ['file' => $this->_uploadgbr()];
        } else {
            $gambar = ['file' => $post['old_img']];
        }


        $where1 = ['id_evn' => $post['idevent']];
        $where2 = ['id' => $post['idevent']];

        $this->db->update('events', $insert, $where2);
        $this->db->update('galeri', $gambar, $where1);
    }

    function delete($id)
    {
        $this->_hapusgbr($id);
        $this->db->delete('galeri', ['id_evn' => $id]);
        $this->db->delete('tokene', ['id_evn' => $id]);
        return $this->db->delete($this->_table, ['id' => $id]);
    }

    private function _uploadgbr()
    {
        $config['upload_path'] = './assets/fhoto/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file_gambar')) {
            return $this->upload->data('file_name');
        } else {
            return 'default.jpg';
        }
    }

    private function _hapusgbr($id)
    {
        $product = $this->detail_e($id);
        if ($product['f'] != "default.jpg") {
            $filename = explode(".", $product['f'])[0];
            return array_map('unlink', glob(FCPATH . "./assets/fhoto/$filename.*"));
        }
    }

    public function jenis()
    {
        return $this->db->get('jenis_event')->result_array();
    }
    public function jml($id)
    {
        $this->db->select('id');
        $this->db->where(['id_event' => $id]);
        $totalpeserta = $this->db->get('peserta')->num_rows();

        return $totalpeserta;
    }
    public function peserta($id)
    {
        $this->db->select('peserta.*, data_master.nama as na');
        $this->db->join('data_master', 'peserta.id_psrt=data_master.id');
        $this->db->where(['id_event' => $id]);
        $totalpeserta = $this->db->get('peserta')->result_array();
        $output = '';
        foreach ($totalpeserta as $ttl) {
            $output .= '
            <li class="list-group-item ml-2 mr-2">
               <div class="d-flex w-100 justify-content-between">
                ' . strtoupper($ttl['na']) . '
                <small>
                <i class="fad fa-users"></i>
                </small>
              </div>
            </li>';
        }
        return $output;
    }

    public function search($nama, $idevnt)
    {
        $query = $this->db->query("SELECT peserta.*, data_master.nama, data_master.nisn, data_master.email, data_master.nama_sekolah, data_master.alamat, data_master.fhoto FROM peserta JOIN data_master ON data_master.id=peserta.id_psrt WHERE peserta.id_event=$idevnt AND data_master.nama like '%$nama%'");
        $this->db->limit(10);
        return $query->result();
    }

    public function jumlahpeserta()
    {
        $output = '';
        // $query = $this->db->query("SELECT events.nama, COUNT(*) as psrt FROM peserta LEFT JOIN events ON events.id = peserta.id_event GROUP BY 1");
        $this->db->select("events.nama, COUNT(*) as psrt");
        $this->db->from("PESERTA");
        $this->db->join("events", "events.id = peserta.id_event");
        $this->db->group_by(1);
        $query = $this->db->get();
        return $query;
    }
}
