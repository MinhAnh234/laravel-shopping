@if($newCart!=null)
<div id="totalCount">{{ $newCart->totalQuanty }}</div>
<div class="select-items">
  
    <table>
        <tbody>
            @if ($newCart->totalQuanty==0) 
            <h6>No selected product!!!</h6>
            @endif
            @foreach($newCart->products as $product) 
            <tr>
                <td class="si-pic"><img width="100px" height="100px" src="assets/img/products/{{$product['productInfo']->img}}" alt=""></td>
                <td class="si-text">
                    <div class="product-selected">
                        <div class="totalPriceUpdate">{{  $newCart->totalPrice }}</div>
                        <p >{{ number_format($product['productInfo']->price)}}￥ x {{ $product['quanty'] }} </p>
                        <h6>{{  $product['productInfo']->name  }}</h6>      
                    </div>
                <td class="si-close">
                    <i style="color:red" data-id="{{$product['productInfo']->id}}" class="ti-close"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="select-total">
    <span>total:</span>
    <h5>{{ number_format($newCart->totalPrice) }}￥</h5>
   
</div>
</div>

@endif