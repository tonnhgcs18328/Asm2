<?php
	$link = pg_connect("
	host=ec2-34-232-147-86.compute-1.amazonaws.com
  dbname=localhost
	");

	if($link === false){
		die("ERROR: Could not connect.");
	}
	else {
		echo "Successful";
	}

	$id = $_REQUEST['Id'];
  $name = $_REQUEST['Name'];
  $cat = $_REQUEST['Category'];
  $date = $_REQUEST['Date'];
  $desc = $_REQUEST['desc'];
  $price = $_REQUEST['Price'];

  echo $id;
  echo $name;
  echo $cat;
  echo $date;
  echo $price;
  echo $desc;

	$sql4 = 'INSERT INTO public."Invoice"(
		"Id",
		"Product_Name",
		"Category",
		"Date",
    "Description",
		"Price"
	) VALUES ('."
			'$id'::character varying(100),
			'$name'::character varying(100),
			'$cat'::character varying(100),
			'$date'::date,
			'$desc'::character varying(100),
			'$price'::double precision
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
