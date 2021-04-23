

   
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a class="home" href="javascript:"><i class="fa fa-home"></i> Home</a>
                        <a href="./">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad product-shop ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr> 
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Delete</th>
									<th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($Cart!=null)
                                @foreach($Cart->products as $product) 
                                <tr id="product{{$product['productInfo']->id}}" >
                                    <td class="cart-pic"><img style="margin-top:10px" height="200px" src="assets/img/products/{{$product['productInfo']->img}}" alt=""></td>
                                    <td class="cart-title">
                                        <h5>{{$product['productInfo']->name}}</h5>
                                    </td>
                                    <td class="p-price" >￥{{ number_format($product['productInfo']->price)}}</td>
                                    <td class="qua-col">
                                        <div class="quantity">
                                            <div class="pro-qty" data-id="{{$product['productInfo']->id}}" data-price ="{{ $product['productInfo']->price }}">
                                                <input class="product{{$product['productInfo']->id}}" type="text" value="{{$product['quanty']}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price price{{$product['productInfo']->id}}">{{ number_format($product['productInfo']->price*$product['quanty'] )}}￥</td>
									<td class="close-td"><i class="ti-close" data-destroy="{{$product['productInfo']->id}}"></i></td>
                                    <td class="close-td"><i class="ti-save"  data-save="{{$product['productInfo']->id}}"></i></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>￥{{ number_format($Cart->totalPrice) }}</span></li>
                                    <li class="cart-total">Total <span>￥{{ number_format( $Cart->totalPrice )}}</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->	

  

    <!-- Js Plugins -->
 
 
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.zoom.min.js"></script>
    <script src="assets/js/jquery.dd.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
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
    </script>
    <script>
      
        window.localStorage.clear();
        $('.pro-qty').on("click",function(){
            var id= $(this).data("id");
            $('.price'+id+'').empty();
            $('.price'+id+'').html("￥"+new Intl.NumberFormat().format($(this).data("price")*$('.product'+id+'').val()));
            window.localStorage.setItem('totalPriceUpdate'+id+'',$(this).data("price")*$('.product'+id+'').val()) ;
            window.localStorage.setItem('countUpdate'+id+'',$('.product'+id+'').val());

        })
        $('.ti-close').on("click",function(){
            var idDestroy=$(this).data("destroy");
            $.ajax({
                url: 'destroyCart/'+$(this).data("destroy"),
                type: 'GET',
              }).done(function(response,status, xhr) {
                  console.log(idDestroy)
                  $('#product'+idDestroy+'').remove();
            });
         })
        $('.ti-save').on("click",function(){
            var id=$(this).data("save");
            var count=  Number(window.localStorage.getItem('countUpdate'+id+''));
            var totalPrice= Number(window.localStorage.getItem('totalPriceUpdate'+id+''));
            if(count!=0){
            $.ajax({
                url: 'updateCart/'+id+'-'+count+'-'+totalPrice,
                type: 'GET',
              }).done(function(response) {
                  $('tbody').empty();
                  $('tbody').html(response);
                  function AddCart(id) {
                    $.ajax({
                        url: 'AddCart/'+id,
                        type: 'GET',
                      }).done(function(response) {
                        $('#change-iteme-cart').empty();
                        $('#change-iteme-cart').html(response);
                        $('#totalCount').hide();
                        $('#count').empty();
                        $('#count').html($('#totalCount').text());  
                        $('.subtotal').empty();
                        $('.cart-total').empty();
                        $('.totalPriceUpdate').hide();
                        $('.subtotal span').html($('.totalPriceUpdate').text());
                        $('.cart-total span').html($('.totalPriceUpdate').text());
                        console.log($('.product-selected p'));
                      });
                }
                AddCart(-1);

                 
            });
        }
       
        })

    </script>
    
</body>
</html>