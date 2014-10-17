<?php
    $page_heading="About Us ";
   include('master.php');
  
?>
<html>
    <head>
        <style>
            #content
            {
                padding:50px; 
                background-color: #B5BA96;
               
                
            }
            img.self 
            {
                float: right;
                width: 300px;
                height: 400px;
                border: 5px double #e4264e;
            }
            b
            {
            font-size: 20px;
            font-weight: bold;
            color: #304E5A;
             font-family: lucida calligraphy;
            }
            li
            {
                font-size: 20px;
                color: #304E5A;
            }
            ul
            {
                list-style-type: square;
            }
        </style>
           
    </head>
    <body>
        <div id="content">
            <p>
                <img class="self" src="images/digg.jpg" >
            <h2><b><u>Digvijayraj Singh</u></b></h2>
            <h3> <b>is the student of B-Tech. Computer Science at VIT University ,Vellore.</br>
                    He has also developed many websites as his projects.</br>
                    </br>
             Currently, Digvijayraj Singh is located in TamilNadu,India.</b></h3>
            </p>
            </br>
            </br></br>
            <ul><h2><u>Positions of Responsibility</u></h2>
            <li>Board Member IE(I) (Institution of Engineers (INDIA))</li>
            <li>Technical Head IE(I) (Institution of Engineers (INDIA))</li>
            <li>Have organized various events held by IE(I) in VIT</li>
            <li>Have organized various events held at VIT's cultural fest, Riviera</li>
            <li>Have organized various events held at VIT's tech. fest, GRAVITAS</li>
            </ul></br>
            <ul><h2><u>Achievements </u></h2>
            <li>Successfully designed website for 'ONLINE CAR DEALERSHIP' using ASP.NET and HTML</li>
            <li>Successfully designed website for 'Handmade Products from Group of NGOs' using ASP.NET and HTML</li>
            <li>Successfully designed website for 'E-Commerce website for SMEs' using ASP.NET and HTML</li>
            <li>Participated as volunteer in NSS (National Service Scheme).</li>
        </ul>
        </div>
        
    </body>
</html>
<?php
include 'foot.php';
?>