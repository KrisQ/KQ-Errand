<?php  


/**
* This is the Users Class
*/


class Users extends CI_Controller
{


	public function register() {

		

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('comfirm_password', 'Password Confirmation ', 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() == FALSE) {

		
		$data['main_view'] = 'users/register_view';
		$this->load->view('layouts/main', $data);

		} else {


			if ($this->user_model->create_user()) {

				$this->session->set_flashdata('user_register', 'You successfully registered !');
	
			redirect('home/index');


		} else {

		}

		}


	}


	public function login() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');

		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

		

		if ($this->form_validation->run() == FALSE) {

			$data = array(
					'errors' => validation_errors()
				);
			$this->session->set_flashdata($data);
			redirect ('home');

		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->user_model->login_user($username, $password);

			if ($user_id) {
				$user_data = array(

					'user_id'  => $user_id,
					'username' => $username,
					'logged_in' => true 


					);

			$this->session->set_userdata($user_data);
			$this->session->set_flashdata('login_success', 'You are now logged in !');
		
			// $data['main_view'] = "admin_view";
			// $this->load->view('layouts/main', $data);

			redirect('home');

		} else {
			$this->session->set_flashdata('login_failed', 'Sorry you are not logged in');
			redirect('home/index');
		}

		
	}
}


	public function logout() {
		$this->session->sess_destroy();
		redirect('home/index');
	}

	// public function  show($user_id) {

	// 	$data['results'] = $this->user_model->get_users($user_id, "Rico");
	// 	$data['welcome'] = "Welcome to my first User page";
	// 	$data['bitch'] = "Here's the bitch data";

	// 	$this->load->view('user_view', $data);

		// foreach ($result as $object) {
		// 	echo $object->username . "<br>";
		// }

	// }

	// public function insert() {

	// 	$username = "Jean";
	// 	$password = 'Banana';

	// 	$this->user_model->create_users([

	// 			'username' =>  $username,
	// 			'password' =>  $password

	// 		]);

	// }

	// public function update() {


	// 	$id = 3;
	// 	$username = "Mark";
	// 	$password = 'Bananas';

	// 	$this->user_model->update_users([

	// 			'username' =>  $username,
	// 			'password' =>  $password

	// 		], $id );

	// }


	// public function delete($id) {
	// 	$this->user_model->delete_users($id);
	// }





}



?>