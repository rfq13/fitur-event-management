<?php
class Master_M extends CI_Model
{
    private $_table = 'data_master';
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
                'rules' => 'required|valid_email'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'nis',
                'label' => 'NISN',
                'rules' => 'required|numeric|is_unique'
            ],
            [
                'field' => 'sekolah',
                'label' => 'Nama Sekolah',
                'rules' => 'required'
            ]
        ];
    }
    function jumlahmaster()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        return $this->db->count_all_results();
    }

    function hitung_page()
    {
        $page = $this->db->get('data_master')->num_rows();
        return $page;
    }

    function detail_page($limit, $start)
    {
        $output = '';
        $this->db->select('*');
        $this->db->from('data_master');
        $this->db->order_by('id', 'ASC');
        $this->db->limit($limit, $start);
        $query = $this->db->get()->result();

        foreach ($query as $q) {
            $output .= '<tr class="rowhover">
            <td>' . ++$start . '</td>
            <td><a onclick="kliknama(' . $q->id . ')">' . $q->nama . '</a></td>
            <td>' . $q->email . '</td>
            <td>' . $q->nama_sekolah . '</td>
            <td>' . substr($q->alamat, 0, 5) . '..' . '</td>
          </tr>';
        }

        return $output;
    }

    public function search($cari)
    {
        $like = ['nama' => $cari];
        $this->db->select('*');
        $this->db->like($like);
        $this->db->or_like('nisn', $cari);
        $this->db->or_like('nama_sekolah', $cari);
        return $this->db->get('data_master');
    }

    function tampil($id)
    {
        return $this->db->get_where('data_master', ['id' => $id]);
    }

    function updatencok()
    {
        $post = $this->input->post();
        $update = [
            'nama' => $post['nama'],
            'nisn' => $post['nis'],
            'email' => $post['email'],
            'nama_sekolah' => $post['sekolah'],
            'alamat' => $post['alamat'],
            'fhoto' => $this->_uploadfhoto(),
        ];

        $this->db->update($this->_table, $update, ['id' => $post['idedit']]);
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
