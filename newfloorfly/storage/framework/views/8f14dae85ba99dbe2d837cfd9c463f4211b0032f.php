<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $__env->yieldContent('head_title', getcong('site_name')); ?></title>
  <meta name="description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>">
    <meta property="keywords" content="<?php echo $__env->yieldContent('head_keywords', getcong('site_keywords')); ?>" />
    <meta name="google-site-verification" content="-LOWTfxqxJdocs1Z_P1jY5vRcrWNB3Bcevx_66SO2x0" />
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php echo $__env->yieldContent('head_title',  getcong('site_name')); ?>"/>
    <meta property="og:description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>"/>

    <meta property="og:image" content="<?php echo $__env->yieldContent('head_image', url('/upload/floorfly-pro-bg.jpg')); ?>" />
    <meta property="og:url" content="<?php echo $__env->yieldContent('head_url', url('/')); ?>" />
    <link rel="canonical" href="<?php echo $__env->yieldContent('head_url', url('/')); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">
   <link href="https://fonts.googleapis.com/css?family=Scada:400,700|Open+Sans:400,300,700" rel="stylesheet" type="text/css">

  <!-- Fav and touch icons -->
   <link href="<?php echo e(URL::asset('upload/'.getcong('site_favicon'))); ?>" rel="shortcut icon" type="image/x-icon" />

    <link href="<?php echo e(URL::asset('site_assets/css/style.css')); ?>" rel="stylesheet" />
    <link id="main-style-file-css" rel="stylesheet" href="<?php echo e(URL::asset('site_assets/css/style_new.css')); ?>"/>
    <link href="<?php echo e(URL::asset('site_assets/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/dist/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/font-awesome/css/font-awesome.min.css')); ?>">
    <link href="<?php echo e(URL::asset('site_assets/css/responsive.css')); ?>" rel="stylesheet" />

    <?php echo $__env->yieldContent("styles"); ?>

    <?php if(request()->segment('1')=='login' or request()->segment('1')=='register'): ?>

      <script src='https://www.google.com/recaptcha/api.js'></script>

    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/css/jquery-eu-cookie-law-popup.css')); ?>">
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '358109605523117');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=358109605523117&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YZLKWF09DT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YZLKWF09DT');
</script>

