<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
  <html lang="en">
  <head><!-- BEGIN HEAD -->
  <meta charset="utf-8" />
  <title>ComexPerú</title>
  <!-- D.S. viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fin D.S. viewport -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="robots" content="index, follow">
  <!-- <title>Inicio | COMEX - Sociedad de Comercio Exterior del Perú</title> -->
  <meta name="description" content="Información sobre los mejores Foros y Cumbres Empresariales del año organizadas por COMEXPERÚ">
  <meta name="keywords" content="Foros, cumbres, peru, economía, comercio, exterior, ComexPerú">
  <meta property="og:site_name" content="COMEX - Sociedad de Comercio Exterior del Perú">
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <meta content="author" name="Studio Tigres"/>
  <meta content="<?php echo csrf_token(); ?>" name="csrf-token" />
  <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml" />
  <!-- compartir articulos -->
  <meta property="og:type" content="website" />
  <link rel="shortcut icon" href="{!!url('/images/favicon.ico')!!}" />

  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!--BEGIN SCRIPTS-->
  <script src="<?php echo URL::asset('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo URL::asset('js/sweetalert.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo URL::asset('js/toastr.min.js'); ?>" type="text/javascript"></script>
  <!--END SCRIPTS-->

  <!--BEGIN CSS PLUGGINS-->
  <link href="<?php echo URL::asset('assets/global/plugins/jquery-ui/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('css/slick.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('css/slick-theme.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('css/sweetalert.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo URL::asset('css/toastr.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL::asset('css/font.css'); ?>" rel="stylesheet" type="text/css" />
  <!--END CSS PLUGGINS-->
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>


  <!--BEGIN GLOBAL STYLE-->

  <link href="<?php echo URL::asset('css/style.css?v=1.2'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('css/main.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('css/footer.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('css/media-queries.css?v=1.2'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL::asset('css/notificacion.css'); ?>" rel="stylesheet" type="text/css" />
  <!--END GLOBAL STYLE-->

  <!-- PWA -->
    <!-- manifest -->
    <link rel="manifest" href="{!!url('/manifest.json')!!}">
    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Comex">
    <link rel="apple-touch-icon" href="images/icons/icon-152x152.png">
    <meta name="msapplication-TileImage" content="images/icons/icon-144x144.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">
  <!-- FIN PWA -->

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93900272-1', 'auto');
    ga('send', 'pageview');

  </script>
  <script>
    var url = "{!! url('/') !!}";
  </script>
  <style>
          h1 { font-size: 50px; }
          body { text-align:center; font: 20px Helvetica, sans-serif; color: #333; }
          </style>


<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
  @yield('style')
  </head> <!-- END HEAD -->
    <body class="fondo-body">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
      <div class="container" style="min-height: calc(100vh - 223px); padding:150px 0;">
      <div class="col-md-6 col-sm-12 col-md-offset-3">
        <img src="images/logo-nuevo.svg" class="img-responsive">
        <br><br>
       <p>Este sitio web se encuentra en mantenimiento.</p>
      </div>
    </div>

      <div class="footer-container">
      @include('front.includes.footer')
      </div>
    </body>
    <script type="text/javascript">
      var keyApi = '{{env('VAPID_PUBLIC_KEY')}}';

      // var keyApi = 'BNBwEuMY8QZywt7oVndaGEnO2iYXAE/wdgQQ2ia7cGJlNoCRhQUWF1nUSFL9kIMEA1t9xAXwOomPxIesE2+fjEA=';
    </script>
    <script>
    $('.filtro-central').keypress(function(e){
          if(e.which == 13){
              $('.home-button-buscar').click();
          }
      });
    </script>
    <script src="<?php echo URL::asset('assets/global/plugins/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/slick.js');?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/main.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/media-queries.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/toast.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/not.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/detectar.js'); ?>" type="text/javascript"></script>
    <script src='https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit' async defer></script>
     @yield('script')

     <script>
       if (window.matchMedia('(display-mode: standalone)').matches) {
         $('.homescreen').css('display','none');
         $('.fab__push').css('display','flex');


        }

        var attachMobileSafariAddressBarHelpTip = function (target) {
          var $target = $(target);
          $target.tooltip({
              title: 'Scroll up to hide Safari address bar',
              trigger: 'manual',
              placement: 'bottom'
          });
          $(window).on('resize', function () {
              var bodyHeight = document.body.offsetHeight;
              var windowHeight = window.innerHeight;
              var isLandscape = Math.abs(window.orientation) === 90;
              var showTooltip = (windowHeight < bodyHeight);
              if(!isLandscape) return;
              $target.tooltip(showTooltip ? 'show' : 'hide');
          });
        }
        var ua = window.navigator.userAgent;
        if(ua.indexOf('iPhone') !== -1 && ua.indexOf('Safari') !== -1) {
            attachMobileSafariAddressBarHelpTip('.navbar');
        }

        if(isMobile.iOS()) {
          //For iPhone and Andriod To remove Address bar when viewing website on Safari Mobile
          // When ready...

          window.addEventListener("load",function() {
            // Set a timeout...
            setTimeout(function(){
            // Hide the address bar!
            window.scrollTo(0, 1);
            console.log('prueba hide');
            }, 0);
          });
        }
     </script>
     <script type="application/ld+json">
      {
        "@context": "Información sobre los mejores Foros y Cumbres Empresariales",
        "@type": "Organization",
        "url": "https://www.comexperu.org.pe/",
        "name": "ComexPerú",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "(511) 625 - 7700",
          "contactType": "Customer service"
        }
      }
</script>
</html>
