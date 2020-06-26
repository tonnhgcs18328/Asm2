<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LAB 4</title>
    <meta name = "viewport" content = "width=device-width, initital-scale = 1"> <!-- initital-scale = 1 là lệnh zoom lên 100%-->

    <link rel="stylesheet" href="jquery.mobile-1.4.5.min.css"/>
    <script src="jquery-1.11.1.min.js"></script>
  <script src="jquery.mobile-1.4.5.min.js"></script>
  </head>
  <body>
    <div data-role="page" id="home">
      <div data-role="header">
        <p>Home page header</p>
      </div>
      <div date-roll="main">
        <p>Home main content</p>
        <ul id = "mylist1" data-role= "listview">
          <li><a href="#">Fruit List</a></li>
        </ul>
        <a id= "btnAddApple" href= "" class= "ui-btn ui-btn-b ui-corner-all ui-btn-icon-left ui-icon-plus">Add an Apple</a>
        <a id= "btnAddOrange" href= "" class= "ui-btn ui-btn-b ui-corner-all ui-btn-icon-left ui-icon-plus">Add an Orange</a>
        <a href="#page1" class= "ui-btn">Page 1</a>
        <a href="#page2" class= "ui-btn">Page 2</a>
      <div data-role="footer" data-position="fixed">
        <p>Home footer</p>
      </div>
    </div>
    <div data-role="page" id="page1">
      <div data-role="header">
        <p>Home page header1</p>
      </div>
      <div date-roll="main">
        <p>Home main content1</p>
      </div>
      <div data-role="footer" data-position="fixed">
        <p>Home footer1</p>
        <a href="#home">Back to home</a>
      </div>
    </div>
    <div data-role="page" id="page2">
      <div data-role="header">
        <p>Home page header2</p>
      </div>
      <div date-roll="main">
        <p>Home main content2</p>
      </div>
      <div data-role="footer" data-position="fixed">
        <p>Home footer2</p>
        <a href="#home">Back to home</a>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $("#btnAddApple").click(function(){
          $("#mylist1").append('<li> <a href="#">An Apple<button class="view" class="ui-btn ui-btn-inline">View Detail</button></a> </li>');
          $("#mylist1").listview("refresh");
          $(".view").click(function(){
            alert("This is the Apple");
          });
        });
        $("#btnAddOrange").click(function(){
          $("#mylist1").append('<li> <a href="#">An Orange<button class="view" class="ui-btn ui-btn-inline">View Detail</button></a> </li>');
          $("#mylist1").listview("refresh");
          $(".view").click(function(){
            alert("This is the Orange");
          });
        });
      });
    </script>
  </body>
</html>
