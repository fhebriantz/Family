@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Widget</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Widget</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Widget</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Widget</th>
                                    <th>Modified Date</th>
                                    <th>Modified By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($widget as $widget)
                                <tr>
                                    <td>{{$widget->description}}</td>
                                    <td>{!!$widget->embed_text!!}</td>
                                    <td>{{$widget->updated_at}}</td>
                                    <td>{{$widget->updated_by}}</td>
                                    <td style="float: left;">
                                       
                                        <a href="{{url('/cms/widget/'.$widget->id.'/edit')}}" style="padding-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>
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