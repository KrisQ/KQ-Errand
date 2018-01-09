<?php  

/**
* This is the Home Class
*/


class Projects extends CI_Controller
{
	

	public function __construct() {

		parent::__construct();

	if (!$this->session->userdata('logged_in')) {

		$this->session->set_flashdata('no_access', 'Sorry, you are not logged in');

		redirect("home");
	}

}
	

	public function index() {

			$user_id = $this->session->userdata('user_id');
			$data['projects'] = $this->project_model->get_all_projects($user_id);

		//$data['projects'] = $this->project_model->get_projects();
		$data['main_view'] = "projects/index";

		$this->load->view('layouts/main', $data);
	}

	public function display($project_id) {

		$data['not_completed_task'] = $this->project_model->get_project_tasks($project_id, true);
		$data['completed_task'] = $this->project_model->get_project_tasks($project_id, false);

		$data['project_data'] = $this->project_model->get_project($project_id);

		$data['main_view'] = "projects/display";

		$this->load->view('layouts/main', $data);
	}

	public function create() {
		$this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('project_body', 'Project Description', 'trim|required|min_length[2]');

		if ($this->form_validation->run() == FALSE) {

			$data['main_view'] = 'projects/create_project';

			$this->load->view('layouts/main', $data);

		} else {

			$data = array(

				'project_user_id' => $this->session->userdata('user_id'),
				'project_name'    => $this->input->post('project_name'),
				'project_body'    => $this->input->post('project_body')

				);

			if ($this->project_model->create_project($data)) {
				$this->session->set_flashdata('project_created', 'You successfully created a project');
				redirect('projects/index');
			} else {

			}

		}



	}

		public function edit($project_id) {
		$this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('project_body', 'Project Description', 'trim|required|min_length[2]');
		$data['project_data'] = $this->project_model->get_project($project_id);
		if ($this->form_validation->run() == FALSE) {

			$data['main_view'] = 'projects/edit_project';

			$this->load->view('layouts/main', $data);

		} else {

			$data = array(

				'project_user_id' => $this->session->userdata('user_id'),
				'project_name'    => $this->input->post('project_name'),
				'project_body'    => $this->input->post('project_body')

				);

			if ($this->project_model->edit_project($project_id, $data)) {
				$this->session->set_flashdata('project_edited', 'You successfully edited a project');
				redirect('projects/display/'.$project_id);
			} else {
				
			}

		}



		}

		public function delete($project_id) {
			$this->project_model->delete_tasks($project_id);


			$this->project_model->delete_project($project_id);

			$this->session->set_flashdata('project_deleted', 'You successfully deleted a project');

			redirect("projects/index");

		}



}


?>

