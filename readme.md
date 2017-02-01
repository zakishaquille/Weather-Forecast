# WeaCast - Weather Forecast
### 1. Demo Apps
Homepage
![homepage](https://s27.postimg.org/vvdibdlur/download.png)

Result page
![result](https://s29.postimg.org/nro33ew3b/Wea_Cast_Result.png)

***
### 2. Configuration
application/config.php - Set link app

`$config['base_url'] = 'http://localhost/weather-forecast/';`

***
### 3. App code documentation
application/controllers/Forecast.php - App controllers

Homepage

`public function index()
	{
		$data['title'] = "Home";
		$this->load->view('forecast', $data);
	}`

Result page

`public function forecasting()
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
	}`
