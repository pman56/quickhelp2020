  # Quick Help.
  An applications that Connects People and Communities to help the Needy, the Isolated and the Vulnerables powered by Quickbase.
  
  
About QuickHelp Demo


Online Testing

Quick Help can be tested online either from 

https://qbtut.com/quick_help/index.php   or  from

https://hackathon20-fesedo.quickbase.com/db/bqxfck99a

You can signup and Login or used already created account by going to login Page directly.



Local Testing


To Run this application Locally, download the code from github.  You can have Xampp Server Install and ensure that PHP is running.
Our Applications leverages QuickBase Json and XML API Calls to perform all data manipulations activities
as regards to Insert, Update, Delete and Select etc.

The php Files that houses the Quickbase Configurable credentials includes 

1.) quickbase_pass.php : This is the first script to be updated. Here you will enter your Quickbase username and password to get
auth_ticket which you will be used later in the files below.

2.) Quickbase_token.php: Houses your quickbase access token, app_token, auth_ticket and so on.
3.) Quickbase_token1.php: Houses your quickbase access token etc.
4.)Quikbase_table: Houses all the table ID's used in the application.


5.)Signup_action.php: This is just for informations. Here you dont need to edit this two line of code below unless you want to replace
 your own quickbase domain or possibly change the users table Id

$users_table_db='users table id goes here';

$url4="https://hackathon20-fesedo.quickbase.com/db/$users_table_db";

6.) call up browser at http://localhost/quickhelp/index.php

Thanks

