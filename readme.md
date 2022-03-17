<h1><center>APPLICANT BACKEND EXAM</center></h1>

<b>1.</b> Please install XAMPP using PHP Version 7.4 and set up our Admin Panel Template using Laravel Framework to your local.  
<br>
Github Repository<br>
<table>
	<tr>
		<th>
				Repository
		</th>
		<th>
				Branch
		</th>
	</tr>
	<tr>
		<td>
				<em>git clone https://github.com/dnrprogrammer/backend_exam.git</em>
		</td>
		<td>
				main
		</td>
	</tr>
</table>

<b>2.</b> There’s no need to run php artisan serve as our template is designed to run on localhost/laravelv2 url.  Just run the following commands:
	<br>

<table>
	<tr>
		<td>
				<em>git clone https://github.com/dnrprogrammer/backend_exam.git<Br></em>
		</td>
	</tr>
	<tr>
		<td>
				cp .env.example .env
		</td>
	</tr>
	<tr>
		<td>
				php artisan migrate:refresh –seed
		</td>
	</tr>
</table>
<p><b>Note:</b> <em>Please create database and update your database connection</em></p>


<br><br>
<b>3.</b> To access the Admin Panel, go to this link : http://localhost/laravelv2/admin/login 
<br>
<p><b>Note:</b> <em>Please log in using admin credentials below. There’s no need to run php artisan serve as our template is designed to run on localhost/laravelv2 url</em></p>

<table>
	<tr>
		<th>
				Username
		</th>
		<th>
				Password
		</th>
	</tr>
	<tr>
		<td>
				webmaster
		</td>
		<td>
				P@ssword1
		</td>
	</tr>
</table>

<br><br>

<b>4.</b> On your Admin > Pages > Edit Page. Please add new editable fields such as Text, Image Uploader and Content Editor. 
<br>
<b>Ex:</b> https://prnt.sc/5ZuzWHIvJXWS
<br><br>
<b>5.</b> You must use our created function called addSection inside of helpers.php to properly perform the task.

