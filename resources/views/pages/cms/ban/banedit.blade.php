@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Ban</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Ban<span class="fa-angle-right fa"></span>Edit</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Ban</h3></div>
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
                        <form method="POST" action="{{url('/cms/ban/'.$ban_data->id.'/edit')}}">
                        {{ csrf_field() }}
                            <table class="table">    

                                <tr>
                                    <td>Category Product</td>
                                    <td> <!-- select class form control untuk membuat combo box -->
                                        <select name="id_category"  class="form-control" style="width: 100%">
                                            <option>-- Pilih Kategori --</option>
                                            @foreach($category_product as $product)
                                            <option value="{{$product->id}}"

                                                <?php if ($product->id == $ban_data->id_category): ?>

                                                    <?php echo "selected" ?>
                                                    
                                                <?php endif ?> 

                                                >{{$product->category_product_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>                    
                                <tr>
                                    <td>Title</td>
                                    <td><input type="text" name="nama_ban" placeholder="Title" style="width: 100%"  value="{{ $ban_data->nama_ban }}"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                        <input class="btn btn-info" name="submit" value="Submit" type="submit" style="padding: 5px;">
                                        <a class="btn btn-danger" href="{{url('/cms/ban')}}"  style="padding: 5px; text-decoration: none;">Back</a>
                                    </td>
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