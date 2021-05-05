@extends('layouts.adminTheme')
@section('content')
<section class="wrapper">
    <section id="main-content">
        <div class="container" style="background-color: white">
            <div class="row">
                <div class="col-12"><h2 class="panel-heading ">ADD PRODUCT</h2></div>
            </div>
            <div class="row">
                <div class="container position-center">
                    @if (Session::has('errorImage'))
                    <div style="margin-left:-8px" class="alert alert-danger">{{ Session::get('errorImage') }}</div>
                    {{ Session::forget('errorImage')}}
                   @endif
                </div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="position-center">
                        <form  id="addProductForm" action="{{ url('/addCategory') }}" method="POST">
                            @if($id)
                               <input type="hidden" value="{{ $id }}" name="id" >
                            @else
                            <input type="hidden" value="" name="id" >
                            @endif
                            @csrf
                            <div class="form-group">
                                @if (Session::has('errors'))
                                @foreach (Session::get('errors') as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                    {{ Session::forget('errors')}}
                                @endforeach
                                @endif
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success')}}</div>
                                @endif
                              <label for="nameProduct">Name of product:</label>
                              <input name="name" type="text" class="form-control" id="nameProduct" aria-describedby="emailHelp" placeholder="Enter name of product">
                            </div>
                            <div class="form-group">
                              <label for="price">Price:</label>
                              <input type="text" name="price" class="form-control" id="price" placeholder="input price">
                            </div>
                            <div class="form-group">
                                <label for="category">Category:</label>
                                <select name="category" id="category">
                                    <option value="" >Choose category</option>
                                    <option value="Devices">Devices</option>
                                    <option value="Computer">Computer</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Shoes">Shoes</option>
                                </select>
                                 <select name="Sale_id" id="Sale_id">
                                    <option value="" >Choose sale percent</option>
                                    <option value="0">0%</option>
                                    <option value="1">10%</option>
                                    <option value="2">20%</option>
                                    <option value="3">30%</option>
                                </select>
                            </div>
                            <h4>Choose image of product:</h4>
                        </form>
                     
                    </div>
                </div>
                <form class="form-signin text-center" id="user_save_profile_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="position-center" onchange="doAfterSelectImage(this)" type="file" multiple accept=".jpg, .png" id="profile_pic"
                        name="select_file" />
                    <div class="photo-row">
                        <img id="imgProduct" width="300px" height="350px" style="margin-bottom: 10px">       
                    </div>
                        </div>
                    </div>
                </form>
                <div class="container" style="background-color: white">
                <div class="row">
                    <div class="position-center">
                         <button id="submit" class="btn btn-success" style="margin-bottom: 10px;">Submit</button>
                    </div>
                </div>
                </div>
            </div>
           
            <script>
                $('input').on("click",function(){
                        $('.alert').remove();
                });
                function doAfterSelectImage(input) {
                    readURL(input);
                    uploadUserProfileImage();
                }
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("#imgProduct").attr("src",e.target.result );
                            $('#uploadFile').empty();
                            $('#uploadFile').html('Change');
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                function uploadUserProfileImage() {
                    let myForm = document.getElementById('user_save_profile_form');
                    let formData = new FormData(myForm);
                    $.ajax({
                        type: 'POST',
                        data: formData,
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        url: '<?php echo url('/uploadfile') ?>',
                        success: function (response) {
                             
                        }
                    });
                }
                $( "#submit").click(function() {
                    $( "#addProductForm" ).submit();
                  });
            </script>

        </div>
        @endsection
    </section>
</section>
