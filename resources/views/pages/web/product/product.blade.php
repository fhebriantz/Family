@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin" id="ontop">
            <div class="container">
                <hr>
                <p class="title-page"><strong>{{trans('content.product')}}
                @if($allcat!=null || $allcat!="" )
                @endif
                @if($cat!=null || $cat!="" )
                 / {{$cat->category_product_name}}
                @endif
                @if($subcat!=null || $subcat!="" )
                 / {{$subcat->category_product_name}} / {{$subcat->category_subproduct_name}}
                @endif
                </strong></p>                
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
                            <div class="col-sm-9 col-md-10">
                                <div class="row">
                                    <div class="box-wrapper"> 
                                        <div style="margin-left: 15px;">
                                        @if (Session::has('flash_category') || Session::has('flash_mainan') || Session::has('flash_ban') || Session::has('flash_sandaran'))
                                        TAG : 
                                            @if (Session::has('flash_category'))
                                            {{ Session::get('flash_category') }},
                                            @endif

                                            @if (Session::has('flash_mainan'))
                                            {{ Session::get('flash_mainan') }},
                                            @endif

                                            @if (Session::has('flash_ban'))
                                            {{ Session::get('flash_ban') }},
                                            @endif

                                            @if (Session::has('flash_sandaran'))
                                            {{ Session::get('flash_sandaran') }}
                                            @endif
                                        @endif

                                            <h3>{{$product_detail->total()}} Total {{trans('content.productlow')}}</h3>
                                            <p>{{$product_detail->count()}} {{trans('content.productlow')}} {{trans('content.thispage')}}</p>
                                        </div>
                                        @foreach($product_detail as $detail)
                                        <div class="col-sm-4 col-md-3 product">
                                            <a href="{{url('/product/'.$detail->id)}}">
                                                <div class="product-box" style="overflow: hidden;">
                                                    <div class="mobiles" style="overflow: hidden;">
                                                        <img src="{{asset('/asset/img/'.$detail->image1)}}">
                                                    </div>
                                                    <div class="descproducts">
                                                        <h4>{{$detail->name_product}}</h4>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </a>
                                        </div> 
                                        @endforeach 
                                    </div>
                                </div>
                                <div class="center" >
                                      <div class="pagination">
                                        {{$product_detail->links()}}           
                                      </div><!--pagination-->
                                    </div> <!--center--> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mobileshow" style="margin-top: 20px;" id="allproduct" name="allproduct">
            <div class="container" style="background: #1e846e">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="titlepro" style="margin-bottom: 20px; margin-top: 20px; color: white;"><p><strong>All Product</strong></p></div>
                        <div class="row">
                            <div class="col-xs-12 allpro">
                                <div class="sidebar col-sm-3 col-md-2 mobileshow">
                                <ul class="sidebarsub">
                                @foreach($catpro as $cats)     
                                    <li class="producttrc" style="color: #fed400; font-size: 16px;">{{$cats->category_product_name}} 
                                        <ul class="producttrc-ex">

        <?php $subpro = App\Http\Model\Category_subproduct::all()->where('id_category','=',$cats->id); ?>

                                            @foreach($subpro as $listsub)
                                                <li><a href="{{url('/product/category/'.$listsub->id)}}">{{$listsub->category_subproduct_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach                          
                                </ul>
                            </div> 
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <div class="buttondrop mobileshow" style="padding: 15px">
            <a name="allproduct" href="#ontop" style="color: white"><button type="button" class="btn" style="width: 100%; background: #1e846e;">{{trans('content.backtop')}}</button></a>
        </div>
@endsection