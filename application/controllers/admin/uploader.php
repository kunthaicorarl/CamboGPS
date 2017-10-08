<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class uploader extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->helper(array('form', 'url'));
}
public function custom_view(){
$this->load->view('admin/custom_view', array('error' => ' ' ));
}


function upload() {
    foreach($_FILES as $name => $fileInfo)
    {
        $filename=$_FILES[$name]['name'];
        $tmpname=$_FILES[$name]['tmp_name'];
        $exp=explode('.', $filename);
        $ext=end($exp);
        $newname=  $exp[0].'_'.time().".".$ext; 
        $config['upload_path'] = 'assets/images/';
        $config['upload_url'] =  base_url().'assets/images/';
        $config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
        $config['max_size'] = '2000000'; 
        $config['file_name'] = $newname;
        $this->load->library('upload', $config);
        move_uploaded_file($tmpname,"assets/images/".$newname);
        return $newname;
    }
}

public function do_upload(){
    foreach($_FILES as $name => $fileInfo)
    { 
         if(!empty($_FILES[$name]['name'])){
            $newname=$this->upload(); 
            $data[$name]=$newname;
            $profile_pic =$newname;
            $this->load->view('admin/upload_success',$data);
         }
    }     
    $error = array('error' =>'Error');
    $this->load->view('admin/custom_view', $error);
}

}
?>