@extends('layout.admin')
@section('content')
<h3>Edit Product</h3>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<form method="post" action="{{url('/admin/update_product/'.$product->id_product )}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="exampleInputName_Product1">Name Product</label>
    <input type="Name_Product" class="form-control" id="exampleInputName_product" aria-describedby="Name_Product" placeholder="Name_Product" name="name_product" value="{{$product -> name_product}}" >
    <small id="Name_Product" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputDetails_Product">Detail Product</label>
    <input type="Details_Product" class="form-control" id="exampleInputDetails_product" aria-describedby="Details_Product" placeholder="Details_Product" name="detail_product" value="{{$product -> detail_product}}">
    <small id="Details_Product" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPrice">Price</label>
    <input type="Price" class="form-control" id="exampleInputPrice" aria-describedby="Price" placeholder="Price" name="price" value="{{$product -> price}}">
    <small id="Price" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPhoto">Photo</label>
    <!-- <input type="file" class="form-control" id="exampleInputPhoto" placeholder="Photo" name="photo"> -->
    <input type="file" class="form-control" id="exampleInputPhoto" placeholder="Photo" accept="image/*" name="photo" >
    @error('photo')
    <span style="color: red;font-weight: bold;">No image</span>
    @enderror
    <img src="{{asset('images/' .$product -> photo)}}" width="70" height="70">
  </div>
  <div class="form-group">
    <label for="exampleInputID_Category">ID Category</label>
    
   
    <select name="id_category"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
        @foreach($list_cates as $list_cate)
        @if($list_cate->id_category==$product->id_category)
        <option selected value="{{$list_cate -> id_category}}"> {{$list_cate->name_category}}</option>
        @else
        <option  value="{{$list_cate -> id_category}}"> {{$list_cate->name_category}}</option>
        @endif
        @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <input type="hidden" name="id_product" value="{{$product -> id_product}}">
</form>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</body>
</html>
@endsection
