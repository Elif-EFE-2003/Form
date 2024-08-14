<?php

class DBislem extends CI_Controller
{

	public function index()
	{
		//$rows = $this->db->get("Register")->result();

		//$viewdata=new stdClass();
		//$viewdata->rows=$rows;
		//$viewData = array("rows" => $rows);

		//$this->load->view("tablo", $viewData);

		$this->load->helper("captcha");
		$vals = array(
			//'word'          => 'Random word',
			'img_path'      => './captcha/',
			'img_url'       => 'http://localhost/codeigniter/captcha/',
			'font_path'     => './path/to/fonts/CORBEL.ttf',
			'img_width'     => '150',
			'img_height'    => 50,
			'expiration'    => 7200,
			'word_length'   => 5,
			'font_size'     => 16,
			'img_id'        => 'Imageid',
			'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

			// White background and border, black text and red grid
			'colors'        => array(
				'background' => array(10, 187, 252),
				'border' => array(50, 50, 255),
				'text' => array(0, 0, 0),
				'grid' => array(67, 234, 10)
			)
		);

		$captcha = create_captcha($vals);
		//print_r($cap);
		//echo $cap['image'];
		$viewdata = array(
			'captcha' => $captcha
		);
		$this->load->view('form', $viewdata);

		//$this->load->view('welcome_message');
	}

	public function where()
	{
		$where = array(
			"FirstName" => 1,
			"LastName !=" => "",
		);

		$rows = $this
			->db
			->or_where($where)
			->get("Register")
			->result();
		print_r($rows);

		$viewData = array("rows" => $rows);
		$this->load->view("dbislem", $viewData);
	}

	public function custom_query()
	{
		$rows = $this->db->query("select * from Register")->result();
		echo $this->db->last_query();
		echo "<br>";
		print_r($rows);
	}

	public function insertPage()
	{
		$this->load->view("form");
	}
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getUserByEmail($email) {
		$this->db->where('email', $email);
		$query = $this->db->get('register');
		return $query->row(); // Kullanıcı varsa, kullanıcıyı döndür
	}

	public function updateUser($email, $data) {
		$this->db->where('email', $email);
		$this->db->update('register', $data); // Kullanıcıyı günceller
	}

	public function insertUser($data) {
		$this->db->insert('register', $data); // Yeni kullanıcı ekler
	}
	public function submit()
	{
		$firstName = $this->input->post('firstName');
		$lastName = $this->input->post('lastName');
		$password = $this->input->post('password');
		$passwordConfirim=$this->input-> post('passwordConfirim');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
		$birthDate = $this->input->post('birthDate');
		$tc = $this->input->post('tc');
		$address = $this->input->post('address');
		$additional = $this->input->post('additional');
		$file = $this->input->post('file');
		$captcha = $this->input->post('captcha');

		$data = array(
			"firstName" => $firstName,
			"lastName" => $lastName,
			"password" => $password,
			"email" => $email,
			"phone" => $phone,
			"gender" => $gender,
			"age" => $age,
			"birthDate" => $birthDate,
			"tc" => $tc,
			"address" => $address,
			"additional" => $additional,
			"file" => $file,
			"captcha" => $captcha
		);
		$insert = $this->db->insert("register", $data);

		if ($insert) {
			echo "Kayıt başarılı!";
		} else {
			$error = $this->db->error();
			echo "Kayıt başarısız: " . $error['code'] . " - " . $error['message'];
		}


	}
    public function delete($id=-1)
	{
       $delete=$this
		   ->db
		   ->where("id",$id)
		   ->delete("Register");
	}
	public function model_usage(){
		this->load->model("personel_model");
		$result=$this->personel_model->get(array("firstName"=>"Elif"));
		print_r($result);
	}





}
