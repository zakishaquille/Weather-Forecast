<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forecast extends CI_Controller {

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

	function __construct(){
        parent::__construct();
		
		//call model
        $this->load->model('M_Forecast');
    }

	public function index()
	{
		$data['title'] = "Home";
		$this->load->view('forecast', $data);
	}

	public function forecasting()
	{
		if(!empty($_POST['city'])) {
			$data['current_weather'] = $this->M_Forecast->current_weather($_POST['city']);
			$data['forecast_weather'] = $this->M_Forecast->forecast_weather($_POST['city']);
		} else {
			$data['current_weather']=null;
			$data['forecast_weather']=null;
		}
		
		$data['title'] = "Result";
        $this->load->view('weacast', $data);
	}

}
