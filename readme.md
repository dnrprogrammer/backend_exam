<h1><center>APPLICANT BACKEND EXAM</center></h1>

1. Please install XAMPP using PHP Version 7.4 and set up our Admin Panel Template using Laravel Framework to your local.  

Github Repository
Repository:
git clone https://github.com/dnrprogrammer/backend_exam.git
Branch:
main



2. There’s no need to run php artisan serve as our template is designed to run on localhost/laravelv2 url.  Just run the following commands:
	

git clone https://github.com/dnrprogrammer/backend_exam.git
composer install
cp .env.example .env         Note: Please create database and update your database connection
php artisan migrate:refresh –seed



3. To access the Admin Panel, go to this link : http://localhost/laravelv2/admin/login 

Note: Please log in using admin credentials below. There’s no need to run php artisan serve as our template is designed to run on localhost/laravelv2 url

Admin Account
Username: webmaster
Password: P@ssword1




4. On your Admin > Pages > Edit Page. Please add new editable fields such as Text, Image Uploader and Content Editor. 

Ex: https://prnt.sc/5ZuzWHIvJXWS

5. You must use our created function called addSection inside of helpers.php to properly perform the task.

