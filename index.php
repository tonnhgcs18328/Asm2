<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>My jQuery Mobile</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="jquery.mobile-1.4.5.min.css" />
    <script src="jquery-1.11.1.min.js"></script>
    <script src="jquery.mobile-1.4.5.min.js"></script>
 </head>
<body>
<!--You need to type in the structure of a single page hybrid apps-->
<!--by using attribute data-role, value "page" in jQuery-->
<div data-role="page" id="home">

  <div data-role="header" data-role="button">
    <h1>ATN COMPANY</h1>
    <h1>CLOUD APPLICATION FOR SALE MANAGEMENT</h1>
  </div><!-- /header -->

  <div data-role="main" class="ui-content">
    <a id="btnCustomer" href="#customer" class="ui-btn">Customer</a>
    <a id="btnProduct" href="#product" class="ui-btn">Product</a>
    <a id="btnInvoice" href="#invoice" class="ui-btn">Invoice</a>
  </div>

  <div data-role="footer" data-position="fixed">
    <h4>Navigation</h4>
      <div data-role="navbar">
        <ul>
          <li><a href="#customer" data-role="button" >Customer</a></li>
          <li><a href="#product" data-role="button" >Product</a></li>
          <li><a href="#invoice" data-role="button" >Invoice</a></li>
        </ul>
      </div>
  </div><!-- /footer -->
</div><!-- /page -->

<div data-role="page" id="invoice">

  <div data-role="header">
    <h1>INVOICE</h1>
  </div><!-- /header -->

  <div data-role="main" class="ui-content">
    <h1>Invoice Form</h1>
    <p>Please fill all in the blanks to add a INVOICE item</p>
    <form  action="invoice.php" method="post">
      <p>
        <label for="productid">Product ID<sup>*</sup></label>
        <input type="text" name="Id" id="productid">
      </p>
      <p>
        <label for="productname">Product Name<sup>*</sup></label>
        <input type="text" name="Name" id="productname">
      </p>
      <p>
        <label for="productcat">Category</label>
        <input type="text" name="Category" id="productcat">
      </p>

      <p>
        <label for="price">Price</label>
        <input type="text" name="Price" id="price">
      </p>
      <p>
        <label for="date">Date</label>
        <input type="date" name="Date" id="Date">
    </p>
      <p>
        <label for="description">Descriptions<sup>*</sup></label>
        <textarea name="desc" id="Description" rows="5" cols="30"></textarea>
      </p>
      <input type="submit" value="Submit">
      <input type="reset" value="Reset">
      <!--<input type="button" name="submit" id="submit" value="Submit Here">
      -->
    </form>

  </div><!-- /content -->

  <div data-role="footer" data-position="fixed">
    <h4>Navigation</h4>
      <div data-role="navbar">
        <ul>
          <li><a href="#home" data-role="button" >Home</a></li>
          <li><a href="#product" data-role="button" >Product</a></li>
          <li><a href="#customer" data-role="button" >Customer</a></li>
        </ul>
      </div>
  </div><!-- /footer -->
</div><!-- /page -->

	<!--This is the 2nd page-->
	<div data-role="page" id="product">

		<div data-role="header">
			<h1>Products</h1>
		</div><!-- /header -->
		<div data-role="main" class="ui-content">
      <h1>Products Form</h1>
			<p>Please fiil all in the blanks to add a product</p>
    <form action="product.php" method="post">
        <p>
            <label for="productid">Product ID<sup>*</sup></label>
            <input type="text" name="Id" id="ProductId">
        </p>
        <p>
            <label for="productname">Product Name<sup>*</sup></label>
            <input type="text" name="Name" id="ProductName">
        </p>
        <p>
            <label for="productcat">Category</label>
            <input type="text" name="Category" id="ProductCategory">
        </p>
        <p>
            <label for="productprice">Price</label>
            <input type="text" name="Price" id="ProductPrice">
        </p>
          <p>
            <label for="description">Descriptions<sup>*</sup></label>
            <textarea name="Desc" id="Description" rows="5" cols="30"></textarea>
        </p>
        <input type="submit" value="Add  product">
        <input type="reset" value="Reset">
    </form>
		</div><!-- /content -->
		<div data-role="footer" data-position="fixed">
			<h4>Page Footer</h4>
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" >Home</a></li>
						<li><a href="#invoice" data-role="button" >Invoice</a></li>
            <li><a href="#customer" data-role="button" >Customer</a></li>
					</ul>
				</div>
		</div><!-- /footer -->
	</div><!-- /page -->

	<!--This is 3rd page-->
  <div data-role="page" id="customer">

		<div data-role="header">
			<h1>CUSTOMER</h1>
		</div><!-- /header -->
      <div data-role="main" class="ui-content">
        <h1>Customer Form</h1>
  			<p>Please fill all in the blanks !</p>
      <form action="customer.php" method="post">
          <p>
              <label for="customerid">Customer ID<sup>*</sup></label>
              <input type="text" name="Id" id="CustomerId">
          </p>
          <p>
              <label for="customername">Customer Name<sup>*</sup></label>
              <input type="text" name="Name" id="CustomerName">
          </p>
          <p>
              <label for="dateofbirht">Date of birth</label>
              <input type="date" name="DoB" id="DayofBirth">
          </p>
          <p>
              <label for="phonenumber">Phone Number</label>
              <input type="text" name="PhoneNumber" id="PhoneNumber">
          </p>
          <p>
              <label for="address">Address<sup>*</sup></label>
              <input type="text" name="address" id="Address">
          </p>
          <input type="submit" value="Add customer">
          <input type="reset" value="Reset">
      </form>
		</div><!-- /content -->

		<div data-role="footer" data-position="fixed">
			<h4>Navigation</h4>
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" >Home</a></li>
						<li><a href="#invoice" data-role="button" >Invoice</a></li>
            <li><a href="#product" data-role="button" >Product</a></li>
					</ul>
				</div>
		</div><!-- /footer -->
	</div><!-- /page -->
</body>
</html>
