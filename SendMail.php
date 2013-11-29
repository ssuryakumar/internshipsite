<?php
include "db.inc.php";
$Website = "internship.co.in";
$studentname=$_REQUEST["studentname"];
$collegename=$_REQUEST["collegename"];
$location=$_REQUEST["location"];
$degree=$_REQUEST["degree"];
$department=$_REQUEST["department"];
$year=$_REQUEST["year"];
$mobileno=$_REQUEST["mobileno"];
$mailid=$_REQUEST["mailid"];
$comments=$_REQUEST["comments"];

$message = "Student Name :".$studentname."<br>";
$message .= "College Name :".$collegename."<br>";
$message .= "Location :".$location."<br>";
$message .= "Degree :".$degree."<br>";
$message .= "Department :".$department."<br>";
$message .= "Year :".$year."<br>";
$message .= "Mobile No. :".$mobileno."<br>";
$message .= "Email id :".$mailid."<br>";
$message .= "Comments :".$comments."<br>";

//echo "1<br>";
//$databaseName = 'online_request';
//		$hostName = 'localhost';
	//	$userName = 'root';
	//	$password = 'admin';
		//echo "2<br>";
		//$conn = mysql_connect($hostName, $userName, $password) OR die("Failed Connecting To Mysql");
		//echo "3<br>";
		//mysql_select_db($databaseName) OR die("Failed Connecting To Database");
		//echo "4<br>";
		mysql_query("insert into online_request(Website,studentname,collegename,location,degree,department,year,mobileno,mailid,comments ) values('$Website','$studentname','$collegename','$location','$degree','$department','$year','$mobileno','$mailid','$comments')");
		
		$to="uniq.ipt@gmail.com";
$subject="Enquiry from ".$Website;
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: uniqsite@uniq.com' . "\r\n" .
   'Reply-To: uniqsite@uniq.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
mail($to,$subject,$message,$headers);

if ( mail($to,$subject,$content,$headers) ) {
     $msg = "Request Sent Successfully, Thank You";
header("Location: index.html?msg=Request Sent Successfully, Thank You");

   } else {
  $msg = "<center>Request Sent Failed, Thank You</center>";
header("Location: index.html?msg=Request Sent Failed, Thank You");
   }
	




?>
