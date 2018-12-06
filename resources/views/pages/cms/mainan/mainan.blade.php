@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated maindeInLeft">Mainan</h3>
                <p class="animated maindeInDown">CMS <span class="main-angle-right main"></span>Mainan</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Mainan</h3>  <a href="{{url('/cms/mainan/input')}}"><button type="button" style="margin-bottom: 10px;" class="btn btn-success">Add Data</button></a></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mainan</th>
                                    <th>Category</th>
                                    <th>Created Date</th>
                                    <th>Created By</th>
                                    <th>Modified Date</th>
                                    <th>Modified By</th>
                                    <th style="width: 26%;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($mainan as $main)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{$main->nama_mainan}}</td>
                                    <td>{{$main->category_product_name}}</td>
                                    <td>{{$main->created_at}}</td>
                                    <td>{{$main->created_by}}</td>
                                    <td>{{$main->updated_at}}</td>
                                    <td>{{$main->updated_by}}</td>
                                    <td style="float: left;">
                                        <a href="{{url('/cms/mainan/'.$main->id.'/edit')}}" style="padding-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <form method="POST" action="{{url('/cms/mainan/'.$main->id.'/delete')}}" class="text-center" style="float: right; padding-left: 10px;">
                                            <!-- csrf perlu ditambahakan di setiap post -->
                                            {{ csrf_field() }}
                                            <input class="btn btn-danger" type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure want to delete question {{$main->nama_mainan}}?');"> 
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