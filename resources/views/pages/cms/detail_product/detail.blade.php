@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Product Detail</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Category<span class="fa-angle-right fa"></span>Subcategory<span class="fa-angle-right fa"></span>Product Detail</span></p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Product Detail</h3>  
                    <a href="{{url('/cms/product/subproduct/detail/input')}}"><button type="button" class="btn btn-success" style="margin-bottom: 10px;">Add Data</button></a>
                    @if($is_hide->hide_price == 0)
                    <a href="{{url('/cms/product/hide_price')}}"><button type="button" class="btn btn-default" style="margin-bottom: 10px; background-color: #bbb !important; color: #fff !important;">Hide Price</button></a>
                    @else
                    <a href="{{url('/cms/product/show_price')}}"><button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Show Price</button></a>
                    @endif
                </div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Category</th>
                                    <th>Subcategory</th>
                                    <th>Harga</th>
                                    <th>Created Date</th>
                                    <th>Created By</th>
                                    <th>Modified Date</th>
                                    <th>Modified By</th>
                                    <th style="width: 40%;">Action</th>


                                </tr>
                            </thead>

                            <tbody>
                                @foreach($product_detail as $detail)
                                <tr>
                                    <td>{{ $no++ }}</td>                           
                                    <td>{{$detail->name_product}}</td>
                                    <td>{{$detail->category_product_name}}</td>
                                    <td>{{$detail->category_subproduct_name}}</td>
                                    <td>{{$detail->price}}</td>
                                    <td>{{$detail->created_at}}</td>
                                    <td>{{$detail->created_by}}</td>
                                    <td>{{$detail->updated_at}}</td>
                                    <td>{{$detail->updated_by}}</td>


                                    <td style="float: left;">
                                        <a href="{{url('/cms/product/subproduct/detail/'.$detail->id.'/view')}}"><button type="button" class="btn btn-primary">View</button></a>
                                        <a href="{{url('/cms/product/subproduct/detail/'.$detail->id.'/edit')}}" style="padding-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <form method="POST" action="{{url('/cms/product/subproduct/detail/'.$detail->id.'/delete')}}" class="text-center" style="float: right; padding-left: 10px;">
                                            <!-- csrf perlu ditambahakan di setiap post -->
                                            {{ csrf_field() }}
                                            <input class="btn btn-danger" type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure want to delete {{$detail->name_product}}?');"> 
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection