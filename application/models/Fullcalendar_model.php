<?php

class Fullcalendar_model extends CI_Model
{
	function fetch_all_event()
	{
		$this->db->select('events.*, jenis_event.jenis as je');
		$this->db->from('events');
		$this->db->join('jenis_event', 'events.jenis=jenis_event.id');
		return $this->db->get();
	}

	function fetchbyid($id)
	{
		$hsl = $this->db->query("SELECT events.*,galeri.file FROM events INNER JOIN galeri ON galeri.id_evn=events.id AND events.id='$id'");
		if ($hsl->num_rows() > 0) {
			foreach ($hsl->result() as $data) {
				$hasil = array(
					'judul' => $data->nama,
					'deskripsi' => $data->deskripsi,
					'gbr' => $data->file,
					'buka' => $data->tgl_buka_pendaftaran,
					'tutup' => $data->tgl_tutup_pendaftaran,
					'mulai' => $data->tgl_mulai,
					'selesai' => $data->tgl_selesai,
					'jenis' => $data->jenis,
					'kuota' => $data->kuota,
					'status' => $data->status,
				);
			}
		}
		return $hasil;
	}

	function insert_event($data)
	{
		$this->db->insert('events', $data);
	}

	function update_event($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('events', $data);
	}

	function delete_event($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('events');
	}
}
