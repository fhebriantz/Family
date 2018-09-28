@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin" id="ontop">
            <div class="container">
                <hr>
                <p class="title-page"><strong><a style="color: #0cb14b; text-decoration: none;" href="{{url('/product')}}">{{trans('content.product')}}</a></strong></p>               
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
                            </div>
                            <div class="col-sm-9 col-md-10">
                                <div class="row">
                                    <div class="box-wrapper"> 
                                        <div style="margin-left: 15px;">
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