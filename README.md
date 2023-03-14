<h1><b>Laravel Chart using larapex charts Library ConsoleTVs/Charts v6</b></h1>

## About

"php": "^7.4|^8.0"<br>
"laravel": "9"<br>
Library<br>
 "name": "consoletvs/charts"<br>
 "version": "6.6.0"<br>

## Steps

1- Add consoleTv charts using composer to your project<br><br>
&nbsp;&nbsp;composer require consoletvs/charts:6<br><br>
2- Register a service provider, add this line into the config/app.php file in the providers section<br><br>
&nbsp;&nbsp;ConsoleTVs\Charts\ChartsServiceProvider::class,<br><br>
3- Publish the configuration in terminal with the command<br><br>
&nbsp;&nbsp;php artisan vendor:publish --tag=charts_config<br><br>
4- We are going to use artisan cli to create a chart class<br><br>
&nbsp;&nbsp;php artisan make:chart UserChart<br><br>
5- Create a Controller<br><br>
&nbsp;&nbsp;php artisan make:controller UserChartController<br><br>
6- Write respective functions according to chart type<br><br>
7- Create view file<br><br>
8- Add Routes in route/web.php<br></br>


<b>These are the steps, According to your chart type there is a differnet data sets are available</b>
