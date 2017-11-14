<!DOCTYPE html>
<html lang="en-US">

<head>
 <meta charset="UTF-8">
 <title>ORDER PAGE</title>
 <style>
 body {
  text-align: center;

 }
 table {
  border: 1px red solid;
  width: 45%;
  padding: 1px;
  text-align: left;
  margin: auto;
  border-spacing: 20px;
  border-radius: 7px;
  background-color: grey;
 }
 input[type=text], input[type=email] {
  padding: 5px 3px;
  border-radius: 5px;
  border: 1px solid grey;
 }
 input[type=submit] {
  background-color: green;
  border-radius: 10px;
  border: none;
  color: white;
  width: 25%;
  padding: 5px;
  text-align: center;
  margin: auto;
  
 }
 input[type=submit]:hover {
  background-color: purple;
  cursor: pointer;

 }
 td#sbmt{
 	text-align: center;
  
 }

 </style>
<body>
<h1>ORDER PAGE</h1><br><br>
<form action="#" autocomplete="off">
   <caption>Kindly fill the form:</caption>
<table>
 <tr>
  <td>First Name: <td>
  <td> <input type="text" name="first_name" autofocus  required></td>
 </tr>
 <tr>
  <td>Middle Name: <td>
  <td> <input type="text" name="middle_name"></td>
 </tr>
 <tr>
  <td>Last Name: <td>
  <td> <input type="text" name="last_name" placeholder="Also Surname" required></td>
 </tr>
 <tr>
  <td>Address: <td>
  <td> <input type="text" name="address" required></td>
 </tr>
 <tr>
  <td>Phone no: <td>
  <td> <input type="text" name="phone_no" required></td>
 </tr>
 <tr>
  <td>Birthday: <td>
  <td> <input type="text" name="birthday"></td>
 </tr>
 <tr>
  <td>E-mail: <td>
  <td> <input type="email" name="email" required></td>
 </tr>
 <tr>
  <td  id="sbmt" colspan="3"><input type="submit" value="SUBMIT"></td>
 </tr>
 </table>
</form>
</body>
</html>