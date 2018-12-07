# WeaCast - Weather Forecast
WeaCast is a web application about forecasting weather, climate, etc. This app is built with codeigniter and an weather API(OpenWeatherMap).

For more info about the API you can check here [OpenWeatherMap API](http://openweathermap.org/api)

***
### 1. Demo Apps
* Clone/download this repo
* Put in htdocs
* Turn on your web server(ex: xampp,wampp)
* Config base url [configuration base_url](https://github.com/zakishaquille/weather_forecast#2-configuration) (if needed)
* Run in browser "localhost/weather-forecast/" (follow your configuration)

Homepage
![homepage](https://serving.photos.photobox.com/18503908fea383f823afb57b9a81892f3b87a21b98b44a7990059f5640b6817ef9893f5e.jpg)

Result page
![result](https://s29.postimg.org/nro33ew3b/Wea_Cast_Result.png)

***
### 2. Configuration
application/config.php - Set link app

`$config['base_url'] = 'http://localhost/weather-forecast/';`

***
### 3. Controller
application/controllers/Forecast.php - App controller

Homepage controller

```
public function index()
	{
		$data['title'] = "Home";
		$this->load->view('forecast', $data);
	}
```

Result page controller

```
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
```

***
### 4. Model
application/models/M_Forecast.php - App model

Get data Current Weather (Left side)

```
function current_weather($city)
    {
		 //get JSON
		 $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?appid=770a17f9520e41124656aa601bc34b3c&units=metric&q=$city", false);

		 //decode JSON to array
		 $data = json_decode($json,true);
		 
		 //return data array()
		 return $data;
    }
```

Get data Forecast (Right side)

```
function forecast_weather($city)
    {
		 //get JSON
		 $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/daily?appid=770a17f9520e41124656aa601bc34b3c&units=metric&q=$city&cnt=7", false);

		 //decode JSON to array
		 $data = json_decode($json,true);
		 
		 //return data array()
		 return $data;
    }
```
