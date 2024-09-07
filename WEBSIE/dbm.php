<?php session_start();
error_reporting(0);
include('includes/connectdb.php');
if(isset($_POST['POST'])) 
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql ="SELECT id FROM transaction_table WHERE EmailId=:email and Password=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['bbdmsdid']=$result->id;
}
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
               <meta charset="UTF-8" />
               <meta name="viewport" content="width=device-width, initial-scale=1.0" />
               <title>Payment</title>
               <link rel="stylesheet" href="dbm.css">
</head>

<body>
               <div class="paymenting">
                              <div class="card_num">
                                             <form action="dbm.php" method="post">
                                                            <h2>Pay with Card</h2>
                                                            <label for="email">Enter your email id:</label><br />
                                                            <input type="text" id="email" name="email" required /><br>
                                                            <label for="phone">Phone:</label><br />
                                                            <input type="text" id="phone" name="phone" size="10" required /><br>
                                                            <label for="fname">Enter Card number:</label><br />
                                                            <input type="text" id="fname" name="fname" size="16" required /><br>
                                                            <label for="cv">CVV:</label><br>
                                                            <input type="text" id="cv" name="cv" maxlength="5" placeholder="mm/yy" required /><br>
                                                            <label for="lname">Name on Card:</label><br>
                                                            <input type="text" id="lname" name="lname" required /><br>
                                                            <label for="paymentMethod">Payment Method:</label><br>
                                                            <select id="paymentMethod" name="paymentMethod">
                                                                           <option value="Credit Card">Credit Card</option>
                                                                           <option value="Debit Card">Debit Card</option>
                                                            </select><br>
                                                            <button type="submit" class="pay" name="pay">Pay</button>
                                             </form>
                                             <!-- //Retrieve data from the HTML form

                                            //  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                                            // $email = $_POST['email'];
                                                            // $phone = $_POST['phone'];
                                                            // $card_number = $_POST['fname'];
                                                            // $cvv = $_POST['cv'];
                                                            // $name_on_card = $_POST['lname'];
                                                            // $payment_method = $_POST['paymentMethod'];

                                                            // Now you can process this data as needed, for example, store it in a database or perform some other action.

                                                            // // For demonstration purposes, let's just echo the received data
                                                            // echo "Email: $email <br>"; -->
                                            <!-- //                 echo "Phone: $phone <br>";
                                            //                 echo "Card Number: $card_number <br>";
                                            //                 echo "CVV: $cvv <br>";
                                            //                 echo "Name on Card: $name_on_card <br>";
                                            //                 echo "Payment Method: $payment_method <br>";
                                            //                 if (isset($_POST['pay'])) {
                                            //                                //your code4
                                            //                                echo "Hello";
                                            //                                header('Location:dbm.html?status=success'); //redirect to your html with status


                                            //                 }
                                            //  }
                                            //  -->
                              </div>
               </div>
</body>

</html>