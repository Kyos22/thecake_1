
@extends('layout.admin')
@section('content')

<h3 class="display-5" style=" text-align: center">Cake products</h3>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!-- plugins:css -->
<link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/jvectormap/jquery-jvectormap.css')}}">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{asset('css/demo/style.css')}}">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<br>

<div class="input-group mb-3" style="margin-left: auto;margin-right: auto">

    <form method="get" action="{{url('/admin/searchbykeyword')}}">
  <input type="text" class="form-control" placeholder="search by products" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" style="width:300px">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
    </form>
</div>

<div class="input-group mb-3" style="margin:right">
    <form method="get" action="{{url('/admin/searchbykeyword_categoryinshowproduct')}}">
  <input type="text" class="form-control" placeholder="search by categories" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword_category" style="width:300px">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
    </form>
</div>


<a href="{{url('/admin/add')}}" class="btn btn-primary btn-lg" > ADD PRODUCT</a>

<table class="table table-hover" style="border:1px" style="text-align: left"> <br><br>

    <tr style="border:1px">
        <th >id</th>
        <th>name_product</th>
        <th>detail</th>
        <th>price</th>
        <th>photo</th>
        <th>id_category</th>
        <th>Action</th>
    </tr>
    @foreach($product_inner as $product)
        <tr style="text-align: center" style="border:1px" style="text-align: left">
            <td>{{$product -> id_product}}</td>
            <td> <a href="{{url('/admin/detailproduct/'.$product ->id_product)}}">{{$product -> name_product}}</a></td>
            <td>{{$product -> detail_product}}</td>
            <td>{{$product -> price}}</td>
            <td><img src="{{asset('images/' .$product -> photo)}}" width="70" height="100"></td>
            <td>{{$product -> name_category}}</td>
            <td>
              <a class="btn btn-primary" type="button" href="{{url('/admin/deleteproduct/' .$product -> id_product)}}"
              onclick="return confirm('are you sure ?')">DELETE</a>
              <a class="btn btn-primary" type="button" href="{{url('/admin/editproduct/' .$product -> id_product)}}">EDIT</a>
                </td>
        </tr>
    @endforeach
</table>


<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</body>
</html>
@endsection
