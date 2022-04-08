

<?php
function get_value($value)
		{
					 if (!function_exists('test_input')) {
						 function test_input($data)
						 {
						  $data = trim($data);
						  $data = stripslashes($data);
						  $data = htmlspecialchars($data);
						  //filter_var($address, FILTER_VALIDATE_EMAIL)
						  //filter_var($dirtyAddress, FILTER_SANITIZE_EMAIL);
						  return $data;
						 }	
					 }
						
					  if (isset($_REQUEST[$value]))
					  {
						$data_sent = test_input($_REQUEST[$value]);
						if($data_sent=="")
						{
							$data_sent = "N_A";
						}
					  }
					  else
					  {
						$data_sent = "N_A";
					  }
					  return $data_sent;
		}
					
					
		$name = get_value("name");

?>