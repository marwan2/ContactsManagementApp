# ContactsManagementApp
A very simple contacts management app, to add, edit, delete and list your contacts.
The app is built using Laravel PHP Framework, on version 5.5.

1. [Installation](#1-installation)
2. [Plugins](#2-plugins)
3. [Usage](#3-usage) 

## 1. Installation
1. Clone the project from this repo. 
2. In your terminal run the following command
	```
    composer update
    ``` 
3. After the whole framework libraries and plugins downloaded using the above command, now create a database titled:
	```
    contacts_msys
    ``` 
4. Copy the .env.example file and rename the new file to be ".env", you may use the following command:
	```
    cp .env.example .env
    ```
    Edit the ".env" file, by changing the database name with db name you created, and change the db username & password to match your database credentials.  
5.  Run the following command to create the database tables for the app:
	```
    php artisan migrate
    ```
6.  [Optional] If you wish to fill in the contacts table with fake data, run the following command
	```
    php artisan db:seed
    ```


## 2. Plugins
The app uses the following plugins 
1. Laravel Admin LTE package. 
2. The Laravel Collective Package
	- This package is used as HTML and Form Builders for the Laravel Framework.
3. Bootstrap CSS Framework
4. Datatables Jquery Library
5. Faker package, to seed the contacts database with fake data.


## 2. Usage
- After completing the installation, open the app, then register a new account for you.
- From the home screen, click on "Manage your contacts".
- Now start Add/Edit/Delete contacts

