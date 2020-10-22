<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uts_barang extends CI_Controller
{
	public function index()
	{
		$this->load->model ('model_crud');
		$data= $this->model_crud->GetTable ('barang');
		$this->load->view('viewDatabase',array ('data'=>$data));
	}
	public function insert()
	{
		if (isset($_POST['submit']))
		{
			var_dump('bisa yey');
			$kode_barang = $this->input->post('kode_barang');
			$nama_barang = $this->input->post('nama_barang');
			$harga = $this->input->post('harga');
			$jenis_barang = $this->input->post('jenis_barang');
			$keterangan = $this->input->post('keterangan');
			$data = array('kode_barang'=>$kode_barang, 'nama_barang'=>$nama_barang, 'harga'=>$harga, 'jenis_barang'=>$jenis_barang, 'keterangan'=>$keterangan);
			$this->model_crud->InsertData('barang',$data); //$this->namamodel->namafunction(parameter);
			
			redirect ('uts_barang');
		}else{
			$this->load->view('insert'); //$this->load->view('nama file difolder view');
		}
	}
	public function update ()
	{
		if (isset($_POST['submit']))
		{
			$kode_barang = $this->input->post('kode_barang');
			$nama_barang = $this->input->post('nama_barang');
			$harga = $this->input->post('harga');
			$jenis_barang = $this->input->post('jenis_barang');
			$keterangan = $this->input->post('keterangan');
			$data = array ('kode_barang'=>$kode_barang, 'nama_barang'=>$nama_barang, 'harga'=>$harga, 'jenis_barang'=>$jenis_barang, 'keterangan'=>$keterangan);
			$this->model_crud->UpdateData('barang',$data,'kode_barang',$kode_barang); // nii jumlah parameter harus sama dengan jumlah yang di model juga mbak :)
			redirect ('uts_barang');
		}else{
			$id = $this->uri->segment(3);
			$data = $this->model_crud->getByID('barang', 'kode_barang', $id)->row_array();
			$this->load->view('update', array('r' => $data));
		}
			
	}
	public function delete ()
	{
		$id= $this->uri->segment(3);
		$this->model_crud->DeleteData('barang','kode_barang',$id);
		redirect ('uts_barang');
	}
		
}