<?php
   $page_heading="Profile";
   include('master.php');
   
?>
<html>
    <head> 
        <style>
            #content
            {
                padding: 2%;
                width: 96%;
              background-color: #B5BA96;
                height: 100%;
            }
            #what
            {
                 padding: 2%;
                width: 96%;
                   background-color: #B5BA96;
            }
            
           img.serv
           {
               float: left;
               margin-right:   15px;
               width: 150px;
               height: 150px;
           } 
          .para
           {
               width: 600px;
               font-size: 20px;
               text-decoration: blink;
           }
           .a1,.a2,.a3
           {
               margin-top: 20px;
               float: left;
              
               
           }
            
        </style>
    </head>
    <body>
        <div id="what" align="center">
            <hr></hr>
            <h1 style="color:#213E4A">What Makes Us Tick</h1>
           
            <h2> We love our Craft</h2>
            </br>
            
           
            <p class="para">  We take pride in the work we do and
            we do it with extra care. We love 
            using products that demonstrate 
            attention to detail and high levels
            of craftsmanship. These are the 
            products that we want to be building.</p>
            <hr> </hr>
            
        </div>
        <div id="content">
            
           
            <div class="a1">
                <p>
                    <img class="serv" src="images/relation1.png">
                <h2 style=" margin-left: 400px ;color:#213E4A"> * THE START OF A RELATIONSHIP</h2>
            <p style="font-size: 20px; margin-right: 100px; margin-left: 400px;font-weight: bold"> We start every project by building a relationship and
                partnering our clients. We believe that we're aiming 
                for the same goal and collaboration is the best way 
                to achieve this. We will listen, learn, understand 
                your needs and discover the story you want to tell 
                and who needs to listen.</p>
        </p>
            </div><hr>
        <div class="a2">
                <p>
                    <img class="serv" src="images/bulb.png">
            <h2 style=" margin-left: 400px;color:#213E4A"> * PROBLEM SOLVING</h2>
            <p style="font-size: 20px; margin-right: 100px; margin-left: 400px;font-weight: bold">We look at ways to solve
                your problem and design the best possible solution. Building on the
                information we have gathered we can find the most effective way to 
                communicate your message and get your brand noticed.</p>
        </p>
        </div><hr>
             <div class="a3">
                <p>
                    <img class="serv" src="images/ship.png">
            <h2 style=" margin-left: 400px; color:#213E4A"> * READY TO SHIP</h2>
            <p style="font-size: 20px; margin-right: 100px;margin-left: 400px;font-weight: bold"> It's time to
                set sail to
                your project and test it in the wild. We won't lose sight though - we will be monitoring
                your project, fixing bugs and reviewing its performance.</p>
            </p>
             </div><hr>
        </div>
        
    </body>
   
</html>
<?php
include 'foot.php';
?>