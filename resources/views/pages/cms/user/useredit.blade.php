@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">User</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>User<span class="fa-angle-right fa"></span>Input</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data User</h3></div>
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
                    	<form method="POST" action="{{url('/cms/forgotpass/'.$user_management->id.'/edit')}}">
						{{ csrf_field() }}
	                        <table class="table">
							<tr>
								<td>Nama</td>
								<td> <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $user_management->name }}" style="width: 100%"></td>
							</tr>
                            <tr>
                                <td>Username</td>
                                <td> <input type="text" class="form-control" name="username" placeholder="Nama" value="{{ $user_management->username }}" style="width: 100%"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td> <input type="password" class="form-control" name="password" placeholder="Password" value="" style="width: 100%"></td>
                            </tr>
                            <tr>
                                <td>Konfirmasi Password</td>
                                <td> <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value="" style="width: 100%"></td>
                            </tr>
                            <tr>
                                  <td>User Group</td>
                                  <td><select name="id_usergroup" style="width: 100%">
                                      <option value="">-- Select Category --</option>
                                      <option value="1"
                                        <?php if ($user_management->id_usergroup == 1): ?>
                                        <?php echo "selected" ?>
                                        <?php endif ?>>Superadmin</option>
                                      <option value="2"
                                        <?php if ($user_management->id_usergroup == 2): ?>
                                        <?php echo "selected" ?>
                                        <?php endif ?>>Admin-Global</option>
                                      <option value="3"
                                        <?php if ($user_management->id_usergroup == 3): ?>
                                        <?php echo "selected" ?>
                                        <?php endif ?>>Admin-Local</option>
                                  </select></td>
                            </tr>
							<tr>
								<td></td>
								<td><input class="btn btn-info" name="submit" value="submit" type="submit" ></td>
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