<html>
<head>
    <title>Price Set </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Price Set</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
    <form name="price_set" method = "POST" action="price_set.php">

<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align='center'>Set the prices for Various items</h1>


                        <div class =form-group>
                        <label for = 'bcaa'>BCAA 5gms Cost</label>
                        <input type = 'text' class = 'form-control' name = 'bcaa' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Egg white Cost(5 peices)</label>
                        <input type = 'text' class = 'form-control' name = 'egg' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of 1 Scoop whey Protein</label>
                        <input type = 'text' class = 'form-control' name = 'whey' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of 1 Scoop mass Protein</label>
                        <input type = 'text' class = 'form-control' name = 'mass' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of 100 Gms of Chicken Breast</label>
                        <input type = 'text' class = 'form-control' name = 'chicken' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of small Nuts and Dry Fruits</label>
                        <input type = 'text' class = 'form-control' name = 'snf' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of medium Nuts and Dry Fruits</label>
                        <input type = 'text' class = 'form-control' name = 'mnf' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of Large Nuts and Dry Fruits</label>
                        <input type = 'text' class = 'form-control' name = 'lnf' required>
                    </div>

                     <div class =form-group>
                        <label for = 'Name'>Cost of Beginner Supplement package</label>
                        <input type = 'text' class = 'form-control' name = 'bsp' required>
                    </div>

                     <div class =form-group>
                        <label for = 'Name'>Cost of intermediate supplement package</label>
                        <input type = 'text' class = 'form-control' name = 'isp' required>
                    </div>

                     <div class =form-group>
                        <label for = 'Name'>Cost of advanced supplement package</label>
                        <input type = 'text' class = 'form-control' name = 'asp' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of weight loss training</label>
                        <input type = 'text' class = 'form-control' name = 'wlt' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of fat loss training</label>
                        <input type = 'text' class = 'form-control' name = 'flt' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of strengthening training</label>
                        <input type = 'text' class = 'form-control' name = 'st' required>
                    </div>

                    <div class =form-group>
                        <label for = 'Name'>Cost of personal training</label>
                        <input type = 'text' class = 'form-control' name = 'pt' required>
                    </div>

                     

                    


                     <div class = form-group>
                    <button type='submit' class='btn center-block'>Set the price</button><br>
                    </div>

                    
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>



<?php


if (isset($_POST['bcaa']) && isset($_POST['egg']) && isset($_POST['whey']) && isset($_POST['mass']) && isset($_POST['chicken']) && isset($_POST['snf']) && 
    isset($_POST['mnf']) && isset($_POST['lnf']) && isset($_POST['bsp']) && isset($_POST['isp']) && isset($_POST['asp']) && isset($_POST['wlt']) && 
    isset($_POST['flt']) && isset($_POST['st']) && isset($_POST['pt']))

     {
    




$bcaacost = $_POST['bcaa'];
$eggcost = $_POST['egg'];
$wheycost = $_POST['whey'] ;
$masscost = $_POST['mass'] ;
$chickencost = $_POST['chicken'] ;
$snfcost = $_POST['snf'];
$mnfcost = $_POST['mnf'];
$lnfcost = $_POST['lnf'];
$bspcost = $_POST['bsp'];
$ispcost = $_POST['isp'];
$aspcost = $_POST['asp'];
$wltcost = $_POST['wlt'];
$fltcost = $_POST['flt'];
$stcost = $_POST['st'];
$ptcost = $_POST['pt'];

$id= 1;


 include 'connection.php';


if (!empty($bcaacost) && !empty($eggcost) && !empty($wheycost) && !empty($chickencost) && !empty($snfcost) && !empty($mnfcost) && !empty($lnfcost) && 
    !empty($bspcost) && !empty($ispcost) && !empty($aspcost) && !empty($wltcost) && !empty($fltcost) && !empty($stcost) && !empty($ptcost) && !empty($masscost)) 
{


       

        $sql = 'SELECT * FROM `price`' ;
        $result  = mysqli_query($connection,$sql);

       /* */
        if (mysqli_num_rows($result) <= 0) {

            $sql1 = "INSERT INTO `cost_calculator`.`price` (`id`,`bcaa`, `egg`, `whey`, `mass`, `chicken`, `nfsmall`, `nfmedium`, `nflarge`, `bsp`, `isp`, `asp`, `wlt`, 
                `flt`, `st`, `pt`) 
           VALUES ('$id','$bcaacost' , '$eggcost' , '$wheycost' , '$masscost' , '$chickencost' , '$snfcost' , '$mnfcost' , '$lnfcost' , '$bspcost' , '$ispcost' , '$aspcost' ,
                '$wltcost' , '$fltcost' , '$stcost' , '$ptcost')";
            $add_price = mysqli_query($connection ,$sql1);

            if ($add_price) {
                header('index.html');
            echo "Data added to the data";
        }

        else{

            echo "Error Occured".mysqli_error($connection);
        }

           

            
            
        }
        else
        {

            $sql2 = "UPDATE `cost_calculator`.`price` SET bcaa = $bcaacost , egg = $eggcost, whey = $wheycost, mass = $masscost, chicken = $chickencost, nfsmall = $snfcost, 
            nfmedium = $mnfcost, nflarge =$lnfcost, bsp = $bspcost, isp = $ispcost, asp = $aspcost
             , wlt = $wltcost ,flt = $fltcost , st =$stcost  , pt = $ptcost WHERE id = '1'";

            $update_price = mysqli_query($connection ,$sql2);

            if ($update_price) {
                header('index.html');
            
        }

        else{

            echo "Error Occured".mysqli_error($connection);
        }


        }


}

}







?>