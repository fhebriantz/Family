@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Question</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Question</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Question</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                             <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pertanyaan</th>
                                    <th>Email</th>
                                    <th style="width: 21%;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($question as $pertanyaan)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{$pertanyaan->question}}</td>
                                    <td>{{$pertanyaan->email}}</td>
                                    <td>
                                        <form method="POST" action="/family/public/cms/{{ $pertanyaan->id }}/delete" class="text-center" style="float: left; margin: 0px 10px;" >
                                            <!-- csrf perlu ditambahakan di setiap post -->
                                            {{ csrf_field() }}
                                            <input class="btn btn-danger" type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure want to delete question from {{$pertanyaan->email}}?');"> 
                                            <input type="hidden" name="_method" value="DELETE">


                                        </form>
                                        <input class="btn btn-info" type="submit"  name="reply" value="Reply">

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