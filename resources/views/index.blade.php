<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--===============================================================================================-->
<link rel="icon" type="image/png" href="/loginTheme/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/loginTheme/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/loginTheme/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/loginTheme/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/loginTheme/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/loginTheme/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/loginTheme/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/loginTheme/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/loginTheme/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/loginTheme/css/util.css">
<link rel="stylesheet" type="text/css" href="/loginTheme/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./slick/slick.css">
<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <style type="text/css">
    .slick-prev:before,
    .slick-next:before {
      color: black;
    }
    
  </style>
</head>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <div class="limiter " id="formLogin">
        <div class="container-login100 " id="formContent" >
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form login" action="{{ url('/login') }}" method="post">
                    @csrf
                    <span class="close" style="color: red" title="Close Modal">&times;</span>
                    <span class="login100-form-title p-b-49">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" id="email" name="email" placeholder="Type your username">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" id="password" type="password" name="password" placeholder="Type your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    <div  class="text-danger errorMessage" style="display: none; margin-left:13px "><i class="fa fa-exclamation-triangle"  aria-hidden="true"></i>&nbsp Email or password incorrect!!! </div>
                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Forgot password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="txt1 text-center p-t-54 p-b-20">
                        <a href="/register">
                            Or Sign Up Using
                        </span>
                    </div>

                    <div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="login100-social-item bg2">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>

                    <div class="flex-col-c p-t-155">
                        <span class="txt1 p-b-17">
                            Or Sign Up Using
                        </span>

                        <a href="#" class="txt2">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<!--===============1================================================================================-->
<script src="/loginTheme/vendor/animsition/js/animsition.min.js"></script>
<!--===============1================================================================================-->
<script src="/loginTheme/vendor/bootstrap/js/popper.js"></script>
<script src="/loginTheme/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============1================================================================================-->
<script src="/loginTheme/vendor/select2/select2.min.js"></script>
<!--===============1================================================================================-->
<script src="/loginTheme/vendor/daterangepicker/moment.min.js"></script>
<script src="/loginTheme/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============1================================================================================-->
<script src="/loginTheme/vendor/countdowntime/countdowntime.js"></script>
<!--===============1================================================================================-->
<script src="/loginTheme/js/main.js"></script>
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <div class="loginSuccess" style="float: right">
                        <a href="javascript:"  id="loginBtn" class="login-panel"><i class="fa fa-user"></i><span>Login</span></a>
                        @if(Auth()->check())
                           
                            <script> $('#loginBtn').hide()</script>
                            <form style="float:right" class="logout login-panel" action="{{ url('/logout') }}" method="post"  data-type="json">
                                @csrf
                              <button type="submit">  <i class="fa fa-sign-out"></i> Logout</button>
                            </form>
                            <a href="javascript:"  class="login-panel"><i class="fa fa-user"></i>{{ Auth::user()->name }}</a>
                        @endif
                    </div>
                     <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="assets/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="assets/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="#">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <form class="input-group search" method="get" action="{{ URL('/search') }}">
                                <input name="keywords" type="text" placeholder="What do you need?">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="#">
                                    <i class="icon_bag_alt"></i>
                                        @if($Cart!=null)
                                        <span id="count">{{ $Cart->totalQuanty }}</span>
                                        @else  <span id="count">0</span>
                                        @endif
                                </a>
                                <div class="cart-hover">
                                    <div id="change-iteme-cart">
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    @if($Cart!=null)
                                                    @if ($Cart->totalQuanty==0)
                                                    <h6>No selected product!!!</h6>
                                                    @endif
                                                    @foreach($Cart->products as $product)
                                                    <tr>
                                                        <td class="si-pic"><img width="100px" height="100px" src="assets/img/products/{{$product['productInfo']->img}}" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>￥{{ number_format($product['productInfo']->price)}} x {{ $product['quanty'] }} </p>
                                                                <h6>{{  $product['productInfo']->name  }}</h6>
                                                            </div>
                                                        <td class="si-close">
                                                            <i style="color:red" data-id="{{$product['productInfo']->id}}" class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            @if($Cart!=null)
                                            <h5> ￥{{number_format( $Cart->totalPrice )}}</h5>
                                            @else   <h5> ￥0</h5>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="select-button">
                                        <a href="javascript:" onclick="viewCart()" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing'</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a class="home" href="javascript:">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Collection</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Pages</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a class=" home" href="javascript:"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
            <div class="container">
            <div class="row " style="margin-top:-65px; margin-bottom:50px">
                <div class="col"> 
                <div class="btn btn-success Recommended">Recommended</div></div>
                <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $count=0;?>
                        @foreach($products as $product)
                           <li data-target="#carouselExampleIndicators" data-slide-to="{{$count}}"></li>
                           <?php $count++;?> 
                        @endforeach
                       
                    </ol>
                    <div class="carousel-inner">
                        <?php $countSlide=0 ?>
                       
                            @foreach($products as $product)
                                @if($countSlide==0)
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/img/products/{{  $product->img }}" alt="First slide">
                                    <?php $countSlide++;?> 
                                </div>
                                @else 
                                <div class="carousel-item">
                                    <img class="d-block w-100"  src="assets/img/products/{{  $product->img }}" alt="Second slide">
                                 </div>
                                 @endif

                            @endforeach            
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
         <section id="slider" class="center slider">
   
            @foreach($products as $product)
                 <div>
                    <img height="200px" src="assets/img/products/{{  $product->img }}" alt="">
                 </div>
        @endforeach
  </section>
  <script type="text/javascript">
  
     
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });

