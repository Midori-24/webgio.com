<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

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
		$n['getAll'] = $this->products_m->get_all();
		$this->load->view('products/main', $n);
	}
	public function form()
	{
		$this->load->view('products/form');
	}
	
	public function save()
	{
		

		$data['name'] = $this->input->post('name');
		$data['category_brand'] = $this->input->post('category_brand');

		$this->db->insert('products', $data);
		redirect(base_url().'products');
	}




	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('products');
		redirect(base_url().'products');
	}


	public function edit($id)
	{
		$n['getId'] = $this->products_m->get_id($id);
		$this->load->view('products/update', $n);
	}

	public function updateData()
	{
		$id = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['category_brand'] = $this->input->post('category_brand');

		$this->db->where('id', $id);
		$this->db->update('products', $data);
		redirect(base_url().'products');
	}
}
