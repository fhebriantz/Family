@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Slider Text</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Slider Text</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Slider Text</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Slider Text</th>
                                    <th>Text</th>
                                    <th>Created Date</th>
                                    <th>Created By</th>
                                    <th>Modified Date</th>
                                    <th>Modified By</th>
                                    <th style="width: 25%;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($slidertext as $slide)
                                <tr>    
                                    <td>{{ $no++ }}</td>
                                    <td>{{$slide->type}}</td>
                                    <td>{{$slide->text}}</td>
                                    <td>{{$slide->created_at}}</td>
                                    <td>{{$slide->created_by}}</td>
                                    <td>{{$slide->updated_at}}</td>
                                    <td>{{$slide->updated_by}}</td>
                                    <td style="float: left;">
                                        <a href="{{url('/cms/slidertext/'.$slide->id.'/edit')}}" style="padding-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>                               
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