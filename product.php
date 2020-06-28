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
  $cat = $_REQUEST['Category'];
  $desc = $_REQUEST['Desc'];
  $price = $_REQUEST['Price'];

  echo $id;
  echo $name;
  echo $cat;
  echo $desc;
 	echo $price;

	$sql4 = 'INSERT INTO public."Product"(
		"Id",
		"Product_Name",
		"Category",
    "Description",
		"Price"
	) VALUES ('."
			'$id'::character varying(100),
			'$name'::character varying(100),
			'$cat'::character varying(100),
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
