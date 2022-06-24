<?php 

class Auth extends CI_Controller{

	public function login() {
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		}else{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$cek = $this->UsersModel->cek_login($username, $password);

			if($cek == FALSE) {
				$this->session->set_flashdata('pesan',
          '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				    Username atau Password Salah!
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				      <span aria-hidden="true">&times;</span>
				    </button>
				  </div>');
			  redirect('auth/login');
			}else {
				$where = array(
					'id_user' => $cek->id_user,
				);
				$pasienConnect = $this->RumahSakitModel->getWhere($where, 'pasien')->result();
				$this->session->set_userdata('id_user', $cek->id_user); 
				$this->session->set_userdata('username', $cek->username);
				$this->session->set_userdata('role', $cek->role);

				$this->session->set_userdata('id_pasien', $pasienConnect[0]->id_pasien);
				$this->session->set_userdata('nik', $pasienConnect[0]->nik);
				$this->session->set_userdata('nama_pasien', $pasienConnect[0]->nama_pasien);

				switch ($cek->role) {
					case 'user': 	redirect(base_url());
								break;
					case 'admin': 	redirect('admin/dashboard');
								break;
					
					default: break;
				} 
			}

		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('auth/login/'));
	}


  public function _rules() {
		$this->form_validation->set_rules('username','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
	}

}