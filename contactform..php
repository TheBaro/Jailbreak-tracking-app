<?php

/* subject and email Variable*/
   $emailSubject ='crarzy Php Scripting';
   $webMaster = 'johnsonroland12@gmail.com';
   
   /* gathering data variables */
   $emailField = $_POST['email'];
   $nameField = $_POST['name'];
   $levelField = $_POST['level'];
   $infoField = $_POST['message'];
   
   $body= <<<EOD
<br><hr><br>   Email: $email<br>Name: $name<br>level: $level<br>info:  $info<br>
EOD;
   
     $headers= "From: $email\html\r\n";
	 $headers .="Content-type: text/html\r\n";
	 $success = mail($webMaster, $emailSubject, $body, $headers) ;
	 
	 
	 /* result rendered as html*/
	 $theResults = <<<EOD
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery Mobile Web App</title>
<link rel="stylesheet" href="charitytheme.min.css" />
<link rel="stylesheet" href="jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>Page One</h1>
	</div>
	<div data-role="content">	
		THANK YOU FOR YOUR INTEREST ! YOUR EMAIL WILL BE ANSWERED VERY SHORTYLY 
		</ul>		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

</body>
</html>
EOD;
echo "$theResults";
	 
?>