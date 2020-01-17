<style>
* {box-sizing: border-box}
/* Add padding to containers */
.container {
  padding: 16px;
}
/* Full-width input fields */
input[type=text], input[type=password], input[type=number], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus, input[type=number]:focus, input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity:1;
}
/* Add a blue text color to links */
a {
  color: dodgerblue;
}
/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Event Details</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<form action="<?php echo base_url();?>index.php/Booking/events_add" method="POST">
  <div class="container">
    <h1>Add Event Details</h1>
    <hr>

    <label for="name"><b>Event Name:</b></label>
    <input type="text" placeholder="Event Name" name="ename" autocomplete="off" required>
	
    <label for="date"><b>Event Date:</b></label>
    <input type="text" placeholder="MM/DD/YYYY" name="edate" id="datepicker" autocomplete="off" required>

    <label for="desc"><b>Event Description:</b></label>
    <input type="text" placeholder="Event Description" name="edesc" autocomplete="off" required>
	
    <label for="price"><b>Event Price:</b></label>
    <input type="number" placeholder="Event Price" name="eprice"  autocomplete="off" required>

    <label for="photo"><b>Event Photo:</b></label>
    <input type = "file" name = "userpic" /> 
                
      <hr>
    <button type="submit" class="registerbtn">Add Event</button>
  </div>
</form>