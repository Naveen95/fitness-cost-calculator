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
                            </div>

                        <div class =form-group>

                                  <label for = 'Name'>BCAA Scoops per day</label>
                                    <select class='form-control' name='bcaa'>
                                        <option value='1'>5 Grams</option>
                                        <option value='2'>10 Grams</option>
                                        <option value='3'>15 Grams</option>
                                        
                                    </select>
                                </div>
                        
                        <div class =form-group>
                                <label for = 'Name'>No of Eggs (only whites)</label>
                                    <select class='form-control' name='egg'>
                                        <option value='1'>5 </option>
                                        <option value='2'>10 </option>
                                        <option value='3'>15 </option>
                                        
                                    </select>
                                </div>

                        <div class =form-group>
                                <label for = 'Name'>Post Workout</label>
                                    <select class='form-control' name='protein_powder'>
                                        <option value='whey'>Whey Protein </option>
                                        <option value='mass'>Mass Protein </option>
                                        
                                        
                                    </select>
                                </div>

                        <div class =form-group>
                                <label for = 'Name'>Protein Scoops</label>
                                    <select class='form-control' name='scoop'>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                        <option value='6'>6</option>
                                        <option value='7'>7</option>
                                        <option value='8'>8</option>

                                        
                                    </select>
                                </div>

                        <div class =form-group>
                                <label for = 'Name'>Chicken Breast</label>
                                    <select class='form-control' name='chicken'>
                                        <option value='1'>100 Gms </option>
                                        <option value='2'>200 Gms </option>
                                        <option value='3'>300 Gms</option>
                                        <option value='4'>400 Gms</option>
                                        <option value='5'>500 Gms </option>
                                        <option value='6'>600 Gms </option>
                                        <option value='7'>700 Gms</option>
                                        <option value='8'>800 Gms </option>
                                        <option value='9'>900 Gms </option>
                                        <option value='10'>1000 Gms</option>
                                        
                                    </select>
                                </div>

                        <div class =form-group>
                                <label for = 'Name'>Nuts and Dry fruits</label>
                                    <select class='form-control' name='nf'>
                                        <option value='small'>Small</option>
                                        <option value='medium'>Medium</option>
                                        <option value='large'>Large</option>

                                        
                                        
                                    </select>
                                </div>

                        
                       
                    </div>
                    <form class = 'center-block'>
                    <div class = form-group>
                    <button type='submit' class='btn center-block'>Check daily cost</button><br>
                    </div>
                    </form>

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
                 




<?php

if(isset($_POST['bcaa']) && isset($_POST['egg']) && isset($_POST['protein_powder']) && isset($_POST['scoop']) && isset($_POST['chicken']) && isset($_POST['nf']))
{
    include('connection.php');
   echo "<center>".$_POST['bcaa'];
}
?>


