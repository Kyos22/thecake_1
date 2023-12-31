
@extends('layout.admin')
@section('content')

<h3 class="display-5" style=" text-align: center">{{$category -> name_category}}</h3>
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

<a href="{{url('/admin/showcategory')}}" class="btn btn-primary btn-lg" > Show Category -></a>

<table class="table table-hover" style="border:1px" style="text-align: left"> <br><br>

    <tr style="border:1px">
        <th >id_category</th>
        <th>name_category</th>
        <th>name_product</th>       
    </tr>
    <tr style="text-align: center" style="border:1px" style="text-align: left">
            <td>{{$category-> id_category}}</td>
            <td>{{$category -> name_category}}</td>
            <td>
            @foreach($product as $prd)
            
                
                <ul style="list-style-type: none">
                    <li>{{$prd -> name_product}}</li>
                </ul>
    
                <!-- <ul style="list-style-type: none">
                    <li><a href="{{url('/admin/detailproduct/'.$prd ->id_product)}}"{{$prd -> name_product}}</li>
                </ul> -->
            
             @endforeach
            </td>
    </tr>
    
</table>


<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</body>
</html>
@endsection
