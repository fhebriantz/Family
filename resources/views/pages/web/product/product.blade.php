@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin" id="ontop">
            <div class="container">
                <hr>
                <p class="title-page fonttitle"><strong>{{trans('content.product')}}
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
                                        <select name="category" id="category" class="form-control" style="margin-bottom: 5px;">
                                            <option value="">{{trans('content.select')}} {{trans('content.category')}}</option>
                                            @foreach($catpro as $cat)
                                                <option value="{{$cat->id}}" {{ (Input::old("category") == $cat->id ? "selected":"") }}>{{$cat->category_product_name}}</option>
                                            @endforeach
                                        </select>
                                        <p>{{trans('content.toy')}}</p>
                                        <select name="mainan" id="mainan" class="form-control" style="margin-bottom: 5px;">
                                            <option value="">{{trans('content.select')}} {{trans('content.toy')}}</option>
                                        </select>
                                        <div style="display: none;">
	                                        <p>{{trans('content.backrest')}}</p>
	                                        <select name="sandaran" id="" class="form-control" style="margin-bottom: 5px;">
	                                            <option value="">{{trans('content.select')}} {{trans('content.backrest')}}</option>
	                                            @foreach($sandaran as $sandar)
	                                                <option value="{{$sandar->id}}">{{$sandar->nama_sandaran}}</option>
	                                            @endforeach
	                                        </select>
                                        </div>
                                        <p>{{trans('content.tire')}}</p>
                                        <select name="ban" id="ban" class="form-control" style="margin-bottom: 5px;">
                                            <option value="">{{trans('content.select')}} {{trans('content.tire')}}</option>
                                        </select>

                                        <p>{{trans('content.sortby')}}</p>
                                        <select name="sortby" id="" class="form-control" style="margin-bottom: 5px;">
                                            <option value="">{{trans('content.select')}} {{trans('content.category')}}</option>
                                            <option value="1">Name A-Z</option>
                                            <option value="2">Name Z-A</option>
                                            <option value="3">Date A-Z</option>
                                            <option value="4">Date Z-A</option>
                                        </select>

                                {{csrf_field()}}
                                </div>
                                <input class="btn filter-btn" name="submit" value="Filter" type="submit" style="padding: 5px; width: 100%" >
                                </form>
                                
                            </div>
                            <div class="col-sm-9 col-md-10">
                                <div class="row">
                                    <div class="box-wrapper fonttitle"> 
                                        <div style="margin-left: 15px;">
                                        @if (Session::has('flash_category') || Session::has('flash_mainan') || Session::has('flash_ban') || Session::has('flash_sandaran'))
                                        Filter : 
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


                                            @if (Session::has('flash_sortby'))
                                            {{ Session::get('flash_sortby') }}
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
                                                    <div class="descproducts  fonttitle">
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
<!-- ================================================================== Button Fixed bottom -->
        <section class="mobileshow sticky" id="fix-popup">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <a class="" data-fancybox data-src="#popup-product" href="javascript:;" style="color: #989898">
                            <button class="btn" style="width: 100%; background: #dcdcdc;">Product</button>
                        </a>
                    </div>
                    <div class="col-xs-6">
                         <a class="" data-fancybox data-src="#popup-filter" href="javascript:;" style="color: #989898">
                            <button class="btn" style="width: 100%; background: #dcdcdc;">Filter</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
<!-- ================================================================== Button Fixed End -->
<!-- ===================================================================== Start Popup Product -->
                                    <div class="div-expand"  id="popup-product">
                                            <div style="width: 100%; height: auto; padding: 5px; font-size: 14px;">
                                                <div class="titlepro" style="margin-bottom: 10px; color: white;"><p class=" fonttitle"><strong>All Product</strong></p></div>
                                                        <ul class="ul-pop">
                                                        @foreach($catpro as $cats)     
                                                            <li class="li-pop"> 
                                                                <a class="collapsed" href="#expand-{{$cats->id}}" id="more" data-toggle="collapse"> <strong>{{$cats->category_product_name}}</strong>
                                                                    
                                                                </a>
                                                                <ul id="expand-{{$cats->id}}" class="collapse">

                                <?php $subpro = App\Http\Model\Category_subproduct::all()->where('id_category','=',$cats->id); ?>

                                                                    @foreach($subpro as $listsub)
                                                                        <li class="li-isi"><a href="{{url('/product/category/'.$listsub->id)}}">{{$listsub->category_subproduct_name}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                           
                                                        @endforeach                             
                                                        </ul>
                                            </div>
                                    </div>   
<!-- ===================================================================== End Popup Product -->

<!-- ====================================================================== Start Popup Filter -->
                                     <div class="div-expand"  id="popup-filter">
                                        <form method="GET" action="{{url('/product/filter')}}">
                                            <div style="width: 100%; height: auto; padding: 5px; font-size: 14px; color: #fed400 !important;">
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
                                                    <div style="display: none;">
                                                    <p>{{trans('content.backrest')}}</p>
                                                    <select name="sandaran" id="" class="form-control" style="margin-bottom: 5px;">
                                                        <option value="">{{trans('content.select')}} {{trans('content.backrest')}}</option>
                                                        @foreach($sandaran as $sandar)
                                                            <option value="{{$sandar->id}}">{{$sandar->nama_sandaran}}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                    <p>{{trans('content.tire')}}</p>
                                                    <select name="ban" id="" class="form-control" style="margin-bottom: 5px;">
                                                        <option value="">{{trans('content.select')}} {{trans('content.tire')}}</option>
                                                        @foreach($ban as $ba)
                                                            <option value="{{$ba->id}}">{{$ba->nama_ban}}</option>
                                                        @endforeach
                                                    </select>
                                                    <p>{{trans('content.sortby')}}</p>
                                                    <select name="sortby" id="" class="form-control" style="margin-bottom: 5px;">
                                                        <option value="">{{trans('content.select')}} {{trans('content.category')}}</option>
                                                        <option value="1">Name A-Z</option>
                                                        <option value="2">Name Z-A</option>
                                                        <option value="3">Date A-Z</option>
                                                        <option value="4">Date Z-A</option>
                                                    </select>
                                            </div>
                                            <input class="btn" name="submit" value="Filter" type="submit" style="padding: 5px; width: 100%" >
                                        </form>
                                    </div>   
<!-- ====================================================================== END Popup Filter -->

        <div class="buttondrop mobileshow" id="allproduct" style="padding: 15px">
            <a name="allproduct" href="#ontop" style="color: white"><button type="button" class="btn" style="width: 100%; background: #1e846e;">{{trans('content.backtop')}}</button></a>
        </div>
@endsection

@section('marginbottom')
<div class="mobileshow" style="margin-bottom: 24px">.</div>
@endsection

@section('scripts')
<script>
    $('#category').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-mainan?cat_id=' + cat_id, function(data){
        // success data
        $('#mainan').empty();
        $.each(data, function(index, mainanObj){

          $('#mainan').append('<option value="'+mainanObj.id+'">'+mainanObj.nama_mainan+'</option>');

        });

      });

    });

    $('#category').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-ban?cat_id=' + cat_id, function(data){
        // success data
        $('#ban').empty();
        $.each(data, function(index, banObj){

          $('#ban').append('<option value="'+banObj.id+'">'+banObj.nama_ban+'</option>');

        });

      });

    });
  </script>
@endsection