<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class captureTest extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
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
}
