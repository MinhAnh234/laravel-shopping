@extends('layouts.adminTheme')
@section('content')
<section id="main-content">
	<section class="wrapper">
    <div class="container bg-light" >
        <table class="table mt-5 border">
            <thead class="thead-success">
              <tr class="table-success">
                <th class="text-dark" scope="col-1">Id</th>
                <th class="text-dark" scope="col-1">Name</th>
                <th class="text-dark" scope="col-1" >Price</th>
                <th class="text-dark" scope="col-2" style="text-align: left">Image</th>
                <th class="text-dark" scope="col-1">Category</th>
                <th class="text-dark" scope="col-1">Sale</th>
                <th class="text-dark" scope="col-1">Other</th>
              </tr>
            </thead>
            @foreach($products as $product )
            <tbody>
                <tr  >
                  <td class="text-dark align-middle font-italic">{{ $product->id }}</td>
                  <td class="text-dark align-middle font-italic">{{ $product->name }}</td>
                  <td class="text-dark align-middle font-italic">{{ $product->price }}</td>
                  <td ><img style="max-width:50%; max-height:50%; "  src="/assets/img/products/{{  $product->img }}" alt=""></td>
                  <td class="text-dark align-middle font-italic">{{ $product->category }}</td>
                  <td class="text-dark align-middle font-italic">{{ $product->sale->percent }}%</td>
                  <td class="text-dark align-middle font-italic">
                    <a href="/admin/updateProduct/{{$product->id}}"><i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i></a>
                   <a href="/admin/deleteProduct/{{$product->id}}"> <i class="fa fa-trash fa-lg" style="color: red" aria-hidden="true"></i></a></td>
                </tr>
              </tbody>
            @endforeach
          </table>
          {{ $products->links() }}
    </div>
    
    </section>
</section>
@endsection