</head>
<body class="home-page-2 property-listing-page row-listing submit-property property-details not-found <?php if(request()->segment('1')=='user'): ?> agent-details-page <?php endif; ?> <?php if(request()->segment('1')=='agents'): ?> agents-page <?php endif; ?>">

	  <?php echo $__env->make("_particles.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	  <?php echo $__env->yieldContent("content"); ?>


	  <?php echo $__env->make("_particles.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="eupopup eupopup-bottom"></div>
  <script src="<?php echo e(URL::asset('site_assets/dist/js/jquery-3.5.1.slim.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('site_assets/dist/js/popper.min.js')); ?>"></script>
  
  <script src="<?php echo e(URL::asset('site_assets/dist/js/bootstrap.min.js')); ?>"></script>
  <!-- For PopUp Showing-->
   


  

  <!-- JS Include Section -->


<script type="text/javascript" src="<?php echo e(URL::asset('site_assets/js/jquery-1.11.1.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/js/helper.js')); ?>"></script>
  <!-- <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/js/select2.min.js')); ?>"></script> -->
  <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/js/ion.rangeSlider.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/js/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('site_assets/js/jquery-eu-cookie-law-popup.js')); ?>"></script>

  <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/js/template.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/js/bootstrap-tagsinput.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/js/jquery.cycle.all.js')); ?>"></script>



  <!--<script type="text/javascript" src="<?php echo e(URL::asset('site_assets/font-awesome/js/bootstrap-tagsinput.js')); ?>"></script> -->
  <!-- End of JS Include Section -->

  

  <?php echo $__env->yieldContent("scripts"); ?>
  <script src="<?php echo e(URL::asset('site_assets/js/jquery-ui.min.js')); ?>"></script>
  <?php
  $item_info = json_encode(DB::table('upazilas')->select('name as label', 'id as value')->get());
  ?>
  <script type="text/javascript">

    var productList = <?php echo $item_info; ?>;

    APchange = function(event, ui){
        $(this).data("autocomplete").menu.activeMenu.children(":first-child").trigger("click");
    }
    function invoice_productList(cName) {

        var qnttClass = 'ctnqntt'+cName;
        var total_tax_price = 'total_tax_'+cName;
        var variant_id ='variant_id_'+cName;
        //var available_quantity = 'available_quantity_'+cName;
        var unit = 'unit_'+cName;
        var unit_type = 'unit_type_'+cName;
        var priceClass = 'price_item'+cName;
        var discount = 'discount_'+cName;
        var total_price = 'total_price_'+cName;

        $( ".productSelection" ).autocomplete(
        {
            source: productList,
            delay:300,
            focus: function(event, ui) {
                $(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
                $(this).val(ui.item.label);
                return false;
            },
            select: function(event, ui) {
                $(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
                $(this).val(ui.item.label);
                var id=ui.item.value;
                var dataString = 'product_id='+ id;
                var base_url = $('.baseUrl').val();


                $(this).unbind("change");
                return false;
            }
        });
        $( ".productSelection" ).focus(function(){
            $(this).change(APchange);
        });
    }





  $(document).ready( function() {
  if ($(".eupopup").length > 0) {
    $(document).euCookieLawPopup().init({
       'cookiePolicyUrl' : '<?php echo e(stripslashes(getcong('gdpr_cookie_url'))); ?>',
       'buttonContinueTitle' : '<?php echo e(trans('words.gdpr_continue')); ?>',
       'buttonLearnmoreTitle' : '<?php echo e(trans('words.gdpr_learn_more')); ?>',
       'popupPosition' : 'bottom',
       'colorStyle' : 'default',
       'compactStyle' : false,
       'popupTitle' : '<?php echo e(stripslashes(getcong('gdpr_cookie_title'))); ?>',
       'popupText' : '<?php echo e(stripslashes(getcong('gdpr_cookie_text'))); ?>'
    });
  }
});
</script>




<script type="text/javascript">
var abc = 0;
//function increment() {

//};
$(document).ready(function() {
    $('#add_more').click(function() {//When Add More Files button Clicked these function Willbe Called (new file field is added dynamically)
        $(this).before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                $("<input/>", {name: 'gallery_file[]', type: 'file', id: 'file'}),
                $("")
                ));
    });

$('body').on('change', '#file', function(){
            if (this.files && this.files[0]) {
                //increment();
                abc += 1;
                var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
                $(this).hide();
                $("#abcd"+ abc).append($("<img/>", {id: 'img', src: '<?php echo e(URL::asset('site_assets/img/x.png')); ?>', alt: 'delete'}).click(function() {
                //$(this).parent().parent().remove();
                $(this).parent().remove();
                }));
            }
        });

    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };

    $('#upload').click(function(e) {
        var name = $(":file").val();
        if (!name)
        {
            alert("First Image Must Be Selected");
            e.preventDefault();
        }
    });
});


</script>

<?php if(request()->segment('1')=='contact-us'): ?>
<script type="text/javascript">
    function initialize() {
      var myLatLng = new google.maps.LatLng(<?php echo e(getcong('contact_lat')); ?>, <?php echo e(getcong('contact_long')); ?>);
      var mapOptions = {
        zoom: 16,
        center: myLatLng,
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"off"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}],

        // Extra options
        scrollwheel: false,
        mapTypeControl: false,
        panControl: false,
        zoomControlOptions: {
          style   : google.maps.ZoomControlStyle.SMALL,
          position: google.maps.ControlPosition.LEFT_BOTTOM
        }
      }
      var map = new google.maps.Map(document.getElementById('contact-map'),mapOptions);

      var image = '<?php echo e(URL::asset("site_assets/img/marker.png")); ?>';

      var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
<?php endif; ?>

<script type="text/javascript">

</script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\newfloorfly\resources\views/app.blade.php ENDPATH**/ ?>