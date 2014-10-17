<?php
    $page_heading="Services";
   include('master.php');
  
?>
<html>
    <head>
        <style>
            #content
            {
                 padding:50px; 
                background-color:#EDF0D7;
                height: 700px;
            }
            p
            {
              font-size: 30px;
                
                text-align: center;
               color:#213E4A
            }
            #content img
            {
                float: left;
                margin-top: 20px;
            }
            img.skill
            {
                width: 72px;
                height: 72px;
            }
            h1.design
            {
                color: #e4264e;
                border-bottom:  2px solid #e4264e;
                
            }
            h1.code
            {
                color: #a1c14d;
                border-bottom:  2px solid #a1c14d;
            }
            table.tbl
            {
                text-align: left;
                padding: 15px;
                background-color:transparent;
                
            }
            th.tbl
            {
                 font-size: 30px;
                color: #e4264e;
                border: 3px solid #a1c14d;
                text-align: center;
            }
            td.tbl
            {
                font-size: 25px;
                 color:213E4A;
                 border: 3px solid red;
            }
        </style>
    </head>
    <body>
        <div id="content">
            <p><b style="font-size:30px ;color:213E4A">
             " Web design solutions for your business that allow you to put your best foot forward. "</br>Successful design & branding can help you sell more products,
            build trust with your future customers, and show the quality
            and value of your business.</b></p>
        <img src="images/skillDesign.jpg" alt="design" height="72" width="72" class="skill">
        <h1 class="design">Web & Interface Design</h1>
        <p>As far as visitors are concerned, the interface is the product.
            I design intuitive, attractive websites and app interfaces that
            help people get things done.
            The goal isn't to make things as simple as possible, it's to make
            them as obvious as possible.</p>
        <img src="images/skillCode.jpg" alt="design" height="72" width="72" class="skill">
        <h1 class="code">Front-End Development</h1>
        <p>HTML, CSS, jQuery, responsive &amp; adaptive design, preprocessors, 
            cross-browser testing, build processes, microformats, and more. 
            Whether you look at it or not, I write less code that does more.</p>
        
        </div>
        
    </body>
</html>
<?php
include 'foot.php';
?>