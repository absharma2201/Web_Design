<?php
   $page_heading="Contact Us";
   include('master.php');
   
?>

<?php
// define variables and set to empty values
$nameErr = $emailErr= $msgErr=$phnErr="";
$user_name = $user_email  = $user_msg = $user_phn = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $user_name=$_POST["user_name"];
    $user_phn=$_POST["user_phn"];
    $user_email=$_POST["user_email"];
  
    $user_msg=$_POST["user_msg"];
    
    
   if (empty($_POST["user_name"])) {
     $nameErr = "* Name is required";
   }
   else 
       {
     $name = test_input($_POST["user_name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                {
       $nameErr = "* Only letters and white space allowed"; 
     }
   }
    if (empty($_POST["user_phn"])) {
     $phnErr = "* Contact no. is required";
   }
   else 
       {
     $phone = test_input($_POST["user_phn"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9]{10}$/",$phone)) 
                {
       $phnErr = "* Only 10 digit contact number is allowed"; 
     }
   }
   if (empty($_POST["user_email"])) 
       {
     $emailErr = "* Email is required";
   } 
   else 
       {
     $email = test_input($_POST["user_email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
                     {
       $emailErr = "* Invalid email format"; 
     }
   }
  
   
   
   if (empty($_POST["user_msg"]))
       {
     $msgErr ="* Write message here.";
   } 
  // else 
    //   {
   //  $msgErr = test_input($_POST["user_msg"]);
//   }
  $con=  mysql_connect("mysql2.000webhost.com","a8589433_abhinav","gullu213");
mysql_select_db("a8589433_myblog",$con);
mysql_query("insert into abhinavsharma_blog values('','$user_name',$user_phn,'$user_email','$user_msg')");
   echo '<script>alert ("message sent !!");confirm ("you want to continue");</script>';
    }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>

<html>
    <head>
        <style>
            #content
            {
               
              background-color: #B5BA96;
              height: auto;
                font-size: 20px;
               
            }
            .input
            {
                font-size: 20px;
                font-size-adjust: inherit;
                width: 400px;
               
                border: 2px solid black;
                border-radius: 10px;
            }
            .tarea
            {
                font-size: 20px;
                font-size-adjust: inherit;
                width: 400px;
             
                border: 2px solid black;
                border-radius: 10px;
                
            }
            #msg_box
            {
                 padding: 50px;
                margin-left: 50px;
                float: left;
                height: 1000px;
            }
            #map_img
            {
               height: 1000px;
                margin-right: 50px;
                padding: 50px;
              
            }
            h5.error
            {
              color:#e4264e;  
            }
            
        </style>
       
    </head>
    <body>
       
        <div id="content" align="center" > 
            <div id="msg_box">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="fname" autocomplete="off">
            <p><h2>For any queries or feedback:-</h2></p>
        
            <table>
                
                <tr>
                    <td>
                <tr><label for="user_name">Name :</label></tr></br><tr><input type="text" class="input" name="user_name" placeholder="username" ></tr>
            </br> <tr class="error"><?php echo $nameErr ?></tr>
            </br></br>
                    </td>
                </tr>
                <tr>
                    <td>
                <tr><label for="user_phn">Phone No. :</label></tr></br><tr><input type="tel" class="input" name="user_phn" placeholder="contact number" ></tr>
            </br> <tr class="error"><?php echo $phnErr ?></tr>  
            </br></br>
                    </td>
                </tr>
                 <tr>
                    <td>
                 <tr><label for="user_email">Email :</label></tr></br><tr><input type="email" class="input" name="user_email" placeholder="email - id" ></tr>
            </br>  <tr class="error"><?php echo $emailErr ?></tr>
            </br></br>
                    </td>
                </tr>
               
                 <tr>
                    <td>
                 <tr><label for="user_msg">Message (*300 words) :</label></tr></br><tr><textarea class="tarea" style="font-size: 20px; resize: none" rows="10" cols="40" name="user_msg" placeholder="message box" value="type message here!" ></textarea></tr>
            </br><tr class="error"><?php echo $msgErr ?></tr></br></br>
                    </td>
            </tr>
            </table>
        <input type="submit" value='' style="width: 200px;background: url('images/contact.jpg'); height: 40px; border-radius: 25px; font-size: 30px">
        </form>
            </div>
            <div id="map_img">
                <script>
                function respond(ch)
                {
                    if(ch=='self')
                    window.location="about.php";
                if(ch=='map')
                    window.location="https://www.google.co.in/maps/place/Vellore+Institute+of+Technology/@12.8993087,79.1183423,12z";
                }
                </script>
                <input type="image" width="150px" height="200px" src="images/digg.jpg" style="border:3px solid black" onclick="respond('self')">
                </br>
                </br>
                </br>
                <input type="image" src="images/map.jpg" width="500px" height="300px" style="border:3px solid black" onclick="respond('map')">
                    </br></br>
                <img src="images/tele.jpg" width="100px" height="100px"><b style="font-size: 50px; text-align: center">  0091-8124340128 </b>
                
            </div>
        </div>
        
    </body>
</html>

<?php
include 'foot.php';
?>