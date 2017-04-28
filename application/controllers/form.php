<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model('insert_model');
        $this->load->model('select_model');

    }

	public function index()
        {
               $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('url', 'your personal website', 'required');
                $this->form_validation->set_rules('phone', 'Email', 'required');
                //$this->form_validation->set_rules('resim', 'File', 'required');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('form');
                }
                else
                {

                $ad =  $this->input->post('username');
                $email =  $this->input->post('email');
                $phone =  $this->input->post('phone');
                $website = $this->input->post('url');
                $mesaj = $this ->input->post('mesaj');
                if($this->select_model->select($email)==0){
                    
                $config['upload_path'] = 'assets/images/'; 
                $config['allowed_types'] = 'gif|jpg|jpeg|png';                
                $resim = $config['file_name'] = 'Resim'.date('ymdhis');
                                                
                $this->load->library('upload', $config);               
                $sonuc = $this->upload->do_upload('resim');     
          
                if($sonuc) $data['bilgi'] = 'Resim başarıyla yüklendi!';
                else $dat['bilgi'] = 'Resim yüklenemedi. Hata Mesajı: '.$this->upload->display_errors();
                $dat['message'] = 'Data Inserted Successfully';

                $this->db->set('tarih', 'NOW()', FALSE);                
        		$data = array(
                    'ad' => $ad,
                    'email' => $email,
                    'phone' => $phone,
                    'website' => $website,
                    'mesaj'=> $mesaj,
                    'resim'=>$resim
                    

                ); 
                //var_dump($config);
        		$this->insert_model->form_insert($data);
                
                $this->load->view('formsucces');


                }
                else{
                    var_dump($this->select_model->select($email));
                    $this->load->view('fail');

                
                }
            }
         }
}

