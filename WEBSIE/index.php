<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apartment";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT roomNo FROM apartment_tbl";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {

    $roomNo_arr[] = array(
        'roomNo' => $row['roomNo'], 
      );


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      .firstfloor_active{display:none}
      .secondfloor_active{display:none}
      #firstfloor{cursor:pointer}
      #secondfloor{cursor:pointer}
   
  </style>
</head>
<body>
    <div class="container">
    <div class="jumbotron text-center">
  <h1>Paramshree Apartment</h1>
  <p>Pay maintenance online through debit card</p>
</div>

    <table border='1' class='table'>
        <thead>
            <tr>
                <td>Room No</td>
                <td>Name</td>
                <td>Amount</td>
                <td>Pay</td> 
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            <tr class='bg-danger text-white' id='firstfloor'>
                <td colspan='5'>First Floor</td>
            </tr>
         
            <tr class='firstfloor_active trow'>
                <form action="pay2.php" method='POST'>
                <td> 101  <input type="hidden" name='roonum' value='101'></td>
                <td>Mr. Vishal <input type="hidden" name='mname' value='Mr. Vishal'></td>
                <td>800/- <input type="hidden" name='amt' value='800'></td>

                
              
              
                <?php 
                   $is101 = 'false';     
                foreach($roomNo_arr as $r) {
                 
                    if($r['roomNo'] == 101){
                      
                        $is101 = 'true';     
                    
                    } 
                }

                

                if($is101 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-secondary' disabled></td>";  
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';  
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-success'></td>";  
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';  
                }

                
                ?>   
               
                </form>
            </tr>
            <tr class='firstfloor_active trow'>
          <form action="pay2.php" method='POST'>
                <td>102 <input type="hidden" name='roonum' value='102'></td>
                <td>Mr. Mathews <input type="hidden" name='mname' value='Mr. Mathews'></td>
                <td>800/- <input type="hidden" name='amt' value='800'></td>
                
                <?php 
                $is102 = 'false';     
                foreach($roomNo_arr as $r) {
                 
                    if($r['roomNo'] == 102){
                      
                        $is102 = 'true';     
                    
                    } 
                }

                

                if($is102 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-secondary' disabled></td>";  
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';  
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-success'></td>";  
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';  
                }

                
                ?>   
               
                </form>
            </tr>
            <tr class='firstfloor_active trow'>
          <form action="pay2.php" method='POST'>
                <td>103 <input type="hidden" name='roonum' value='103'></td>
                <td>Mr. John <input type="hidden" name='mname' value='Mr. John'></td>
                <td>800/- <input type="hidden" name='amt' value='800'></td>
              
                <?php 
                $is103 = 'false';     
                foreach($roomNo_arr as $r) {
                 
                    if($r['roomNo'] == 103){
                      
                        $is103 = 'true';     
                    
                    } 
                }

                

                if($is103 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-secondary' disabled></td>";  
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';  
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-success'></td>";  
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';  
                }

                
                ?>   
                </form>
            </tr>
            <tr class='firstfloor_active trow'>
          <form action="pay2.php" method='POST'>
                <td>104 <input type="hidden" name='roonum' value='104'></td>
                <td>Mr. Kennedy <input type="hidden" name='mname' value='Mr. Kennedy'></td>
                <td>800/- <input type="hidden" name='amt' value='800'></td>
                <?php 
                $is104 = 'false';     
                foreach($roomNo_arr as $r) {
                 
                    if($r['roomNo'] == 104){
                      
                        $is104 = 'true';     
                    
                    } 
                }

                

                if($is104 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-secondary' disabled></td>";  
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';  
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-success'></td>";  
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';  
                }

                
                ?>   
                </form>
            </tr>
            <tr class='firstfloor_active trow'>
          <form action="pay2.php" method='POST'>
                <td>105 <input type="hidden" name='roonum' value='105'></td>
                <td>Mr. William <input type="hidden" name='mname' value='Mr. William'></td>
                <td>800/- <input type="hidden" name='amt' value='800'></td>
                <?php 
                $is105 = 'false';     
                foreach($roomNo_arr as $r) {
                 
                    if($r['roomNo'] == 105){
                      
                        $is105 = 'true';     
                    
                    } 
                }

                

                if($is105 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-secondary' disabled></td>";  
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';  
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-success'></td>";  
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';  
                }

                
                ?>   
                </form>
            </tr>
            <tr class='firstfloor_active trow'>
          <form action="pay2.php" method='POST'>
                <td>106 <input type="hidden" name='roonum' value='106'></td>
                <td>Mr. David <input type="hidden" name='mname' value='Mr. David'></td>
                <td>800/- <input type="hidden" name='amt' value='800'></td>
                <?php 
                $is106 = 'false';     
                foreach($roomNo_arr as $r) {
                 
                    if($r['roomNo'] == 106){
                      
                        $is106 = 'true';     
                    
                    } 
                }

                

                if($is106 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-secondary' disabled></td>";  
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';  
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='payit' class='btn btn-success'></td>";  
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';  
                }

                
                ?>   
                </form>
            </tr>


            <tr class='bg-danger text-white' id='secondfloor'>
                <td colspan='5'>Second Floor</td>
            </tr>
         
            <tr class='secondfloor_active trow'>
                <td>101</td>
                <td>Mr. Vishal</td>
                <td><input type="submit" value='Pay Now' name='payit' class='btn btn-success'></td>
                <td><div class="btn btn-danger disabled " >Unpaid</div></td>
            </tr>
            <tr class='secondfloor_active trow'>
                <td>102</td>
                <td>Mr. Pradeep</td>
                <td><input type="submit" value='Pay Now' name='payit' class='btn btn-success'></td>
                <td><div class="btn btn-danger disabled" >Unpaid</div></td>
            </tr>
            <tr class='secondfloor_active trow'>
                <td>103</td>
                <td>Mr. Michael</td>
                <td><input type="submit" value='Pay Now' name='payit' class='btn btn-success'></td>
                <td><div class="btn btn-danger disabled" >Unpaid</div></td>
            </tr>
            <tr class='secondfloor_active trow'>
                <td>104</td>
                <td>Mr. Parab</td>
                <td><input type="submit" value='Pay Now' name='payit' class='btn btn-success'></td>
                <td><div class="btn btn-danger disabled" >Unpaid</div></td>
            </tr>
            <tr class='secondfloor_active trow'>
                <td>105</td>
                <td>Mr. Sachin</td>
                <td><input type="submit" value='Pay Now' name='payit' class='btn btn-success'></td>
                <td><div class="btn btn-danger disabled" >Unpaid</div></td>
            </tr>
            <tr class='secondfloor_active trow'>
                <td>106</td>
                <td>Mr. Pillai</td>
                <td><input type="submit" value='Pay Now' name='payit' class='btn btn-success'></td>
                <td><div class="btn btn-danger disabled" >Unpaid</div></td>
            </tr>
          
        </tbody>
    </table>
    </div>
 
 





    <script src="script.js"></script>
</body>
</html>
