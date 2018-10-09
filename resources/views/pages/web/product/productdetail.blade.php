@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page"><strong>{{trans('content.product')}} / {{ $product_detail->category_product_name }} / {{ $product_detail->category_subproduct_name }} / {{ $product_detail->name_product }}</strong></p>               
                <hr>
            </div>            
        </section>

        <section class="butonproduct mobileshow">
            <div class="container">
                <div class="buttondrop">
                  <a name="allproduct" href="#allproduct" style="color: white"><button type="button" class="btn" style="width: 100%; background: #1e846e;">{{trans('content.seeall')}}</button></a>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="bungkus col-sm-12">
                        <div class="row">
                            <div class="sidebar col-sm-3 col-md-2 mobilehide">
                                <p><strong>{{trans('content.product')}}</strong></p>
                                <ul class="sidebarsub">
                                     @foreach($catpro as $cats)     
                                        <li class="producttrc">{{$cats->category_product_name}}
                                            <ul class="producttrc-ex">

        <?php $subpro = App\Http\Model\Category_subproduct::all()->where('id_category','=',$cats->id); ?>

                                                @foreach($subpro as $listsub)
                                                    <li><a href="{{url('/product/category/'.$listsub->id)}}">{{$listsub->category_subproduct_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach                        
                                </ul>
                                
                                <?php use Illuminate\Support\Facades\Input; ?>
                                <form method="GET" action="{{url('/product/filter')}}">
                                <div style="width: 100%; height: auto; padding: 5px; font-size: 11px; color: black !important;">
                                        <p>{{trans('content.category')}}</p>
                                        <select name="category" id="" class="form-control" style="margin-bottom: 5px;">
                                            <option value="">{{trans('content.select')}} {{trans('content.category')}}</option>
                                            @foreach($catpro as $cat)
                                                <option value="{{$cat->id}}" {{ (Input::old("category") == $cat->id ? "selected":"") }}>{{$cat->category_product_name}}</option>
                                            @endforeach
                                        </select>
                                        <p>{{trans('content.toy')}}</p>
                                        <select name="mainan" id="" class="form-control" style="margin-bottom: 5px;">
                                            <option value="">{{trans('content.select')}} {{trans('content.toy')}}</option>
                                            @foreach($mainan as $main)
                                                <option value="{{$main->id}}">{{$main->nama_mainan}}</option>
                                            @endforeach
                                        </select>
                                        <p>{{trans('content.backrest')}}</p>
                                        <select name="sandaran" id="" class="form-control" style="margin-bottom: 5px;">
                                            <option value="">{{trans('content.select')}} {{trans('content.backrest')}}</option>
                                            @foreach($sandaran as $sandar)
                                                <option value="{{$sandar->id}}">{{$sandar->nama_sandaran}}</option>
                                            @endforeach
                                        </select>
                                        <p>{{trans('content.tire')}}</p>
                                        <select name="ban" id="" class="form-control" style="margin-bottom: 5px;">
                                            <option value="">{{trans('content.select')}} {{trans('content.tire')}}</option>
                                            @foreach($ban as $ba)
                                                <option value="{{$ba->id}}">{{$ba->nama_ban}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <input class="btn" name="submit" value="Filter" type="submit" style="padding: 5px; width: 100%" >
                                </form>
                            </div>
                            <div class="thumbproduct col-sm-5 col-md-6 col-xs-12">
                                <div class="page">
                                    <div class="sp-loading"><img src="{{asset('/assets/images/sp-loading.gif')}}" alt=""><br>LOADING IMAGES</div>
                                    <div class="sp-wrap">
                                        <a href="{{asset('/asset/img/'.$product_detail->image1)}}"><img src="{{asset('/asset/img/'.$product_detail->image1)}}" alt=""></a>
                                        <a href="{{asset('/asset/img/'.$product_detail->image2)}}"><img src="{{asset('/asset/img/'.$product_detail->image2)}}" alt=""></a>
                                        <a href="{{asset('/asset/img/'.$product_detail->image3)}}"><img src="{{asset('/asset/img/'.$product_detail->image3)}}" alt=""></a>
                                        <a href="{{asset('/asset/img/'.$product_detail->image4)}}"><img src="{{asset('/asset/img/'.$product_detail->image4)}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="detailproduct col-sm-4 col-xs-12">
                                <h3>{{ $product_detail->name_product }}</h3>
                                <p><strong>{{trans('content.price')}}: </strong>Rp. {{ $product_detail->price }}<br>
                                {!! $product_detail->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mobileshow" style="margin-top: 20px;" id="allproduct" name="allproduct">
            <div class="container" style="background: #1e846e">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="titlepro" style="margin-bottom: 20px; margin-top: 20px; color: white;"><p><strong>All Product</strong></p></div>
                        <div class="row">
                            <div class="col-xs-6 allpro">
                                <p><strong>Tricycle</strong></p>
                                <p><a href="#">F1 Series</a></p>
                                <p><a href="#">F5 Series</a></p>
                                <p><a href="#">F7 Series</a></p>
                                <p><a href="#">F8 Series</a></p>
                                <p><a href="#">F9 Series</a></p>

                                <p><strong>Bicycle</strong></p>
                                <p><a href="#">Family bike</a></p>

                                <p><strong>Ride on Car</strong></p>
                                <p><a href="#">FT Series</a></p>
                                
                            </div>
                            <div class="col-xs-6 allpro">
                                <p><strong>Baby Walker</strong></p>
                                <p><a href="#">FB - 1 Series</a></p>
                                <p><a href="#">FB - 2 Series</a></p>
                                <p><a href="#">FB - 3 Series</a></p>
                                <p><a href="#">FB - 5 Series</a></p>
                                <p><a href="#">FB - 7 Series</a></p>

                                <p><strong>Baby Stroller</strong></p>
                                <p><a href="#">CS Series</a></p>
                                <p><a href="#">FS Series</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection