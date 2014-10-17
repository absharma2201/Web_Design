<?php
   $page_heading="Welcome !";
   include('master.php');
   
?>
<html>
    <head>
        <style>
            #content
            {
               background-color: #B5BA96;
                width:100%;
                height: 1000px;
            }
            #intro
            {
               
                float: left;
               padding: 20px;
               margin-left: 100px;
            }
            p{
                font-size: 20px;
                font-family: lucida calligraphy;
                width:600px;
                line-height: 30px;
                color: #304E5A;
                 font-weight: bold;
            }
            
            
            #link_img
            {
                
                margin-right: 200px;
                padding: 50px;
                float: right;
            }
            td
            {
                padding: 10px;
                
            }
          
            
          
        </style>
           
    </head>
    <body>
        <div id="content">
            <div id="intro">
        <p>
           
            Welcome to my Blog ,here I share my ideas on working with HTML , 
            ASP.net , PHP , Javascript and a lot of other "geeky" stuff. 
            I'm Digvijayraj Singh and 
            most of the tutorials and code that I share are used in my own projects. 
            Through the years, I have received so much support and guidance from other
            webmasters that I started the Web Development Blog to in turn help others.
            </br>
            I'll share my views on web hosting issues, various online services and other assorted
            web programming topics. From time to time, I'll invite some of my friends to guest post
            and as always, everyone is welcome to join the discussion.
        </div>
        <div id="link_img">
            <script>
                function respond(ch)
                {
                    if(ch=='html')
                    window.location="http://www.w3schools.com/html/default.asp";
                if(ch=='asp')
                    window.location="http://www.w3schools.com/aspnet/default.asp";
                if(ch=='php')
                    window.location="http://www.w3schools.com/php/default.asp";
                if(ch=='js')
                    window.location="http://www.w3schools.com/js/default.asp";
                }
                </script>
                <table>
                    <tr>
                        <td style="border: 2px solid #e4264e"><input type="image" width="150px" height="150px" src="images/HTML.png" onclick="respond('html')"></td>
                        <td style="border: 2px solid #e4264e"><input type="image" width="150px" height="150px" src="images/asp.jpg" onclick="respond('asp')"></td>
                    </tr>
                    <tr>
                        <td style="border: 2px solid #e4264e"><input type="image" width="150px" height="150px" src="images/php.jpg" onclick="respond('php')"></td>
                        <td style="border: 2px solid #e4264e"><input type="image" width="150px" height="150px" src="images/js.jpg" onclick="respond('js')"></td>
                    </tr>
                </table>
        </div>
        </div>
    </body>
</html>

<?php
include 'foot.php';

?>