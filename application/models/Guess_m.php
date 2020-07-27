<?php
class Guess_m extends CI_Model
{
    function getbytoken($token)
    {
        $this->db->select('tokene.*, events.id as ide, events.nama as nama');
        $this->db->from('tokene');
        $this->db->join('events', 'events.id=tokene.id_evn');
        $this->db->where(['tokene.token' => $token]);
        return $this->db->get()->row_array();
    }
    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama Peserta',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[data_master.email]'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'nis',
                'label' => 'NISN',
                'rules' => 'required|numeric|is_unique[data_master.nisn]'
            ],
            [
                'field' => 'sekolah',
                'label' => 'Nama Sekolah',
                'rules' => 'required'
            ]
        ];
    }

    public function add()
    {
        $post = $this->input->post();
        $save = [
            'nama' => $post['nama'],
            'email' => $post['email'],
            'nama_sekolah' => $post['sekolah'],
            'alamat' => $post['alamat'],
            'nisn' => $post['nis'],
            'fhoto' => $this->_uploadfhoto()
        ];

        if ($this->db->insert('data_master', $save)) {
            $ide = $this->db->insert_id();

            $insert = [
                'id_psrt' => $ide,
                'id_kelompok' => 0,
                'id_event' => $post['id_evn']
            ];

            return $this->db->insert('peserta', $insert);
        }
    }

    private function _uploadfhoto()
    {
        $config['upload_path'] = './assets/fhoto/data_master/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('fhoto')) {
            return $this->upload->data('file_name');
        } else {
            return 'default.jpg';
        }
    }
}
