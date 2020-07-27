<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fullcalendar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('fullcalendar_model');
	}

	function index()
	{
		$this->load->view('templates/mheader');
		$this->load->view('fullcalendar');
		$this->load->view('templates/mfooter');
	}

	function load()
	{
		$event_data = $this->fullcalendar_model->fetch_all_event();
		foreach ($event_data->result_array() as $row) {

			if ($row['jenis'] == 1) {
				$bg = 'blue';
			} else {
				$bg = '';
			}
			$data[] = array(
				'color' => $bg,
				// 'borderColor' => $bg,
				'id'	=>	$row['id'],
				'description' => $row['tgl_mulai'] . ' - ' . $row['tgl_selesai'],
				'title'	=>	$row['nama'] . ' : ' . $row['je'],
				'start'	=>	$row['tgl_mulai'],
				'end'	=>	$row['tgl_selesai'],
				'className' => ["event", "greenEvent"]
			);
		}
		echo json_encode($data);
	}

	function update()
	{
		if ($this->input->post('id')) {
			$data = array(
				'title'			=>	$this->input->post('title'),
				'start_event'	=>	$this->input->post('start'),
				'end_event'		=>	$this->input->post('end')
			);

			$this->fullcalendar_model->update_event($data, $this->input->post('id'));
		}
	}

	function delete()
	{
		if ($this->input->post('id')) {
			$this->fullcalendar_model->delete_event($this->input->post('id'));

			$pesan = [
				'success' => '<script>toastr.danger("Berhasil Menghapus Events")
				</script>'
			];
		}
		echo json_encode($pesan);
	}

	function fetchbyid()
	{
		$id = $this->input->get('id');
		$data = $this->fullcalendar_model->fetchbyid($id);

		echo json_encode($data);
	}
}
