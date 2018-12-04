@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Contact</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Contact</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
               
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>Created Date</th>
                                    <th>Created By</th>
                                    <th>Modified Date</th>
                                    <th>Modified By</th>
                                    <th style="width: 26%;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($contact as $kontak)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{$kontak->title}}</td>
                                    <td>{!!$kontak->desc!!}</td>
                                    <td>{{$kontak->created_at}}</td>
                                    <td>{{$kontak->created_by}}</td>
                                    <td>{{$kontak->updated_at}}</td>
                                    <td>{{$kontak->updated_by}}</td>
                                    <td style="float: left;">
                                    
                                        <a href="{{url('/cms/contact/'.$kontak->id.'/edit')}}" style="padding-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>
                                        
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