@extends('layoutsuser.appuser')
@section('main')
<div class="container">
                <div class="section-title">
                    <h1>News</h1>
                </div>
                <div class="row blog-grid">
                @foreach($bloglist as $each)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 blog-widget">
                        <div class="blog-card">
                            <div class="blog-card-inner">
                                <div class="blog-card-image">
                                    <a href="{{url('/pages/bloglistuser/'.$each->id_blog)}}">
                                        <img src="{{asset('images/' .$each -> photo)}}" alt="It’s More than Just a Chocolate with Heart Shape" class="default-img" loading="lazy">
                                    </a>
                                </div>
                                <div class="blog-card-content">
                                    <span class="sub-title">{{$each -> type}}</span>
                                    <div class="blog-card-top">
                                        <div class="section-title">
                                            <h4><a href="{{url('/pages/bloglistuser/'.$each->id_blog)}}">{{$each -> article}}</a></h4>
                                        </div>
                                        <p>
                                        {{$each -> content}}

                                        </p>
                                    </div>
                                    <div class="blog-card-bottom">
                                        <a href="{{url('/pages/bloglistuser/'.$each->id_blog)}}" class=" btn"> Read More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.18164 3.99989C0.181641 3.82416 0.324095 3.68171 0.499822 3.68171L6.73168 3.68171L4.72946 1.67942C4.60521 1.55516 4.60521 1.3537 4.72947 1.22944C4.85373 1.10519 5.05519 1.10519 5.17945 1.22945L7.72482 3.7749C7.84907 3.89916 7.84907 4.10062 7.72482 4.22487L5.17945 6.77033C5.05519 6.89459 4.85373 6.89459 4.72947 6.77034C4.60521 6.64608 4.60521 6.44462 4.72946 6.32036L6.73168 4.31807L0.499822 4.31807C0.324095 4.31807 0.181641 4.17562 0.18164 3.99989Z" fill="white"></path>
                                            </svg>
                                        </a><span class="date"><time datetime="2022-05-26T05:17:40Z">{{DateTime::createFromFormat('Y-m-d',$each->created)->format('d/F/Y')}}</time></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            @endsection