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


    <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class = 'row'>
                                <h1 align = 'center'>Supplement cost</h1>
                            </div>

                            <?php 

                            echo "<center>";

                            if (isset($_POST['supp_package'])) {
                                
                                $supp_package = $_POST['supp_package'];

                                include('connection.php');
                                   $sql = "SELECT * FROM price";
                                   $result = mysqli_query($connection,$sql);
                                    if ($result->num_rows > 0) {

                                         while ($row = $result->fetch_assoc()) {

                                            $bsp = $row['bsp'];
                                            $isp = $row['isp'];
                                            $asp = $row['asp'];
            
            


                                    }
                                }

                                if ($supp_package == 'b') {
                                    echo "<h3>The Supplement cost for a month will be ".$bsp."</h3>";
                                }
                                elseif ($supp_package == 'a') {
                                    echo "<h3>The Supplement cost for a month will be ".$isp."</h3>";
                                }
                                else
                                {
                                    echo "<h3>The Supplement cost for a month will be ".$asp."</h3>";
                                }
                             }
                            ?>

                        
                            </div>
                            </div>
                            </div>
                            </div>
    </body>