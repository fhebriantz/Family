@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Forgotpass</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Forgotpass</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Forgotpass</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                             <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Token</th>
                                    <th>Created Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($forgotpass as $pass)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{$pass->email}}</td>
                                    <td>{{$pass->token}}</td>
                                    <td>{{$pass->created_at}}</td>
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