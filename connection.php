<?php

$conn = pg_connect("postgres://icusnqnvrbqndg:754db3cf2fb5fe17745b835d8fb82a9bc116be67243eb89c904bb5724c6988ba@ec2-44-209-24-62.compute-1.amazonaws.com:5432/d9qjfikptlni8g");
	if(!$conn)
	{
		die("Could not connect to database");
    }

	
/*	
$conn = pg_connect("host=localhost port=5432 dbname=ATNshop user=postgres password=20102001");
if (!$conn) {
	die("Connection failed");
}*/
?>