<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class supplier_model extends CI_model{

		private $_table = "tbl_supplier";

		public $id_supplier;
		public $nama_supplier;
		public $alamat_supplier;
		public $keterangan_supplier;
		public $nama_sales;
		public $telp_sales;

		public function rules(){

			return [
				[
					'field' => 'id_supplier',
					'label' => 'id_supplier',
					'rules' => 'required'
				],

				[
					'field' => 'nama_supplier',
					'label' => 'Nama_supplier',
					'rules' => 'required'
				],
				
				[
					'field' => 'alamat_supplier',
					'label' => 'Alamat_supplier',
					'rules' => 'required'
				],


				[
					'field' => 'keterangan_supplier',
					'label' => 'Keterangan_supplier',
					'rules' => 'required'
				],

				[
					'field' => 'nama_sales',
					'label' => 'Nama_sales',
					'rules' => 'required'
				],

				[
					'field' => 'telp_sales',
					'label' => 'Telp_sales',
					'rules' => 'required'
				]
			];
		}

		public function getAll(){

			return $this->db->get($this->_table)->result();
		}

		public function getById($id_supplier){
			
			return $this->db->get_where($this->_table, ["id_supplier" => $id_supplier])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 $this->id_supplier = $post["id_supplier"];
			 $this->nama_supplier = $post["nama_supplier"];
			 $this->alamat_supplier = $post["alamat_supplier"];
			 $this->keterangan_supplier = $post["keterangan_supplier"];
			 $this->nama_sales = $post["nama_sales"];
			 $this->telp_sales = $post["telp_sales"];

			 $this->db->insert($this->_table, $this);


		}
















	}
?>