@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Subroduct</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Product<span class="fa-angle-right fa"></span>Subroduct</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Subroduct</h3>  <a href="{{url('/cms/product/subproduct/input')}}"><button type="button" style="margin-bottom: 10px;" class="btn btn-success">Add Data</button></a></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Subproduct</th>
                                    <th>Category</th>
                                    <th>Created Date</th>
                                    <th>Created By</th>
                                    <th>Modified Date</th>
                                    <th>Modified By</th>
                                    <th style="width: 26%;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($category_subproduct as $subproduct)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{!!$subproduct->category_subproduct_name!!}</td>
                                    <td>{{$subproduct->category_product_name}}</td>
                                    <td>{{$subproduct->created_at}}</td>
                                    <td>{{$subproduct->created_by}}</td>
                                    <td>{{$subproduct->updated_at}}</td>
                                    <td>{{$subproduct->updated_by}}</td>
                                    <td style="float: left;">
                                        <a href="{{url('/cms/product/subproduct/'.$subproduct->id.'/view')}}"><button type="button" class="btn btn-primary">View</button></a>
                                        <a href="{{url('/cms/product/subproduct/'.$subproduct->id.'/edit')}}" style="padding-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <form method="POST" action="{{url('/cms/product/subproduct/'.$subproduct->id.'/delete')}}" class="text-center" style="float: right; padding-left: 10px;">
                                            <!-- csrf perlu ditambahakan di setiap post -->
                                            {{ csrf_field() }}
                                            <input class="btn btn-danger" type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure want to delete {{$subproduct->category_subproduct_name}}?');"> 
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