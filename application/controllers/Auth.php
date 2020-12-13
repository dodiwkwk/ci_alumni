<?php

class Auth extends CI_Controller
{

   public function login()
   {
      $this->form_validation->set_rules('email', 'Email', 'required|trim');
      if ($this->form_validation->run() == false) {
        $data['judul'] = 'Halaman Login';
        $this->load->view('templates/login/header_login', $data);
        $this->load->view('login/index');
        $this->load->view('templates/login/footer_login');
      } else {
         $this->prosesLogin();
      }
   }

   private function prosesLogin()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->db->get_where('user', ['email' => $email])->row_array();

      if ($user) {
         if (password_verify($password, $user['password'])) {
            $data = [
               'id_user' => $user['id_user'],
               'nama' => $user['nama'],
               'email' => $user['email'],
               'gambar' => $user['gambar'],
               'role_id' => $user['role_id']
            ];
            $this->session->set_userdata($data);
            redirect('dashboard');
         } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Password Salah!</div>');
            redirect('auth/login');
         }
      } else {
         $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
         Email Belum Teregistrasi!</div>');
         redirect('auth/login');
      }
   }

   public function logout()
   {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('nama');
      $this->session->unset_userdata('gambar');
      $this->session->unset_userdata('role_id');
      $this->session->set_flashdata('pesan', 'Terima Kasih Telah Berkunjung');
      redirect('home');
   }

   // public function register()
   // {
   //    $this->form_validation->set_rules('nama', 'Name', 'required|trim');
   //    $this->form_validation->set_rules('email', 'Email', 'required|trim');
   //    if ($this->form_validation->run() == false) {

   //      $data['judul'] = 'Halaman Login';
   //      $this->load->view('templates/login/header_login', $data);
   //      $this->load->view('regis/index');
   //      $this->load->view('templates/login/footer_login');
   //    } else {
   //       $data = [
   //          'nama' => $this->input->post('nama'),
   //          'email' => $this->input->post('email'),
   //          'gambar' => 'default.jpg',
   //          'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
   //          'role_id' => 4
   //       ];

   //       $this->db->insert('user', $data);
   //       $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
   //       Registrasi Berhasil! </div>');
   //       redirect('auth/login');
   //    }
   // }

    public function changePassword()
    {
        $data = [
            'title' => 'Ubah Password'
        ];
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('auth/ubah_password');
            $this->load->view('templates/admin/footer'); 
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('pesandata', 'Password salah');
                redirect('ganti_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('pesandata', 'Password baru tidak boleh sama dengan password sekarang');
                    redirect('ganti_password');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('id_user', $this->session->userdata('id_user'));
                    $this->db->update('user');

                    $this->session->set_flashdata('pesanberhasil', 'password anda sudah diganti');
                    redirect('ganti_password');
                }
            }
        }
    }
}