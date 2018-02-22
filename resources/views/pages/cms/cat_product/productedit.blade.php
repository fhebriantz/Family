
@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Product</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Product<span class="fa-angle-right fa"></span>Edit</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Product</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    	<form method="POST" action="/family/public/cms/product/{{ $product_data->id }}/edit">
						{{ csrf_field() }}
	                        <table class="table">
							<tr>
								<td>Nama Product</td>
								<td><input type="text" name="category_product_name" placeholder="Nama Product" value="{{ $product_data->category_product_name }}" style="width: 100%"><p style="color: red">{{ session('status')}}</p></td>
							</tr>

							<tr>
								<td></td>
								<td><input class="btn btn-info" name="submit" value="submit" type="submit"></td>
							</tr>
						</table>
						<input type="hidden" name="_method" value="PUT">
	                    </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection