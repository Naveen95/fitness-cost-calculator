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
                    <div class="col-md-6">
                        <div class = 'form-group center-block'>
                                <h1 align = 'center'>Leave a Message for us to get in touch ASAP</h1><br>
                                <div class= "form-group center-block">  

                                         <form name="contact_form" action="#" method="POST" enctype="multipart/form-data">
                                        <div class="form-group center-block">
                                            <label for="name">Your name:</label><br />
                                            <input id="name" class="input" name="name" type="text" value="" size="30" required/><br />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your email:</label><br />
                                            <input id="email" class="input" name="email" type="email" value="" size="30" required/><br />
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Your message:</label><br />
                                            <textarea id="message" class="input" name="message" rows="7" cols="30"required></textarea><br />
                                        </div>
                                        <input type = "submit" value="Send message"></input>
                                    </form>                     

                            </div>

                        <div class =form-group>

                                  
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
    </body>