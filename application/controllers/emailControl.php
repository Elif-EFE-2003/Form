<?php

class emailControl extends CI_Controller
{
    public function index(){
		this->load->view('tablo');
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => '2003elifefe@gmail.com',
			'smtp_pass' => '*******',
			'starttls' => true,
			'charset' => 'utf-8',
			'mailtype'  => 'html',
			'wordwrap'   => true,
			'newline'   => "\r\n"
		);
		$this->email->initialize($config);

		$this->load->library('email',$config);
		// Formdan gelen verileri al
		$to_email = $this->input->post('email');
		$this->email->from('2003elifefe@gmail.com','Elif');
		$this->email->to('$to_email');
		$this->email->subject('Kayıt basarili');
		$this->email->message('Kayıt olusturuldu...');

		$send=$this->email->send();
		if($send){
			echo "success";
		}else{
			echo "error";
			echo $this->email->print_debugger();
		}




	}

		public function sent_email($to_mail){
			$this->load->library('email');


			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.turkticaret.net',
				'smtp_timeout' => 30,
				'smtp_port' => 587,
				'smtp_user' => 'admin@mfbilgin.com.tr',
				'smtp_pass' => '2{K$q3K-;%FFWLno',
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'newline'   => "\r\n"

			);
			$this->load->library('email', $config);

			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$this->email->set_crlf("\r\n");


			$this->email->to($to_mail);
			$this->email->from("admin@mfbilgin.com.tr");
			$this->email->subject("Kaydınız Alınmıştır!");

			$this->email->message("kayit alindi ");
			//$this->email->cc();
			//$this->email->bcc();
			if ($this->email->send()){
				echo "email sent";
			}else {
				echo "error";
				print_r($this->email->print_debugger());
			}
		}

}
