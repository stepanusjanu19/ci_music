<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Songs extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
		};
        $this->load->model('Data_Lagu','MLagu');
        date_default_timezone_set("Asia/Jakarta");
        
    }
    

    public function index()
    {
        $data = [
            "title" => "Music App | Add Songs",
            "subtitle" => "Add Songs"
        ];

        
        $this->form_validation->set_rules('titlelagu', 'titlelagu', 'trim|required', [
            "required" => "Masukkan title lagu",
        ]);
        $this->form_validation->set_rules('artislagu', 'artislagu', 'trim|required', [
            "required" => "Masukkan artis lagu",
        ]);
        $this->form_validation->set_rules('genrelagu', 'genrelagu', 'trim|required', [
            "required" => "Masukkan genre lagu",
        ]);
        $this->form_validation->set_rules('subgenre', 'subgenre', 'trim|required', [
            "required" => "Masukkan sub genre lagu",
        ]);
        $this->form_validation->set_rules('recordlabel', 'recordlabel', 'trim|required', [
            "required" => "Masukkan record label lagu",
        ]);
        $this->form_validation->set_rules('produced', 'produced', 'trim|required', [
            "required" => "Masukkan nama produksi lagu",
        ]);
        $this->form_validation->set_rules('tahunproduksi', 'tahunproduksi', 'trim|required', [
            "required" => "Masukkan tahun produksi lagu",
        ]);
        $this->form_validation->set_rules('pertamatanggalrilis', 'pertamatanggalrilis', 'trim|required', [
            "required" => "Masukkan pertama tanggal rilis lagu",
        ]);
        $this->form_validation->set_rules('tanggalrilis', 'tanggalrilis', 'trim|required', [
            "required" => "Masukkan tanggal rilis lagu",
        ]);
        $this->form_validation->set_rules('liriklagu', 'liriklagu', 'trim|required', [
            "required" => "Masukkan lirik lagu",
        ]);
        $this->form_validation->set_rules('deskripsilagu', 'deskripsilagu', 'trim|required', [
            "required" => "Masukkan deskripsi lagu",
        ]);

        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/add_songs', $data);
        } else {
            $namealbum = $_FILES["img"]["name"];
            $namelirik = $_FILES["linklagu"]["name"];

            if(isset($namealbum) && isset($namelirik))
            {
                $config['upload_path']          = './upload_album/albumsong/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 1440;
                $config['max_width']            = 5000;
                $config['max_height']           = 5000;
    
                $this->load->library('upload', $config);


                $extensi = explode(".", $namelirik);
                $filename = "liriklagu-".round(microtime(true)).".".end($extensi);
                $sumber = $_FILES['linklagu']['tmp_name'];
               

                if (!$this->upload->do_upload("img")) {
                    $this->upload->display_errors();
                } else {
                    $uploadfoto = $this->upload->data($_FILES["img"]["name"]);

                    $upload = move_uploaded_file($sumber, "./upload_album/lirikfile/".$filename);

                    $aksi = 
                    [
                        "lagu_id" => "P-" . rand(),
                        "user_id" => $this->session->id,
                        "lagu_title" => htmlspecialchars($this->input->post("titlelagu"), true),
                        "lagu_artis" => htmlspecialchars($this->input->post("artislagu"), true),
                        "lagu_genre" => htmlspecialchars($this->input->post("genrelagu"), true),
                        "lagu_sub_genre" => htmlspecialchars($this->input->post("subgenre"), true),
                        "lagu_record_label" => htmlspecialchars($this->input->post("recordlabel"), true),
                        "lagu_nama_produksi" => htmlspecialchars($this->input->post("produced"), true),
                        "lagu_tahun_produksi" => htmlspecialchars($this->input->post("tahunproduksi"), true),
                        "lagu_pertama_tanggal_rilis" => htmlspecialchars($this->input->post("pertamatanggalrilis"), true),
                        "lagu_tanggal_rilis" => htmlspecialchars($this->input->post("tanggalrilis"), true),
                        "lagu_lirik" => htmlspecialchars($this->input->post("liriklagu"), true),
                        "lagu_deskripsi" => htmlspecialchars($this->input->post("deskripsilagu"), true),
                        "lagu_status" => "0",
                        "lagu_created_at" => date('Y-m-d H:i:s'),
                        "lagu_filename_album" => $namealbum, 
                        "lagu_link_lirik" => $filename, 
                    ];
                    $this->MLagu->save_data($aksi);
                    $this->session->set_flashdata('success', 'Data Lagu Berhasil Ditambah');
                    $this->load->view('home/add_songs', $data); 
                }  
            }

            
        }
    }

    // public function upload_lirik()
    // {
    //     $config['upload_path']          = './upload_album/lirikfile/';
    //     $config['allowed_types']        = 'gif|jpg|png|pdf';
    //     $config['max_size']             = 0;
    //     $config['encrypt_name'] = "TRUE";

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload("linklagu")) {
    //         $this->upload->display_errors();
    //     } else {
    //         $data = ["lagu_link_lirik" => $this->upload->data($_FILES["linklagu"]["name"])];       
    //     }   
    // }

}

/* End of file Controllername.php */
 ?>