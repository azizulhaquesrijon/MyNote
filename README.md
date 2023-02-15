<h1>Import database by command :</h1>
1. Open cmd
2. mysql -u username -pasword database_name < file location

<h5>Example: </h5> mysql -u root -p xgroup2 < Downloads\xgroup.sql


<h1>New Module Create :</h1><br>
1. Module create : php artisan make:module ModuleName<br>
2. Model create : php artisan module:model ModelName ModuleName<br>
3. Migration create : php artisan module:nmigration MigrationName ModuleName<br>
4. Controller create : php artisan module:controller ControllerName ModuleName<br><br>


<h5>Complete theses task to active module</h5>
Step 1. Open RouteServiceProvider<br>

