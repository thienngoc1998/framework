<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <base href="{{asset('')}}">
    <link rel="icon" href="persuit/img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Persuit</title>

    <!-- Icon css link -->
    <link href="persuit/css/font-awesome.min.css" rel="stylesheet">
    <link href="persuit/vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
    <link href="persuit/vendors/elegant-icon/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="persuit/css/bootstrap.min.css" rel="stylesheet">
{{--    <link href="persuit/css/style-custom.css" rel="stylesheet">--}}
{{--    <link href="persuit/css/plugin.css" rel="stylesheet">--}}
{{--    <link href="persuit/css/default.css" rel="stylesheet">--}}

    <!-- Rev slider css -->
    <link href="persuit/vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="persuit/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="persuit/vendors/revolution/css/navigation.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="persuit/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="persuit/vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">

    <link href="persuit/css/style.css" rel="stylesheet">
    <link href="persuit/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="toastr.js"></script>
    <![endif]-->
    <style>
        #loading
        {
            text-align:center;
            background: url('upload/loading.gif') no-repeat center;
            height: 150px;
        }


        .reviews-tab label {
            display: block;
            font-weight: 400;
            margin-bottom: 5px;
        }

        .product-rating .fa {
            margin-right: 3px;
            color: #F60;
        }

        .reviews-tab form input[type=radio] {
            max-width: 100%;
            width: auto;
            height: 15px;
        }
    </style>
</head>
<body>
@include('frontend.includes.header')
<!--================Top Header Area =================-->

<!--================End Menu Area =================-->

<!--================Slider Area =================-->
@yield('content')
<!--================End Form Blog Area =================-->

@include('frontend.includes.footer')




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="persuit/js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="persuit/js/popper.min.js"></script>
<script src="persuit/js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="persuit/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="persuit/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="persuit/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="persuit/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="persuit/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="persuit/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="persuit/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="persuit/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<!-- Extra plugin css -->
<script src="persuit/vendors/counterup/jquery.waypoints.min.js"></script>
<script src="persuit/vendors/counterup/jquery.counterup.min.js"></script>
<script src="persuit/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="persuit/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
<script src="persuit/vendors/image-dropdown/jquery.dd.min.js"></script>
<script src="persuit/js/smoothscroll.js"></script>
<script src="persuit/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="persuit/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="persuit/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
<script src="persuit/vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
<script src="persuit/vendors/jquery-ui/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="persuit/js/theme.js"></script>
<script src="js/common.js"></script>
<script>
    $(document).ready(function () {
        getTotalItemCarts();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>

@yield('script')
</body>
</html>
