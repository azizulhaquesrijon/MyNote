<h1>Import database by command :</h1>
1. Open cmd
2. mysql -u username -pasword database_name < file location

<h5>Example: </h5> mysql -u root -p xgroup2 < Downloads\xgroup.sql


<h1>New Module Create :</h1><br>
<h3>Create custom command for Module </h3>
1.Copy App->Console->Commands and App->Console->stubs folder inside your App->Console Directory.

2.Module command

 Module create : 
 
 ```PHP 
 php artisan make:module ModuleName
 ```
                    
 * Model create : 

   ```PHP 
   php artisan module:model ModelName ModuleName
   ```
   
 * Migration create : 
 
    ```PHP 
    php artisan module:nmigration MigrationName ModuleName
    ``` 

 * Controller create : 
 
    ```PHP 
    php artisan module:controller ControllerName ModuleName
    ```
 


<h3>Complete theses task to active module</h3>

<h4>1.Active Your Module Route</h4>
<h5>Step 1.</h5> Open RouteServiceProvider

<h5>Step 2.</h5> Add RouteServiceProvider.php code to your RouteServiceProvider.php file

<h4>2.Active Your Module Migration</h4>
<h5>Step 1.</h5> Add App->Providers->MigrationServiceProvider.php File to your App->Providers folder

<h5>Step 2.</h5> Opern Config->app.php then add this line inside providers - 
              
```PHP 
     App\Providers\MigrationServiceProvider::class,
```

<h4>3.Active Your Module View</h4>
<h5>Step 1.</h5> Open your view.php file add this line inside path - 

```PHP 
   base_path('module/Product/views'),
```
 
 
<h4>4.Active Your Module Seeder</h4>
<h5>Step 1.</h5> Open your database->seeders->DatabaseSeeder.php file add this line inside run function -  


```PHP 
   Artisan::call('db:seed', [
        '--class' => 'Module\Product\database\seeds\DatabaseSeeder',
    ]);
```



<h4>1.Active Your Module</h4>
<h5>Step 1.</h5> Open composer.json. Add it inside autoload -

```PHP 
   "Module\\": "module/",

```