</script>
    </div>
        <div class="row showProduct" style="margin-top:-130px; margin-bottom:50px" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            @if($products->count()==0)
                                <h3 style="color:red" class="container">No result found</h3>

                            @endif
                            @foreach($products as $product)
                            <div class="col-lg-4 col-sm-6">
                                <div data-aos="flip-left"
                                data-aos-easing="ease-out-cubic"
                                data-aos-duration="1500" class="product-item">
                                    <div class="pi-pic">
                                        <img height="395px" src="assets/img/products/{{  $product->img }}" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon" class="heart">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a onclick="AddCart({{ $product->id }}),  notify()" href="javascript:">+ Add Cart</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Towel</div>
                                        <a href="#">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <div class="product-price">
                                            ￥{{number_format( $product->price) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <script>
                                AOS.init();
                              </script>
                          <div class="container">
                            @if($products->count()<>0)
                            <nav aria-label="...">
                                <ul class="pagination pagination-lg">
                                @if($products->currentPage()>1)
                                <li class="page-item previous" data-previous ="{{ $products->previousPageUrl() }}"><a class="page-link"  href="javascript:">Previous</a></li>
                                @endif
                                @for($i = 1; $i <=$products->lastPage(); $i++)
                                  @if($i==$products->currentPage())
                                  <li class="page-item active"><a  class="page-link" href="javascript:">{{ $i }}</a></li>
                                  @else
                                  <li data-page="{{ $i}}" class="page-item page"><a class="page-link"  href="javascript:">{{ $i }}</a></li>
                                  @endif
                                @endfor
                                  @if($products->currentPage()<$products->lastPage())
                                  <li class="page-item next"  data-next="{{ $products->nextPageUrl() }}"><a class="page-link"  href="javascript:">Next</a></li>
                                  @endif
                                </ul>
                                <script>
                                    $('.home').on("click",function(){
                                        $.ajax({
                                            url: '/',
                                            type: 'GET',
                                          }).done(function(response,status, xhr) {
                                            $('.product-shop').html(
                                                $('<div />').html(response).find('.product-shop').html()
                                            );
                                          });
                                    });
                                    $('.previous').on("click",function(){
                                        $.ajax({
                                            url: $(this).data("previous"),
                                            type: 'GET',
                                          }).done(function(response,status, xhr) {
                                            $('.product-shop').html(
                                                $('<div />').html(response).find('.product-shop').html()
                                            );
                                            $('.sale').hide();
                                          });
                                    });
                                    $('.next').on("click",function(){
                                        $.ajax({
                                            url: $(this).data("next"),
                                            type: 'GET',
                                          }).done(function(response,status, xhr) {
                                            $('.product-shop').html(
                                                $('<div />').html(response).find('.product-shop').html()
                                            );
                                            $('.sale').hide();
                                          });
                                    })
                                    $('.page').on("click",function(){
                                        $.ajax({
                                            url: '/?page='+$(this).data("page"),
                                            type: 'GET',
                                          }).done(function(response,status, xhr) {
                                            $('.product-shop').html(
                                                $('<div />').html(response).find('.product-shop').html()
                                            );
                                            $('.sale').hide();
                                          });
                                    })

                                </script>
                              </nav>
                            @endif
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="assets/img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/tuyen.minhnguyentran/" target="_blank">Minh Anh</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="assets/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Section End -->
    <!-- Js Plugins -->

   
   
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.zoom.min.js"></script>
    <script src="assets/js/jquery.dd.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
         $("#icon_heart_alt").on("click",function(){
            $('#icon_heart_alt').empty();
            $('#icon_heart_alt').html('<i class="fa fa-heart"></i>');

              });

             $('.close').on('click',function(){
                $('#formLogin').hide();
             });
             $('#formLogin').hide();
             $('.login-panel').on("click",function(){
                $('#formLogin').show();
             });
             var formContent = document.getElementById('formContent');
             window.onclick = function(event) {
                if (event.target ==formContent ) {
                    document.getElementById('formLogin').style.display="none";
                }
            }
        function ajaxToDo(response){
             $('#change-iteme-cart').empty();
             $('#change-iteme-cart').html(response);
             $('#totalCount').hide();
             $('.totalPriceUpdate').hide();
             $('#count').empty();
             $('#count').html($('#totalCount').text());

        }
        function AddCart(id) {
            $.ajax({
                url: 'AddCart/'+id,
                type: 'GET',
              }).done(function(response,status, xhr) {
                    ajaxToDo(response);
              });
        }
        $('#change-iteme-cart').on("click",".si-close i",function(){

                $.ajax({
                    url: 'destroyCart/'+$(this).data("id"),
                    type: 'GET',
                  }).done(function(response,status, xhr) {
                    notify();
                    ajaxToDo(response);
                });


        })

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" />
    <script type="text/javascript">
		function notify() {
			$.notify("Successfully", "success");
		}
	</script>
    <script type="text/javascript">
        var formData = {
            "_token": "{{ csrf_token() }}",
            email: $('#email').val(),
            password: $('#password').val(),
        }
        $('form.search').on('submit',function(e){
            e.preventDefault();
            var $this = $(this);
            $.ajax({
                type: $this.attr('method'),
                url: $this.attr('action'),
                data: $this.serializeArray(),

             success: function (response) {
                $('.product-shop').html(
                    $('<div />').html(response).find('.product-shop').html()
                );
                $('#slider').hide();
                $('.Recommended').hide();
                $('.showProduct').css("margin-top", "0px");
          },
          error: function (jqXHR) {

          }
      });


        });
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('form.login:first').on('submit', function(e){
              e.preventDefault();

              var $this = $(this);

              $.ajax({
                  type: $this.attr('method'),
                  url: $this.attr('action'),
                  data: $this.serializeArray(),

                  success: function (response) {
                        $('#formLogin').hide();
                        $('.loginSuccess').empty();
                        $('.loginSuccess').html(response);
                        $('form.logout:first').on('submit', function(e){
                               e.preventDefault();
                                var $this = $(this);
                                  $.ajaxSetup({
                                  headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                         });
                     $.ajax({
                        type: $this.attr('method'),
                        url: $this.attr('action'),
                        data: $this.serializeArray(),

                     success: function (response) {
                        $('#formLogin').hide();
                        location.reload();
                  },
                  error: function (jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    if(response.message) {
                      alert(response.message);
                    }
                  }
              });
            });


                  },
                  error: function (jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    if(response.message) {
                        $('.errorMessage').show();
                    }
                  }
              });
            });

          });
          function viewCart() {
            $.ajax({
                url: '/viewCart',
                type: 'GET',
              }).done(function(response,status, xhr) {
                    $('.breacrumb-section').empty();
                    $('.product-shop').hide();
                    $('.breacrumb-section').html(response);

              });

          }
    </script>

</body>

</html>
