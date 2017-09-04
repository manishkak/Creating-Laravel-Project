# Creating-Laravel-Project
Create a sample Laravel Project

- routes.php (has all the routes..from localhost to pages/controller actions)
- PostsController.php (the main controller file)
- index.blade.php (contains dummy data)
- layouts.blade.php (contains dummy data)
- show.blade.php (includes the layout file)
- album.css (dummy css)
- nav.blade.php (contains top navigation bar)
- footer.blade.php  (contains footer)
- create.blade.php (form that takes in title and body through a post request and saves it; use php artisan tinker and then all(); method to fetch form submission through the command prompt)

```
run--> php artisan make:model Post -mc
```
```
add--> $table->string('title'); $table->text('body'); 
to the migration file create_posts_table.php (databse/migration/)
```
```
run--> php artisan migrate on cmd to create the table
```
```
check whether posts table is created or not
on MySql console like so--> desc posts;
```
```
goto the routes.php file 
Add the route--> /lay page to redirect to the PostsController@index
PostsController's index method--> which has return view('posts.index');
return view('posts.index'); --> here index means index.blade.php
```
