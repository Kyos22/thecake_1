@extends('layout.admin')
@section('content')

<h3 class="display-5" style=" text-align: center">Cake Blog</h3>
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


<div class="input-group mb-3" style="margin:right">
  <form method="get" action="{{url('/admin/searchbykeyword_categoryinshowcategory')}}">
    <input type="text" class="form-control" placeholder="search by categories" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword_category" style="width:300px">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
  </form>
</div>
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

<a href="{{url('/admin/addblog')}}" class="btn btn-primary btn-lg"> NEW BLOG &plus;</a>

<table class="table table-hover" style="border:1px" style="text-align: left"> <br><br>

  <tr style="border:1px">
    <th>id_blog</th>
    <th>article</th>
    <th>content</th>
    <th>created</th>
    <th>photo</th>
    <th>type</th>
    <th>action</th>


  </tr>
  @foreach($blog as $each)
  <tr style="text-align: center" style="border:1px" style="text-align: left">
    <td>{{$each -> id_blog}}</td>
    <td><a href="{{url('/admin/detailblog/'.$each ->id_blog)}}">{{$each -> article}}</a></td>
    
    <td style="max-width: 300px; word-break: break-all;">
            <?php
                $content = $each -> content;
                if (mb_strlen($content) > 50) {
                    $content = mb_substr($content, 0, 50) . '...';
                }
                echo $content;
            ?>
        </td>
        
    
    <td>{{DateTime::createFromFormat('Y-m-d',$each->created)->format('d/F/Y')}}</td>
    <td><img src="{{asset('images/' .$each -> photo)}}" width="70" height="100"></td>
    <td>{{$each ->type}}</td>
    <td>
      
    <a href="{{url('/admin/deleteblog/' .$each -> id_blog)}}" onclick="return confirm('are you sure ?')" style="margin-right: 10px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
      </svg></a>


    <a href="{{url('/admin/editblog/' .$each -> id_blog)}}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
      </svg>
    </a>
    </td>

  </tr>
  @endforeach
</table>
<div class="pagination mb-4">
        {{-- previous --}}
        @if ($blog->onFirstPage())
            <span>&laquo;</span>
        @else
            <a href="{{ $blog->previousPageUrl() }}" rel="prev">&laquo;</a>
        @endif
        {{-- Hiển thị các số trang --}}
        @for ($i = 1; $i <= $blog->lastPage(); $i++)
            @if ($i == $blog->currentPage())
                <span class="active">{{ $i }}</span>
            @else
                <a href="{{ $blog->url($i) }}"
                    class="{{ Request::fullUrlIs(url('/admin/showblog') . '?page=' . $i . '*') ? 'active' : '' }}" style="margin: 0 5px;font-size: 20px;">{{ $i }}
                  </a>
            @endif
        @endfor
        {{-- next --}}
        @if ($blog->hasMorePages())
            <a href="{{ $blog->nextPageUrl() }}" rel="next">&raquo;</a>
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