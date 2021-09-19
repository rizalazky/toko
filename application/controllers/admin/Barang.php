<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
	
	}

	function index(){
		// die('TEST');
	if($this->session->userdata('akses')=='1'){
		// $data['data']=$this->m_barang->tampil_barang();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();

		$this->load->view('admin/v_barang',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	
	
	function tambah_barang(){
	if($this->session->userdata('akses')=='1'){
		$kobar=$this->m_barang->get_kobar();
		$kode_barcode=$this->input->post('kode_barcode');
		$nabar=$this->input->post('nabar');
		$kat=$this->input->post('kategori');
		$satuan=$this->input->post('satuan');
		$harpok=str_replace(',', '', $this->input->post('harpok'));
		$harjul=str_replace(',', '', $this->input->post('harjul'));
		$harjul_grosir=str_replace(',', '', $this->input->post('harjul_grosir'));
		$stok=$this->input->post('stok');
		$min_stok=$this->input->post('min_stok');
		$this->m_barang->simpan_barang($kobar,$kode_barcode,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok);

		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}


	function edit_barang(){
	if($this->session->userdata('akses')=='1'){
		$kobar=$this->input->post('kobar');
		$kode_barcode=$this->input->post('kode_barcode');
		$nabar=$this->input->post('nabar');
		$kat=$this->input->post('kategori');
		$satuan=$this->input->post('satuan');
		$harpok=str_replace(',', '', $this->input->post('harpok'));
		$harjul=str_replace(',', '', $this->input->post('harjul'));
		$harjul_grosir=str_replace(',', '', $this->input->post('harjul_grosir'));
		$stok=$this->input->post('stok');
		$min_stok=$this->input->post('min_stok');
		$this->m_barang->update_barang($kobar,$kode_barcode,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok);
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}


	function hapus_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode=$this->input->post('kode');
		$this->m_barang->hapus_barang($kode);
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}


	function get_data_barang(){
		$list = $this->m_barang->get_data_barang();
        $data = array();
        $no = $_POST['start'];
		array(null, 'barang_id','barang_kbarcode','barang_nama','barang_satuan','barang_harpok','barang_harjul','barang_harjul_grosir','barang_stok'
							,'barang_min_stok','barang_tgl_input','barang_tgl_last_update','barang_kategori_id','barang_user_id'	
						);
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->barang_id;
            $row[] = $field->barang_kbarcode;
            $row[] = $field->barang_nama;
            $row[] = $field->barang_satuan;
            $row[] = $field->barang_harpok;
            $row[] = $field->barang_harjul;
            $row[] = $field->barang_harjul_grosir;
            $row[] = $field->barang_stok;
            $row[] = $field->barang_min_stok;
            $row[] = $field->barang_kategori_id;
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_barang->count_all(),
            "recordsFiltered" => $this->m_barang->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}
}