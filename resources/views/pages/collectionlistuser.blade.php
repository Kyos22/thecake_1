@extends('layoutsuser.appuser')
@section('main')
<div class="collection-list">
                <div class="container">
                    <div class="section-title">
                        <h2 class="text-center">Collections</h2>
                    </div>
                    <div class="row" role="list">
                        @foreach($listcakes as $cake)
                        <div class="col-md-3 col-sm-4 col-12">
                            <div class="card-wrapper">
                                <div class="card-media">
                                    <a href="{{url('/allcategories/cateproductuser/'.$cake->name_category)}}">
                                        <img src="{{asset('images/' .$cake -> avatar_category)}}" alt="cakes" loading="lazy">
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h5 class="card-heading">
                                        <a href="{{url('/allcategories/cateproductuser/'.$cake->name_category)}}" class="full-unstyled-link">{{$cake -> name_category}}</a>
                                    </h5>
                                    
                                </div>

                            </div>

                        </div>
                    @endforeach
                    @foreach($listcakeevents as $cake)
                        <div class="col-md-3 col-sm-4 col-12">
                            <div class="card-wrapper">
                                <div class="card-media">
                                    <a href="{{url('/allcategories/cateproductuser/'.$cake->name_category)}}">
                                        <img src="{{asset('images/' .$cake -> avatar_category)}}" alt="cakes" loading="lazy">
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h5 class="card-heading">
                                        <a href="{{url('/allcategories/cateproductuser/'.$cake->name_category)}}" class="full-unstyled-link">{{$cake -> name_category}}</a>
                                    </h5>
                                    
                                </div>

                            </div>

                        </div>
                    @endforeach
                        
                    </div>
                </div>
            </div>
            @endsection
