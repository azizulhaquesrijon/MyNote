<h1>Import database by command :</h1>
1. Open cmd
2. mysql -u username -pasword database_name < file location

<h5>Example: </h5> mysql -u root -p xgroup2 < Downloads\xgroup.sql


<h1>New Module Create :</h1><br>
1. Module create : php artisan make:module ModuleName<br>
2. Model create : php artisan module:model ModelName ModuleName<br>
3. Migration create : php artisan module:nmigration MigrationName ModuleName<br>
4. Controller create : php artisan module:controller ControllerName ModuleName<br><br>


<h3>Complete theses task to active module</h3><br>

<h4>1.Active Your Module RouteServiceProvider</h4>
<h5>Step 1.</h5> Open RouteServiceProvider<br>
<h5>Step 2.</h5> Add RouteServiceProvider.php code to your RouteServiceProvider.php file <br>

<h4>2.Active Your Module Migration</h4>
<h5>Step 1.</h5> Add App->Providers->MigrationServiceProvider.php File to your App->Providers folder
<h5>Step 2.</h5> Opern Config->app.php then add this line inside providers - <br>
                 
                 App\Providers\MigrationServiceProvider::class, 


<h4>3.Active Your Module View</h4>
<h5>Step 1.</h5> Open your view.php file add this line inside path - <br>

                base_path('module/Product/views'),
 
 
<h4>4.Active Your Module Seeder</h4>
<h5>Step 1.</h5> Open your database->seeders->DatabaseSeeder.php file add this line inside run function -  <br>

               Artisan::call('db:seed', [
                    '--class' => 'Module\Product\database\seeds\DatabaseSeeder',
                ]);
