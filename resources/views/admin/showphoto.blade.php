
@extends('layout.admin')
@section('content')
<h3 class="display-5" style=" text-align: center">Cake Photos</h3>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<br>
<div class="input-group mb-3" style="margin-left: auto;margin-right: auto">

    <form method="get" action="{{url('/admin/searchbykeyword_product_inphoto')}}">
  <input type="text" class="form-control" placeholder="search by products" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword_product" style="width:300px">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
    </form>
</div>
<br>
<a href="{{url('/admin/addphoto')}}" class="btn btn-primary btn-lg"> ADD PHOTO</a>

<table class="table table-hover" style="border:1px" style="text-align: left"> <br><br>

    <tr style="border:1px">
        
        <th>id_product</th>
        <th>name_photo</th>
        <th>action</th>
        
    </tr>
    @foreach($photos as $photo)
        <tr style="text-align: center" style="border:1px" style="text-align: left">
            
            <td>{{$photo -> name_product}}</td>
            
            <td><img src="{{asset('images/' .$photo -> name_photo)}}" width="70" height="100"></td>
            <td><a class="btn btn-primary" href="/admin/deletephoto/{{$photo->id_photo}}">Delete</a></td>
            
        </tr>
    @endforeach
</table>


<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</body>
</html>
@endsection
