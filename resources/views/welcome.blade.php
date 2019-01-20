<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

     <!--//meta tags ends here-->
     <!--booststrap-->
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
     <!--//booststrap end-->
     <!-- font-awesome icons -->
     <link href="css/font-awesome.css" rel="stylesheet">
     <!-- //font-awesome icons -->
     <!--stylesheets-->
     <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
     <!--//stylesheets-->





        <!-- Custom CSS -->
    <!-- //side nav css file -->
    <link href="/css2/style.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="/css2/fontawesome-all.min.css" rel="stylesheet">
 
    </head>
    <body>

        <div id='app'>

       <router-view></router-view>
       
        </div>

    </body>

<script src='{{asset('js/app.js')}}'></script>
<!--
<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
     </script>
    -->  
<!--js working-->
<script src='js/jquery-2.2.3.min.js'></script>
<!--//js working--> 
<!--responsiveslides banner-->
<script src="js/responsiveslides.min.js"></script>
<script>
   // You can also use "$(window).load(function() {"
   $(function () {
       // Slideshow 4
       $("#slider4").responsiveSlides({
           auto: true,
           pager:false,
           nav:true ,
           speed: 900,
           namespace: "callbacks",
           before: function () {
               $('.events').append("<li>before event fired.</li>");
           },
           after: function () {
               $('.events').append("<li>after event fired.</li>");
           }
       });
   
   });
</script>
<!--// responsiveslides banner-->	
<!-- start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
   jQuery(document).ready(function ($) {
       $(".scroll").click(function (event) {
           event.preventDefault();
           $('html,body').animate({
               scrollTop: $(this.hash).offset().top
           }, 900);
       });
   });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
   $(document).ready(function () {
   
       var defaults = {
           containerID: 'toTop', // fading element id
           containerHoverID: 'toTopHover', // fading element hover id
           scrollSpeed: 1100,
           easingType: 'linear'
       };
   
   
       $().UItoTop({
           easingType: 'easeOutQuart'
       });
   
   });
</script>
<!-- //here ends scrolling icon -->
<!--bootstrap working-->
<script src="js/bootstrap.min.js"></script>
<!-- //bootstrap working-->






<!-- js-->
<!--  necessary snippets for few javascript files -->
<script src="/js2/Beautyblog.js"></script>
<!-- smooth scroll -->
<script src="/js2/SmoothScroll.min.js"></script>

</html>
