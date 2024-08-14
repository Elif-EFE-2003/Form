<?php

class Formislem extends CI_Controller
{
 public function index(){
	 //$this->load->helper('url');
	 $this->load->view('form');

 }
	public function __construct() {
		parent::__construct();
		$this->load->model('dbislem'); // Modelinizi yükleyin
	}
 public function submit(){
	 $email = $this->input->post('email');
	 $password = $this->input->post('password');
	 $passwordConfirim = $this->input->post('passwordConfirim');

	 if ($password !== $passwordConfirim) {
		 echo 'Şifreler eşleşmiyor!';
		 return;
	 }

	 // Veritabanında e-posta ile kullanıcı olup olmadığını kontrol et
	 $user = $this->dbislem->getUserByEmail($email);

	 if ($user) {
		 // Eğer kullanıcı varsa, şifreyi kontrol et
		 if ($user->password === $password) {
			 // Şifreler eşleşiyorsa güncelle
			 $this->dbislem->updateUser($email, $this->input->post());
			 echo 'Kayıt güncellendi!';
		 } else {
			 // Şifreler eşleşmiyorsa hata mesajı göster
			 echo 'E-posta ile mevcut kayıt var ancak şifre yanlış!';
		 }
	 } else {
		 // Eğer kullanıcı yoksa, yeni kayıt oluştur
		 $this->dbislem->insertUser($this->input->post());
		 echo 'Yeni kayıt oluşturuldu!';
	 }

 }

}
