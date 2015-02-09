<html>

<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js" type="text/javascript"></script>
  <script src="js/jquery.mmenu.min.all.js" type="text/javascript"></script>
  <script src="js/addons/jquery.mmenu.header.min.js" type="text/javascript"></script>
  <link href="css/jquery.mmenu.all.css" type="text/css" rel="stylesheet" />
  <link href="css/addons/jquery.mmenu.header.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/mmenu.css"/>
  <style>
  
  </style>
</head>

<body style="min-height:700px;">

  <div>
    <div class="lines">
      <a id="my-button" href="#my-menu">
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </a>
      <nav id="my-menu">
        <div>
          <ul>
            <li><a href="/">Home</a>
            </li>
            <li><a href="/about/" class="">About us</a>
            <!--   <ul class="mm-subopen">
                        <li><a href="/about/history/">History</a></li>
                        <li><a href="/about/team/">The team</a></li>
                        <li><a href="/about/address/">Our address</a></li>
              </ul> -->
            </li>
            <li><a href="/contact/">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <script type="text/javascript">
  $(document).ready(function() {
    $("#my-menu").mmenu({
      // options
      //  offCanvas:{
      //   position:"left",
      //   zposition:"front"  
      // }
      slidingSubmenus: true,
       classes: "mm-zoom-menu mm-zoom-panels"
     // header:{
     //  true
     // }
     // },{

     // }
    });
    $("#my-button").click(function() {
      $("#my-menu").trigger("open.mm");
    });
  });
  </script>

</body>



</html>
