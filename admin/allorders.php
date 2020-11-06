<?php
require '../config.php';
session_start();
if (!isset($_SESSION['admin_id'])) 
{
  echo '<script type="text/javascript"> alert("login first") </script>';
   echo '<script>window.location.href="adminlogin.php"</script>';
}


?>
<!doctype html!>
<html>
   <head>
     <title >Admin view page</title>
     <link rel="icon" type="image/png" href="../icons/1.png"/>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/adminstyle.css" />
    </head>
   <body>
      <h2>requests</h2>
      <a href="admindashboard.php"><button class="backbutton" type="button" name="backbutton"  >Back to Home</button></a>
      <table>
  <thead>
    <th>Order Id</th>
    <th>custumer Name</th>
    <th>Mobile_number</th>
    <th>address</th>
    <th>pincode</th>
    <th>description </th>
    <th>request time</th>
    <th>status</th>
    <th>amount</th>
    
  </thead>
  <tbody>
  <?php 
					$sql="SELECT * FROM `requests` ORDER BY `requests`.`req_id` DESC";
					$query=$con->query($sql);
					
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td ><?php echo $row['req_id']; ?></td>
                            <td><?php echo $row['User_name']; ?></td>
                            <td><?php echo $row['Mobile_number']; ?></td>
                            <td><?php echo $row['Address']; ?></td>
                            <td><?php echo $row['pincode']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['req_date_time']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><?php echo $row['amount']; ?></td>
                            
						</tr>
						<?php
						
					}
				?>
			</tbody>
        </table>
                </body>
                </html>
