<html>
   <head>
      <title>BooksBasket</title> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
     
   </head>
   <body>
   <div class="row" style= height:"50%">
  <img src="https://images.sharefaith.com/images/3/1324515284475_82/img_mouseover3.jpg"  height=170 width=1500> 
       
      </div>

      <div style="color:aliceblue;background-color:grey;" >
  <ul >
    <button type="button" id="b1" style="width:200px;height:40px;color:black;background-color:grey;">
      BOOKS
    </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button" id="b2" style="width:200px;height:40px;color:black;background-color:grey;">
      SEARCH
    </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
    <button type="button" id="b3" style="width:200px;height:40px;color:black;background-color:grey;">
      SHOPPINGCART
    </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- <button type="button" id="b4" style="width:200px;height:40px;color:black;background-color:grey;" >  <a href="login.php"  -->
    <a href="login.php" class="button" style="font: bold 11px Arial;width:200px;height:40px;
  text-decoration: none;
  background-color: grey;
  color: black;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;">login</a>
    
    </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button" id="b5" style="width:200px;height:40px;color:black;background-color:grey;">
      NEWUSER
    </button> 
  </ul>
</div>
<?php
error_reporting(E_ALL);
 $user="inapp";
 $psswd="inapp";
 /*
if($_POST["done"]){
 
  if($user==$_POST["name"] && $psswd==$_POST["psswd"]){
      echo "LOGED IN AS ".$_POST["name"];
  }
  else {
       echo ( "<h2 >Invalid username/Password</h2>");
  }

}*/

//database connection establishment

$con=mysqli_connect("localhost","root","inapp","myDB");
if(mysqli_connect_errno()){
    echo "FAILED CONNECTION:" .mysql_connect_error();
}
else{
  echo "sucess";
  
  if($_POST["done"]){
      $a = $_POST["name"];
      $b = $_POST["psswd"];
      $qs = "select * from user where username='{$a}' and password='{$b}' ";
     //exit();
     $result=$con->query($qs);
     if ($result->num_rows > 0) {
        echo "LOGED IN AS ".$_POST["name"];
     }
     else{
        echo ( "<h2 >Invalid username/Password</h2>");
        echo ($result);
     }
    }

  
  
}



?>
<h1>Login here!!</h1>
<form action = "<?php $_PHP_SELF ?>" method = "POST">
         UserName: <input type = "text" name = "name" />
         Password: <input type = "text" name = "psswd" />
         <input type = "submit" name="done" />
         <a href="registration.php">signup</a>
      </form>


   
   </body>
</html>

      
   