<?php

class tabloKontrol extends CI_Controller
{
	public $db;
   public function index(){
	   $rows = $this->db->get("Register")->result();

	   $viewdata=new stdClass();
	   //$viewdata->rows=$rows;
	   $viewData = array("rows" => $rows);

	   $this->load->view("tablo", $viewData);
}
   public function updatePage(){
      $row = $this->db->get("Register")->row();
	  $viewData=new stdClass();
	  $viewData ->row=$row;
	  $this->load->view("update", $viewData);
   }
	public function send($to_email = null) {
		// Email kütüphanesini yükle
		$this->load->library('email');

		// Email ayarlarını yapılandır
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.mail.yahoo.com', // Yahoo SMTP sunucu adresi
			'smtp_port' => 465, // SSL portu (465)
			'smtp_user' => 'efe.elif@yahoo.com', // Yahoo Mail adresiniz
			'smtp_pass' => '**********', // Uygulama şifreniz
			'charset' => 'utf-8',
			'mailtype'  => 'html',
			'wordwrap'   => true,
			'newline'   => "\r\n"
		);

		$this->email->initialize($config);
		$this-> email-> set_newline (" \ r \ n ");

		// Formdan gelen verileri al
		if ($to_email === null) {
			$to_email = $this->input->post('email');
		}

		// E-posta ayarlarını yap
		$this->email->from('2003elifefe@gmail.com', 'Elif');
		$this->email->to($to_email);
		$this->email->subject('Kayıt Başarılı');
		$this->email->message('Kayıt oluşturuldu...');

		// E-posta gönderimini gerçekleştir
		if ($this->email->send()) {
			echo "success";
		} else {
			echo "error";
			echo $this->email->print_debugger();
		}
	}



}
