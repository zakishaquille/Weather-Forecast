<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Forecast extends CI_Model
{
    function current_weather($city)
    {
		 //get JSON
	    	 //you can get param appid from your account in openweathermap.org
	    	 //http://api.openweathermap.org/data/2.5/weather?appid=[YOUR_APP_ID]&units=metric&q=$city
		 $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?appid=770a17f9520e41124656aa601bc34b3c&units=metric&q=$city", false);

		 //decode JSON to array
		 $data = json_decode($json,true);
		 
		 //return data array()
		 return $data;
    }

    function forecast_weather($city)
    {
		 //get JSON
	    	 //you can get param appid from your account in openweathermap.org
	    	 //http://api.openweathermap.org/data/2.5/forecast/daily?appid=[YOUR_APP_ID]&units=metric&q=$city&cnt=7
		 $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/daily?appid=770a17f9520e41124656aa601bc34b3c&units=metric&q=$city&cnt=7", false);

		 //decode JSON to array
		 $data = json_decode($json,true);
		 
		 //return data array()
		 return $data;
    }
}
