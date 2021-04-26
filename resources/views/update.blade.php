   
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
    <td class="total-price price{{$product['productInfo']->id}}">￥{{ number_format($product['productInfo']->price*$product['quanty'] )}}</td>
    <td class="close-td"><i class="ti-close" data-destroy="{{$product['productInfo']->id}}"></i></td>
    <td class="close-td"><i class="ti-save"  data-save="{{$product['productInfo']->id}}"></i></td>
</tr>
@endforeach
@endif
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script>
        (function ($) { 
        var proQty = $('.pro-qty');
        proQty.prepend('<span class="dec qtybtn">-</span>');
        proQty.append('<span class="inc qtybtn">+</span>');
        proQty.on('click', '.qtybtn', function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find('input').val(newVal);
        });
    
    })(jQuery);
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
                    $('#totalPriceUpdate').hide();
                    $('#totalCount').hide();
                    $('#count').empty();
                    $('#count').html($('#totalCount').text());  
                  });
            }
            AddCart(-1);

             
        });
    }
   
    })

    </script>


