interval=setInterval(function(){clock();},1000);
         function clock()
         {
         var d=new Date();
         var t=d.toLocaleTimeString();
          document.getElementById("digi").innerHTML="Digvijayraj Singh  "+t;
      }