<?php
    session_start();
    require_once "config.php";

    $userid = $_SESSION["userid"];
    if($userid!=NULL){
        $getdata = mysqli_query($link,"SELECT * FROM users WHERE id='$userid'");
        $userdata = mysqli_fetch_array($getdata);
?>

<html>
  <body>
    
      <style type="text/css">
     table {
       border-collapse: collapse;
       width: 95%;
       color: #eb4034;
       font-family: Monospace;
       font-size: 25px;
       text-align: left;
       margin: auto;
       
     }
       th{
       background: -webkit-linear-gradient(bottom left, #4199fe, #74b4fe);
       background: -moz-linear-gradient(bottom left, #4199fe, #74b4fe);
       background: -o-linear-gradient(bottom left, #4199fe, #74b4fe);
       background: linear-gradient(to top right, #4199fe, #74b4fe);
                color: white;
                padding: 20px 10px 20px 40px;
              }
       tr:nth-child(even){
         background-color: #ededed;
       }
       td{
         padding: 10px 10px 10px 40px;
       }
       body{
    margin: 0;
     padding: 0;
     font-family: 'Roboto', sans-serif;
}
 .navigation {
     height: 55px;
     background: linear-gradient(45deg, #4199fe, #74b4fe);
}
 .brand {
     position: absolute;
     padding-left: 20px;
     float: left;
     line-height: 55px;
     text-transform: uppercase;
     font-size: 1.4em;
}
 .brand a, .brand a:visited {
     color: #ffffff;
     text-decoration: none;
}
 .nav-container {
     max-width: 1000px;
     margin: 0 auto;
}
 nav {
     float: right;
}
 nav ul {
     list-style: none;
     margin: 0;
     padding: 0;
}
 nav ul li {
     float: left;
     position: relative;
}
 nav ul li a,nav ul li a:visited {
     display: block;
     padding: 0 20px;
     line-height: 55px;
     color: #fff;
     background: #262626 ;
     text-decoration: none;
}
 nav ul li a{
     background: transparent;
     color: #FFF;
}
 nav ul li a:hover, nav ul li a:visited:hover {
     background: #2581DC;
     color: #ffffff;
}
 .navbar-dropdown li a{
     background: #2581DC;
}
 nav ul li a:not(:only-child):after, nav ul li a:visited:not(:only-child):after {
     padding-left: 4px;
     content: ' \025BE';
}
 nav ul li ul li {
     min-width: 190px;
}
 nav ul li ul li a {
     padding: 15px;
     line-height: 20px;
}
 .navbar-dropdown {
     position: absolute;
     display: none;
     z-index: 1;
     background: #fff;
     box-shadow: 0 0 35px 0 rgba(0,0,0,0.25);
}
/* Mobile navigation */
 .nav-mobile {
     display: none;
     position: absolute;
     top: 0;
     right: 0;
     background: transparent;
     height: 55px;
     width: 70px;
}
 @media only screen and (max-width: 800px) {
     .nav-mobile {
         display: block;
    }
     nav {
         width: 100%;
         padding: 55px 0 15px;
    }
     nav ul {
         display: none;
    }
     nav ul li {
         float: none;
    }
     nav ul li a {
         padding: 15px;
         line-height: 20px;
         background: #262626;
    }
     nav ul li ul li a {
         padding-left: 30px;
    }
     .navbar-dropdown {
         position: static;
}
 @media screen and (min-width:800px) {
     .nav-list {
         display: block !important;
    }
}
 #navbar-toggle {
     position: absolute;
     left: 18px;
     top: 15px;
     cursor: pointer;
     padding: 10px 35px 16px 0px;
}
 #navbar-toggle span, #navbar-toggle span:before, #navbar-toggle span:after {
     cursor: pointer;
     border-radius: 1px;
     height: 3px;
     width: 30px;
     background: #ffffff;
     position: absolute;
     display: block;
     content: '';
     transition: all 300ms ease-in-out;
}
 #navbar-toggle span:before {
     top: -10px;
}
 #navbar-toggle span:after {
     bottom: -10px;
}
 #navbar-toggle.active span {
     background-color: transparent;
}
 #navbar-toggle.active span:before, #navbar-toggle.active span:after {
     top: 0;
}
 #navbar-toggle.active span:before {
     transform: rotate(45deg);
}
 #navbar-toggle.active span:after {
     transform: rotate(-45deg);
}
 
       </style>
       
        <section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#">WALLET CONNECT</a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="navbar-toggle" href="#"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="wallet.php">Check Wallets options</a>
        </li>
        <li>
          <a href="wallet.php">User input page</a>
        </li>
        <li>
          <a href="logout.php">Log out</a>
        </li>
        <li>
      <!--    <a href="signup.php">Create new admin</a>-->
        </li>
      </ul>
    </nav>
  </div>
</section>

    <div style="text-align: center; text-transform:uppercase; font-size:lager">
    <h3> Welcome <?php echo $userdata['username']; ?> </h3>
    <p> Registred at <?php echo $userdata['created_at']; ?> </p>
    </div>
    
    
 <table>
      <tr>
        <th>User input</th>
      </tr>
      
<?php
$user_input = $_POST ['phase'];
$Servername = "127.0.0.1";
$dBusername = "u191827762_fixdapps";
$dBPassword = "123Admin...";
$dBname = "u191827762_fixdapps";



$conn = mysqli_connect($Servername, $dBusername, $dBPassword, $dBname);
if (!$conn) {die ("Connection failed:") ;}else{
$sql = "SELECT * FROM client_phase";};

$result = $conn->query($sql);

if($result ->num_rows > 0) {
  
  while ($row = $result->fetch_assoc()){
    echo "<tr><td>" .$row["phase"] ."<br>" ."</td></tr>";
  }}
  else {
    echo "No Result";
  }
  mysqli_close($conn);
  ?>
    </table>
    
 </body> 
</html>

<?php } else {
    echo "You are not logged in" ." <a href= \"login.php\">Login<a>";
} ?>