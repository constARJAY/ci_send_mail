<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function sendMail()
	{
		$from_user = 'bcgierpsys@gmail.com';
        $from_pass = 'Erpsys2o2!';

        $config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => $from_user,
			'smtp_pass' => $from_pass,
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1',
			'wordwrap'  => TRUE
		];

        $message = '<b><h2>Confirm Your Registration</h2></b>
                    <br>
                    <B>Welcome to Web Portal!</B>
                    <br>
                    <br>
                    Thank you for registering. To activate your account, please click the link below to confirm your account.
                    <br>
                    <br>
                    <br>
                    <br>
                    Developer Team,
                    <br>
                    This is an automated message, please do not reply.';
        
        $this->load->library('email', $config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->from($from_user,'FROM');
        $this->email->to('arjay.diangzon@theblackcoders.com');
        $this->email->subject('Web Portal - Activate Your Account');
        $this->email->message($message);
        
        if(!$this->email->send())
        {
            print_r($this->email->print_debugger());
        } else {
			echo "SENT SUCCESSFULLY!";
		}
	}


}
