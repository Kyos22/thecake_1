@extends('layout.admin')
@section('content')

<h3 class="display-5" style=" text-align: center">All Orders</h3>
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



<!-- <div class="input-group mb-3">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#" name="keyword">searchbykeyword</a>
    </li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
   
  </ul>
  <form method="get" action="{{url('/admin/searchbykeyword')}}">
  <input type="text" class="form-control" placeholder="search by keywords" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" style="width:300px">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
    </form>
</div> -->



<table class="table table-hover" style="border:1px" style="text-align: left"> <br><br>

  <tr style="border:1px">
    <th>#</th>
    <th>name_customer</th>
    <th>datecreation</th>
    <th>status</th>
    <th>total</th>
    <th>action</th>

  </tr>
  <?php
      $url= $_SERVER['REQUEST_URI'];
      $string = substr($url,23);
      $last=(int)$string;
      $i = $last ? ($last - 1) * 5 + 1 : 1;

  ?>
  @foreach($orders as $order)
  <tr style="text-align: center" style="border:1px" style="text-align: left">
    <td>{{$i++}}</td>

    <td>{{$order -> username}}</a></td>
   
    <td>{{$order -> datecreation}}</td>
    <td>{{$order -> status}}</td>
    <td>{{$order -> total}}</td>
    <td>
    <a href="{{url('/admin/deleteorder/' .$order -> id_order)}}" onclick="return confirm('are you sure ?')" style="margin-right: 10px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
      </svg></a>


    
    </td>
  </tr>
  @endforeach
</table>
<div class="pagination mb-4">
        {{-- previous --}}
        @if ($orders->onFirstPage())
            <span>&laquo;</span>
        @else
            <a href="{{ $orders->previousPageUrl() }}" rel="prev">&laquo;</a>
        @endif
        {{-- Hiển thị các số trang --}}
        @for ($i = 1; $i <= $orders->lastPage(); $i++)
            @if ($i == $orders->currentPage())
                <span class="active">{{ $i }}</span>
            @else
                <a href="{{ $orders->url($i) }}"
                    class="{{ Request::fullUrlIs(url('/admin/showproduct') . '?page=' . $i . '*') ? 'active' : '' }}" style="margin: 0 5px;font-size: 20px;">{{ $i }}
                  </a>
            @endif
        @endfor
        {{-- next --}}
        @if ($orders->hasMorePages())
            <a href="{{ $orders->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
            <span>&raquo;</span>
        @endif
    </div>


<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</body>

</html>
@endsection