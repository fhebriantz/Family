@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">User</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>user</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data user</h3><a href="{{url('/cms/forgotpass/input')}}"><button type="button" style="margin-bottom: 10px;" class="btn btn-success">Add Data</button></a></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                             <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Created Date</th>
                                    <th style="width: 20%;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($user as $user_data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{$user_data->name}}</td>
                                    <td>{{$user_data->username}}</td>
                                    <td>{{$user_data->password}}</td>
                                    <td>{{$user_data->created_at}}</td>
                                    <td style="float: left;">
                                       
                                        <a href="{{url('/cms/forgotpass/'.$user_data->id.'/edit')}}" style="padding-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <form method="POST" action="{{url('/cms/forgotpass/'.$user_data->id.'/delete')}}" class="text-center" style="float: right; padding-left: 10px;">
                                            <!-- csrf perlu ditambahakan di setiap post -->
                                            {{ csrf_field() }}
                                            <input class="btn btn-danger" type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure want to delete {{$user_data->name}}?');"> 
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