<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- TITLE for website -->
    <title>MegaSoft | Website</title>
     
    <!-- CSS file links below -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/icons.css" />
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--========================================== Start WRAPPER Section ==========================================-->
    <div class="wrapper">
      
      <!--====================================== Start NAVBAR section ======================================-->
   @include('layouts.navbar')
      
      <!-- /NAVBAR -->

      <!--====================================== Start HEADER section ======================================-->
      @include('layouts.header')
      
      <!-- /HEADER -->

      <!--=============================================== Start MAIN section ===============================================-->
      
      @include('layouts.main')

      <!-- /MAIN -->
      

      <!--============================================= Start MODAL section =============================================-->
      
      @include('layouts.modal')
     
      <!-- /MODAL -->

      <!--============================================= Start FOOTER section =============================================-->
      
      @include('layouts.footer')
      <!-- /FOOTER -->
    </div>
    <!-- /WRAPPER -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
