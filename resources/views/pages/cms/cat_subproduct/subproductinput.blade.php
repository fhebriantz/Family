@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Sub Product</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Product<span class="fa-angle-right fa"></span>Subproduct<span class="fa-angle-right fa"></span>Input</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Subproduct</h3></div>
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

                    	<form method="POST" action="{{url('/cms/product/subproduct/input')}}">
						{{ csrf_field() }}
	                        <table class="table">
								<tr>
									<td>ID Category</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select  class="form-control" name="id_category" style="width: 100%">
									        <option value="">-- Pilih Kategori --</option>
									        @foreach($category_product as $catpro)
									        <option value="{{$catpro->id}}">{{$no++}}.  {{$catpro->category_product_name}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>
								<tr>
									<td>Nama Subproduct</td>
									<td><input class="form-control"  type="text" name="category_subproduct_name" placeholder="Nama Sub Product" value="{{ old('category_subproduct_name') }}" style="width: 100%"></td>
								</tr>
							
								<tr>
									<td></td>
									<td><input class="btn btn-info" name="submit" value="submit" type="submit"></td>
								</tr>
						</table>
	                    </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection