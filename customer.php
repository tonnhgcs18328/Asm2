<?php
	$link = pg_connect("
  host=localhost
	");

	if($link === false){
		die("ERROR: Could not connect.");
	}
	else {
		echo "Successful";
	}

	$id = $_REQUEST['Id'];
  $name = $_REQUEST['Name'];
  $dob = $_REQUEST['DoB'];
  $phonenumber = $_REQUEST['PhoneNumber'];
	$address = $_REQUEST['address'];

  echo $id;
  echo $name;
  echo $dob;
 	echo $phonenumber;
	echo $address;

	$sql4 = 'INSERT INTO public."Customer"(
		"Id",
		"Customer_Name",
		"Date_of_Birth",
    "Phone_Number",
		"Address"
	) VALUES ('."
			'$id'::character varying(100),
			'$name'::character varying(100),
			'$dob'::date,
			'$phonenumber'::character varying(100),
			'$address'::character varying(100)
		)".'returning "Id"';

	if(pg_query($link, $sql4)){
		echo "Added";
	}
	else {
		echo "ERROR"; pg_error($link);
	}
header("Location: ATNmobile.html");
	pg_close($link);
?>
