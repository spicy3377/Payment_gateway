

<h1>iRecharge Backend Developer’s Take Home Test (Api integration)</h1>
This is a payment gateway integration where you can pay for services or goods you are purchasing using a third party payment platform (Flutterwave). additionally php based endpoints have also been created to be able to fetch all users data. create a customer automatically and also search a record using a spicific user id

## What it does

1. it automatically save you the stress of trying to code a payment gateway fromm scratch
2. it uses api for all its data transaction 
3. 



<h1>Credits:</h1>

- Bootstrap 4
- Material Design Icons
- jQuery
- PHP 7 & 8
- Mysqli
- Flutter-wave Api integration

<h1>Browser Support:</h1>

- Chrome (latest)
- FireFox (latest)
- Safari (latest)
- Opera (latest)
- IE10+


## How it is done

### Architecture Overview

This is a web app that uses a variety of API services to perform its core
functions. Below is an overview of the app with the various Rest API services called
out where they are being use

### Component Details

#### Overall server-side orchestration: PHP

The server side of the app runs in PHP. This is a relatively thin layer that
routes the various requests from the client to the respective rest API services.
The most complex part is the interaction between the client and the enpoints. Since this
is a two-way, asynchronous communication, we employ  API'S


Note: For the API testing refer to POSTMAN to test and see it or rather still your localhost server


#### ALL DB ENDPOINTS: PDO
This folder contains endpoints used to create, read and search data.
why did we implement it?. we are familiar with the fact that PDO will work on 12 different database systems and also PDO is much more secured,
so we implemented the endpoint using a PDO file just incase our endpoints might be called using different DB system.

- go to: http://localhost/flare/all_db_endpoints/customers/create
The above url is to access the endpoint for creating of customers
                 
                 secondaly

- go to: http://localhost/flare/all_db_endpoints/customers/read 
The above url is to access the endpoint for Reading/fetching all of the  customers


#### NORMAL ENDPOINTS: OBJECT-ORIENTED
This folder contains endpoints used to create, read and fetch a certain record base on an id.
why did we implement it?. This folder is a begiiner firendly  endpoint integration and make it more easier for a newbie to understand how to implement endpoints,
it is less secured , but can be implemented to do our basic task and this is also limited to just MYSQL type of DB, but it executes 10x faster than pdo or procedural.

- go to: http://localhost/flare/normal_endpoints/create
The above url is to access the endpoint for creating of customers

                  Second

- go to: http://localhost/flare/normal_endpoints/fetch_all
The above url is to access the endpoint for Reading/fetching all of the  customers in the DB


              Third

- go to: http://localhost/flare/normal_endpoints/select_id
The above url is to access the endpoint all of the transaction made by a specific id



#### SECURED ENDPOINTS: 
this filder contains a more secured way of calling and implementing an endpoint


## Try it out
<h1>How to use this app or project</h1>

1 - Click the Clone or Download button in GitHub and download as a ZIP file 

2 - After the files have been downloaded you will get a folder with all the required files

3- Goto fluuter wave official website and create an account with them

4- after that go to your developers seection and get your public and secret key for the flutter payment gateway

5- copy it and replace it with your own key on includes/flutter_con.php and also in the callback page

6- after that you are set to go

7- extract the database from the sql folder and import it to your php my admin

8- open the project at localhost/irecharge/index.php

9- Navigate through the app by ordering for a food and see how the payment integraion works

10- You can always fetch any data you want by using the REST endpoints


NOTE. if for any reason the endpoints url are not working properly you can delete the htaccess file.. and acess the endpoints with the .php extention
**Known Limitations and todo**
- i was unable to do a live test for the payment gateway prior to system issues, but it should be working fine,
-  Yoou can create an even much more secured API by using a third party service for authentification (OKTA)


