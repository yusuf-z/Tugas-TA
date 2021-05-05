<?php

class Kategori extends CI_Controller
{
      public function mouse()
      {
            $data['mouse'] = $this->model_kategori->data_mouse()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('mouse', $data);
            $this->load->view('templates/footer');
      }

      public function keyboard()
      {
            $data['keyboard'] = $this->model_kategori->data_keyboard()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('keyboard', $data);
            $this->load->view('templates/footer');
      }

      public function headphone()
      {
            $data['headphone'] = $this->model_kategori->data_headphone()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('headphone', $data);
            $this->load->view('templates/footer');
      }
}
