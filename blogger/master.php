<html>
   <head>
      <title>Digvijayraj Singh</title>
      <link rel="stylesheet" type="text/css" href="master.css">
      <link rel="javascript" type="text/javascript" href="master.js">
     
   </head>

   <body>
       <div id="head">
       <div id="logo">
           <img src="images/digg.jpg" width="80px" height="90px"><b style="font-size: 50px; color: white; font-family: lucida calligraphy">Digvijay Raj</b>
       </div>
       <div id="nav" align="center">
           
           <table>
               <tr>
                   <td id="_home"><a href="index.php">Home</a></td>
                   <td id="_about"><a href="about.php">About</a></td>
                   <td id="_serv"><a href="services.php">Services</a></td>
                   <td id="_profile"><a href="profile.php">Profile</a></td>
                   <td id="_contact"><a href="contact.php">Contact</a></td>
                   
               </tr>
           </table>
               </div>
       </div>
       <div id="header">
           <?php
           echo $page_heading;
           ?>
           <div id="digi">
              </div>
          <?php
echo '<script>
interval =setInterval(function(){clock()},1000);
function clock()
{
d=new Date();
t=d.toLocaleString();
document.getElementById("digi").innerHTML=t;
}</script>';
?>
           </div>
       

   </body>
</html>