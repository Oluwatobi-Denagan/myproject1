
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <title>eMaxie</title>
  <style>
   html {
    width: 100%;
   }
   body {
   	position: relative;
   	width: 1200px;
   	margin: 0px auto;
   	display: block; 
   	text-align: center;
   	color: #FFFFFF;
   	font-family: arial;
   	font-weight: bold;

   }
   header {
   	background-color: #8B0000;
   	border: 0px solid green;
   	padding: 1px ;
   	width: 1200px;
   	height: 100px;
   	color: #FFFFFF;
    display: block;
    line-height: 0.3;
   }	
   nav {
  	border: 0px solid red;
  	background-color: #000000;
  	padding: 1px;
  	width: 1200px;
  	height: 50px;

   }
   nav ul li {
  	display: inline;
  	margin: auto;

   }
   ul#asd li a {
   	background-color: unset;
   	color: green;
   	padding: 3px;
   	text-decoration: underline;
    border: none;
   	margin: auto;
   }
   ul#asd li a:hover {
    background-color: unset;
    cursor: pointer;
    color: green;
    border: none;
   }
   ul#asd li a:visited {
    background-color: unset;
    cursor: pointer;
    color: green;
    border: none;
   }
   ul li a {
    background-color: #FF0000;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 30px 0px;
    margin: auto;
    border: 1px solid white;
   }
   ul li a:hover {
   	background-color: white;
   	cursor: pointer;
   	color: #FF0000;
   	border: 1px solid #FF0000;
   }
   .dropdown {
   	position: relative;
   	display: inline-block;
   	z-index: 1;
   }
   .dropdown-content {
   	display: none;
   	position: absolute;
   	background-color: white;
   	width: 100%;
   	border-radius:  30px 0px 30px 0px;
   	border: 1px solid #FF0000;

   }
   .dropdown-content a {
   	border-radius:  30px 0px 30px 0px;
    color: #FF0000;
    padding: 10px 20px;
    text-decoration: none;
    display: block;
    
	}
	.dropdown:hover .dropdown-content {
    display: block;
	}
    .dropdown-content a:hover {
     background-color: #FF0000;
     color: white;
 	}
 	ul#items li {
 	font-weight: bold;
 	list-style-type: square;
 	}
    article {
     border: 0px solid yellow;
     height: 360px;
     width: 300px;
     position: relative;
     padding: 1px;
     background-color: #FAEBD7;
     text-align: left;
     color: #FF0000;
     line-height: 1.2;
   }
    section {
   	 border: 0px solid black;
   	 height: 360px; 
   	 width: 600px;
   	 position: absolute;
  	 top: 154px;
  	 left: 302px;
   	 padding: 1px;
   	 background-color: #000000;
     line-height: 1.2;
    }
    aside {
     border: 0px solid black;
   	 height: 360px;
   	 width: 298px;
   	 padding: 1px;
   	 background-color: #FAEBD7;
  	 position: absolute;
  	 top: 154px;
  	 left: 902px;
     text-align: left;
     color: #FF0000;
     line-height: 1.2;
    }
    h1{
     font-family: "courier new";
     font-size: 44px; 
    }
    h2 {
     text-align: center;
     color: #FFFFFF;
     font-style: italic;
     border-radius: 20px;
     background-color: #8B0000;
    }
    footer {
     border: 0px solid black;
     height: 80px;
     width: 1200px;
     padding: 1px;
     background-color: #8B0000;
     font-family: arial;
     display: block;
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
  background-color: green;
  cursor: pointer;

  </style>
</head>
<!--work on stying the font size and the pix as well-->
<body>
<header>
<h1>eMaxie  I.T SERVICES</h1>
<h2>A Home For Computer Sales and Services</h2>
 
</header>
<nav>
 <ul>
  <li><a href="index.php">HOME</a></li>
  <div class="dropdown">
  <li><a href="#">SERVICES</a></li>
   <div class="dropdown-content">
    <a href="order.php">ORDER</a>
    <a href="check_status.php">CHECK STATUS</a>	
   </div>
  </div>
  <li><a href="about_us.php">ABOUT US</a></li>
  <li><a href="contact_us.php">CONTACT US</a></li>
 </ul>
</nav>
<article>
<h2>OUR SERVICES</h2>
<ul id="items">
 <li>COMPUTER SALES (NEW AND USED)</li><br>
 <li>COMPUTER REPAIRS AND MAINTENANCE</li><br>
 <li>MAC/APPLE CENTRE</li><br>
 <li>GRAPHIC DESIGN</li><br>
 <li>WALL ART & DECORATION</li><br>
 <li>SOFTWARE DEVELOPMENT</li><br>
 <li>e-REGISTRATION</li>
</ul>
</article>
<section>
<h2>CHECK STATUS PAGE</h2>
<img src="/images/computer_pix.jpg" alt="computer_pix" style="width:128px;height:128px;">
<p>Fill in the details below to check status of your product<br><br>
<form action="#" autocomplete="off">
JOB ORDER NO:<br><br> 
<input type="text" name="check_status" autofocus required><br><br>
<input type="submit" value="CHECK STATUS">
</form>
</p>
</section>

<aside>
<h2>HOW WE WORK</h2>
<ul id="asd">
 <li>Make any order of you want (whether you want to buy a new product or repair your system)
 and you will be replied within 24hrs working time.<br>
 <span style="color: black">NB: We also do home delivery.</span><br>
 <a href="order.php">CLICK TO ORDER NOW</a>
 </li>
 <br>
 <li>You an also check the status of the product you ordered or that is under repair.
 <p><a href="check_status.php">CLICK TO CHECK PRODUCT STATUS</a></p>
 </li>
</aside>
<footer>
<pre>ADDRESS:
OAU New Market, Zone C, Block 10, Shop 7,
Behind Dove Phone World, OAU, Ile-Ife, Osun State.
TEL: 07067907835, 07082698340, 08157889524, 08153623409
</pre>
<kbd>&copy; COPY RIGHTS RESERVED. 2017</kbd>
</footer>	
</body>

</html>

