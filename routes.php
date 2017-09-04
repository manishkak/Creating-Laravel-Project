<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
Route::get('/', function () {
    return view('welcome');          //get Welcome screen->  1 way
});*/


/*Route::get('/', function () {       ////get Welcome screen->  2nd way
    return view('welcome', ['name' => 'MANISH' ]);  //or write 'welcome', compact('name')..and $name='MANISH'
});*/

Route::get('/', function () {
	
	$tasks = DB::table('tasks')->get();    //this is Laravel's query builder

    //return $tasks; //if we return a DB query from a route, laravel is smart enough to automatically cast that to json
	//install a chrome extension called Json Formatter to get Json in a parsed format (not Raw format)

	//$tasks = App\Task::all();    //gives all records like get(), but written in an Eloquent way  [so it's query builder vs Eloquence]
								   //here App\Task is Task.php file inside app folder
	
	return view('welcome', compact('tasks'));
});

Route::get('/about', function () {
    return view('about');  //goto http://localhost:8000/about for this
});


/* //example of required parameter aka wild-card
Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;                      
});
*/

Route::get('ID/{id}',function($id){
   $tasks = DB::table('tasks')->find($id);                      //another example of required parameter aka wild-card
   //$tasks = App\Task::find($id); //Eloquence for above query
   dd($tasks);
});

Route::get('/users/{name?}',function($name = 'Virat Gandhi'){
   echo "Name: ".$name;                  ////example of optional parameter
});


//CONTROLLERS-->

Route::get('/tasks', 'TasksController@index' );      //does the same tasks as  $tasks = App\Task::all(); above

Route::get('/tasks/{task}', 'TasksController@show' );

Route::get('/user', ['uses' => 'UserController@index'] );  //goto http://localhost:8000/user for this

//locahost:8000/admin/123/456 (? means even if there is no second then also the url will work)
Route::get('/admin/{number}/{second?}', 'AdminController@index')->where(['number'=>"[0-9]+"]);                  // AdminController@index --> controller name @ method name

Route::resource('my','MyController');


//LAYOUTS-->

Route::get('/lay','PostsController@index');

//Route::get('/lay/{post}','PostsController@show');

Route::get('/lay/create','PostsController@create');

Route::post('/posts','PostsController@store');








