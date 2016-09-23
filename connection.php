<?php
							



							$host_name = 'localhost';
							$user = 'root';
							$password = '';
							$database = 'cost_calculator';

							$connection = mysqli_connect($host_name,$user,$password,$database);
										
										if ($connection) 
										{
											#echo "Connected to the DB <br>";
											
										}
										

										else
										{
											#echo "Not Connected".mysqli_error($connection);
										}


?>