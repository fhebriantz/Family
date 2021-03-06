@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin"  id="ontop">
            <div class="container">
                <hr>
                <p class="title-page  fonttitle"><strong>{{trans('content.product')}} / {{ $product_detail->category_product_name }} / {{ $product_detail->category_subproduct_name }} / {{ $product_detail->name_product }}</strong></p>               
                <hr>
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
                                        <ul class="producttrc-ex"
    
    @if($product_detail->id_category == $cats->id)
    style="display: block;"
    @else
    @endif>

        <?php $subpro = App\Http\Model\Category_subproduct::all()->where('id_category','=',$cats->id); ?>

                                            @foreach($subpro as $listsub)
                                                <li><a href="{{url('/product/category/'.$listsub->id)}}" 

    @if($product_detail->id_category_sub == $listsub->id)
    style="color: #eac000"
    @else
    @endif

                                                    >{{$listsub->category_subproduct_name}}</a></li>
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
                                <input class="btn" name="submit" value="Filter" type="submit" style="padding: 5px; width: 100%" >
                                </form>
                            </div>
                            <div class="thumbproduct col-sm-5 col-md-6 col-xs-12">
                                <div class="page">
                                    <div class="sp-loading"><img src="{{asset('assets/images/sp-loading.gif')}}" alt=""><br>LOADING IMAGES</div>
                                    <div class="sp-wrap">
                                        <a href="{{asset('/asset/img/'.$product_detail->image1)}}"><img src="{{asset('/asset/img/'.$product_detail->image1)}}" alt=""></a>
                                        <a href="{{asset('/asset/img/'.$product_detail->image2)}}"><img src="{{asset('/asset/img/'.$product_detail->image2)}}" alt=""></a>
                                        <a href="{{asset('/asset/img/'.$product_detail->image3)}}"><img src="{{asset('/asset/img/'.$product_detail->image3)}}" alt=""></a>
                                        <a href="{{asset('/asset/img/'.$product_detail->image4)}}"><img src="{{asset('/asset/img/'.$product_detail->image4)}}" alt=""></a>
                                        <a href="{{asset('/asset/img/'.$product_detail->image5)}}"><img src="{{asset('/asset/img/'.$product_detail->image5)}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="detailproduct col-sm-4 col-xs-12">
                                <h3 class="  fonttitle">{{ $product_detail->name_product }}</h3>
                                @if ($product_detail->hide_price == 1)
                                @else
                                <p> <strong>{{trans('content.price')}}: </strong>Rp. {{ $product_detail->price }}</p>
                                @endif 
                                {!! $product_detail->description !!}
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
                        <a class="" data-fancybox data-src="#popup-product" href="javascript:;" style="color: #000">
                            <button class="btn btn-product" >Product</button>
                        </a>
                    </div>
                    <div class="col-xs-6">
                         <a class="" data-fancybox data-src="#popup-filter" href="javascript:;" style="color: #000">
                            <button class="btn btn-product">Filter</button>
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
                                                                <ul id="expand-{{$cats->id}} " class="collapse"
    @if($product_detail->id_category == $cats->id)
    style="display: block;"
    @else
    @endif
                                                                    >

                                <?php $subpro = App\Http\Model\Category_subproduct::all()->where('id_category','=',$cats->id); ?>

                                                                    @foreach($subpro as $listsub)
                                                                        <li class="li-isi"><a href="{{url('/product/category/'.$listsub->id)}}"

    @if($product_detail->id_category_sub == $listsub->id)
    style="color: #00ffde !important;
    font-weight: bold;"
    @else
    @endif
                                                                    >{{$listsub->category_subproduct_name}}</a></li>
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
                                                    <select name="category" id="categorys" class="form-control" style="margin-bottom: 5px;">
                                                        <option value="">{{trans('content.select')}} {{trans('content.category')}}</option>
                                                        @foreach($catpro as $cat)
                                                            <option value="{{$cat->id}}" {{ (Input::old("category") == $cat->id ? "selected":"") }}>{{$cat->category_product_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <p>{{trans('content.toy')}}</p>
                                                    <select name="mainan" id="mainans" class="form-control" style="margin-bottom: 5px;">
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
                                                    <select name="ban" id="bans" class="form-control" style="margin-bottom: 5px;">
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
                                            </div>
                                            <input class="btn" name="submit" value="Filter" type="submit" style="padding: 5px; width: 100%" >
                                        </form>
                                    </div>   
<!-- ====================================================================== END Popup Filter -->
@endsection
@section('scripts')
<script type="text/javascript">
            $('li.producttrc').click(function() {
               $('li.producttrc').not(this).find('ul').hide();
               $(this).find('ul').toggle();
            });
</script>
<script type="text/javascript">
            $('.li-pop').click(function() {
               $('.li-pop').not(this).find('ul').hide();
               $(this).find('ul').toggle();
            });
</script>

<script>
    $('#category').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-mainan?cat_id=' + cat_id, function(data){
        // success data
        $('#mainan').empty();
        $('#mainan').append('<option value="">{{trans('content.select')}} {{trans('content.toy')}}</option>');
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
        $('#ban').append('<option value="">{{trans('content.select')}} {{trans('content.tire')}}</option>');
        $.each(data, function(index, banObj){

          $('#ban').append('<option value="'+banObj.id+'">'+banObj.nama_ban+'</option>');

        });

      });

    });

    $('#categorys').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-mainan?cat_id=' + cat_id, function(data){
        // success data
        $('#mainans').empty();
        $('#mainans').append('<option value="">{{trans('content.select')}} {{trans('content.toy')}}</option>');
        $.each(data, function(index, mainanObj){

          $('#mainans').append('<option value="'+mainanObj.id+'">'+mainanObj.nama_mainan+'</option>');

        });

      });

    });

     $('#categorys').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-ban?cat_id=' + cat_id, function(data){
        // success data
        $('#bans').empty();
        $('#bans').append('<option value="">{{trans('content.select')}} {{trans('content.tire')}}</option>');
        $.each(data, function(index, banObj){

          $('#bans').append('<option value="'+banObj.id+'">'+banObj.nama_ban+'</option>');

        });

      });

    });
  </script>
@endsection