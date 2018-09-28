<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('form');
	}

	public function submit()
	{
		$data = $this->input->post('phone');
		$link = $this->input->post('link');
		$message = $this->input->post('message');
		$myArray = explode(',', $data);
	  foreach($myArray as $arr)
		{
		    $data = array(

					'phone'=>$arr,
					'link'=>$link,

				);

			$this->db->insert('number_link',$data);
			$id = $this->db->insert_id();
			$short_link = 'http://localhost/project/home/sms/'.$id;
			$msg = str_replace("{short_link}",$short_link,$message);
			$this->db->where(['offer_id'=>$id])
					 ->update('number_link',['short_link'=>$short_link,'message'=>$msg]);
		}

		redirect('home');
	}

	public function sms($id='')
	{
		$this->load->model('get_link');
		$url = $this->get_link->get_info($id);
		$this->db->where('offer_id',$id)
		         ->update('number_link',['status'=>1]);
    redirect($url);
	}

	public function table()
	{
		$this->load->model('get_link');
		$status = $this->get_link->get_status();
		$this->load->view('table',['status'=>$status]);
	}

	public function delete_customer()
	{
		$offer_id = $this->input->post('offer_id');
		$this->db->where('offer_id',$offer_id)
				     ->delete('number_link');
	  redirect('home/table');
	}
}
