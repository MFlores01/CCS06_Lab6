<!DOCTYPE html> 
<html>
    <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  padding: 20px;
}

h1 {
  color: #333333;
  text-align: center;
  margin-top: 0;
}

form {
  background-color: #ffffff;
  border: 2px solid #cccccc;
  padding: 20px;
  width: 70%;
  margin: 0 auto;
  max-width: 600px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
select,
input[type="color"],
input[type="range"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  font-size: 16px;
  border: 1px solid #cccccc;
  border-radius: 4px;
}

input[type="date"]::-webkit-inner-spin-button {
  display: none;
}

input[type="date"]::-webkit-calendar-picker-indicator {
  color: #333333;
  font-size: 16px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

.user-data {
  background-color: #ffffff;
  border: 2px solid #cccccc;
  padding: 20px;
  margin-top: 20px;
}
</style>
    

<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    echo "Birthdate: " . $_POST['birthdate'];
    echo "<hr />";
    echo "Email Address: " . $_POST['email'];
    echo "<hr />";
    echo "Program: " . $_POST['program'];
    echo "<hr />";
    echo "Favorite Color: " . $_POST['favorite_color'];
    echo "<hr />";
    echo "Superpower Level: " . $_POST['superpower_level'];
    echo "<hr />";
    // Debug
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>

<h1>User Profile Form</h1>
<form method="POST" action="profile-form.php">
Name: <input type="text" name="complete_name" style="width:100px"/><br />
Birthdate: <input type="date" name="birthdate" style="width:100px"/><br />
Email Address: <input type="email" name="email" style="width:100px"/><br />
Program:
<select name="program" style="width:100px">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
</select>
<br />
Favorite Color: <input type="color" name="favorite_color" style="width:100px"/><br />
Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" style="width:100px"/><br />
<button>Submit</button>
</form>


<?php
endif;
?>

