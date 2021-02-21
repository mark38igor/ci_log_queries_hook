# Logging Queries through hook

This project was generated with codeigniter3 

## Development server

Change the $config['base_url'] in config.php file to the location where this project exist on your machine. set the database in application/config/database.php

## Running the project
Open your browser,type the path where the project resides in a web server and append these path to tests.
- index.php/Test/getOfficeList to execute a select query and log it .
- Test/createOffice to execute a insert query and log it. 
-Test/createOffices to execute a batch insert query and log it .

SqlQuery log files are created in the log Files.

## Pre_system hook definition
application/config/hooks.php

## Hook logic
application/hooks/LogQueryHook.php defined in this file


