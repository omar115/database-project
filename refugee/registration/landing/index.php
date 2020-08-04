<!DOCTYPE html>
<html>
<head>
<title>Welcome to Donation Page</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","refugee_camp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//sql query
  $sql = "SELECT SUM(drice) as rice,SUM(dwater) as water FROM donor_fund";
  $result = mysqli_query($con,$sql) or die("Bad Query : $sql");
  $row = mysqli_fetch_array($result);
  //Total Rice and Water received in Lifetime
  $rice = $row[0];
  $water = $row[1];
  $sql2 = "SELECT frice,fwater FROM fund where id='1'";
  $result2 = mysqli_query($con,$sql2) or die("Bad Query : $sql2");
  $row2 = mysqli_fetch_array($result2);
  //Total Rice and Water in Stock
  $frice = $row2[0];
  $fwater = $row2[1];
?>

<div class="container">
			<!-- freshdesignweb top bar -->
			<header>
				<h1>Welcome to Donation Page</h1>
            </header>       
     <!-- start header here-->
	<header>
<div id="fdw-pricing-table">
    <div class="plan plan1">
        <div class="header">Total Rice Received</div>
        <div class="price"><?php echo $rice?></div> 
		<div class="monthly">Lifetime</div>  
		<ul>
            <li><b></b></li>
            <li><b></b></li>
            <li><b></b></li>
			<li><b></b></li>			
        </ul>
        <a class="signup" href="donate/index.html">Donate Now</a>         
    </div>
    <div class="plan plan2 popular-plan">
        <div class="header">Total Water Received</div>
        <div class="price"><?php echo $water?></div>
        <div class="monthly">Lifetime</div>  
        <ul>
            <li><b></b></li>
            <li><b></b></li>
            <li><b></b></li>
			<li><b></b></li>			
        </ul>
        <a class="signup" href="donate/index.html">Donate Now</a>            
    </div>
    <div class="plan plan3">
        <div class="header">Total Rice Available</div>
        <div class="price"><?php echo $frice?></div>
        <div class="monthly">In Stock</div>
        <ul>
            <li><b></b></li>
            <li><b></b></li>
            <li><b></b></li>
			<li><b></b></li>			
        </ul>
        <a class="signup" href="donate/index.html">Donate Now</a>        
    </div>
    <div class="plan plan4">
        <div class="header">Total Water Available</div>
        <div class="price"><?php echo $fwater?></div>
        <div class="monthly">In Stock</div>
        <ul>
            <li><b></b></li>
            <li><b></b></li>
            <li><b></b></li>
			<li><b></b></li>			
        </ul>
        <a class="signup" href="donate/index.html">Donate Now</a>        
    </div> 	
</div>
	</header><!-- end header -->
    
</div>
</body>
</html>
