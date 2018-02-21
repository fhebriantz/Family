@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
					

                    <table id="table1" border="1" width="100%">

                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Frame</th>
                                <th>Fork</th>
                                <th>Brakes Rear</th>
                                <th>Brakes Levers</th>
                                <th>Pedals</th>
                                <th>Crankset</th>
                                <th>Bottom Bracket</th>
                                <th>Chain</th>
                                <th>Cassete</th>
                                <th>Rim</th>
                                <th>Saddle</th>
                                <th>Seatpot</th>
                                <th>Stem</th>
                                <th>Handlebar</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($product_detail as $detail)
                            <tr>
                                <td>{{$detail->name_product}}</td>
                                <td>{{$detail->price}}</td>
                                <td>{{$detail->frame}}</td>
                                <td>{{$detail->fork}}</td>
                                <td>{{$detail->brakes_rear}}</td>
                                <td>{{$detail->brakes_levers}}</td>
                                <td>{{$detail->pedals}}</td>
                                <td>{{$detail->crankset}}</td>
                                <td>{{$detail->bottom_bracket}}</td>
                                <td>{{$detail->chain}}</td>
                                <td>{{$detail->cassete}}</td>
                                <td>{{$detail->rim}}</td>
                                <td>{{$detail->saddle}}</td>
                                <td>{{$detail->seatpot}}</td>
                                <td>{{$detail->stem}}</td>
                                <td>{{$detail->handlebar}}</td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection