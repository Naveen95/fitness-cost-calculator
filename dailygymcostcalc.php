<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <form name="daily_gym_cost" method = "POST" action="dailygymcostcalc.php">

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.html">
                        Fitness Cost Calculator
                    </a>
                </li>
                <li>
                    <a href="dailygymcost.php">Daily Gym Cost</a>
                </li>
                <li>
                    <a href="suppproductcost.php">Supplement Product Cost</a>
                </li>
                <li>
                    <a href="trainingplans.php">Personalised training Plans</a>
                </li>
                                <li>
                    <a href="price_set.php">Price set</a>
                </li>
                <li>
                    <a href="contact.php">Contact us</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                
       
</div>

                        <div class = 'row'>
                                <h1 align = 'center'> Daily Intake Cost </h1>
                                <h3>


                                <?php

if(isset($_POST['bcaa']) && isset($_POST['egg']) && isset($_POST['protein_powder']) && isset($_POST['scoop']) && isset($_POST['chicken']) && isset($_POST['nf']))
{
   include('connection.php');
   $bcaa = $_POST['bcaa'];
   $egg =  $_POST['egg'];
   $protein_powder = $_POST['protein_powder'];
   $scoop = $_POST['scoop'];
   $chicken = $_POST['chicken'];
   $nf =  $_POST['nf'];

   $sql = "SELECT * FROM price";
   $result = mysqli_query($connection,$sql);
   if ($result->num_rows > 0) {

   		while ($row = $result->fetch_assoc()) {
   			
   			$bcaa_price = $row['bcaa'];
   			$egg_price = $row['egg'];
   			$whey_price = $row['whey'];
   			$mass_price = $row['mass'];
   			$chicken_price = $row['chicken'];
   			$nfsmall_price = $row['nfsmall'];
   			$nfmedium_price = $row['nfmedium'];
   			$nflarge_price = $row['nflarge'];


   		}

   		echo "<center>";

   		echo "<h3>Bcaa price  per day will be ".($bcaa*$bcaa_price)," INR<br></h3>";
   		echo "Egg price per day will be ".($egg*$egg_price)," INR<br>";

   		if($protein_powder == 'whey'){
   			echo "<h3>The price of whey per day will be ".($scoop*$whey_price)," INR<br></h3>";
   		}
   		elseif ($protein_powder == 'mass') {

   			echo "<h3>The price of mass per day will be ".($scoop*$mass_price)," INR<br></h3>";
   			
   		}

   		echo "<h3>Chicken price  per day will be ".($chicken*$chicken_price)," INR<br></h3>";

   		if ($nf == 'small') {

   			echo "The Nuts and fruits price per day will be ".$nfsmall_price," INR";
   			
   		}
   		elseif ($nf == 'medium') {
   			echo "The Nuts and fruits price per day will be ".$nfmedium_price," INR";
   		}
   		else{
   			echo "The Nuts and fruits price per day will be ".$nflarge_price," INR";

   		}






   			
   		
   }

}
?></h3>



                            </div>


                        
                       
                    </div>


                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</form>

</body>

</html>
                 












