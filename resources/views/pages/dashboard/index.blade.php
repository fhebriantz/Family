<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Categories</title>
      <!-- start: Css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css')}}">

      <link href="{{ asset('asset/css/style.css?v=1.007')}}" rel="stylesheet">
      <!-- end: Css -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
  <body>
    <div class="container">
      <h1>Category and Subcategories AJAX, select drop down</h1>

            <div class="col-lg-4">            <div class="form-group">
              <label for="">Categories</label>
              <select class="form-control input-xs" name="category" id="category" style="width: 100%">
                <option value="">Select Category</option>
                @foreach($category_product as $cat)
                <option value="{{$cat->id}}">{{$cat->category_product_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="">Mainan</label>
              <select name="mainan" id="mainan" class="form-control input-xs" style="width: 100%">
                <option value="">Select Mainan</option>
              </select>
            </div>

            <div class="form-group">
              <label for="">Ban</label>
              <select name="ban" id="ban" class="form-control input-xs" style="width: 100%">
                <option value="">Select Ban</option>
              </select>
            </div>
            {{csrf_field()}}

      </div>
    </div>
  </body>
  <script>
    $('#category').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-mainan?cat_id=' + cat_id, function(data){
        // success data
        $('#mainan').empty();
        $.each(data, function(index, mainanObj){

          $('#mainan').append('<option value="'+mainanObj.id+'">'+mainanObj.nama_mainan+'</option>');

        });

      });

    });

    $('#category').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-ban?cat_id=' + cat_id, function(data){
        // success data
        $('#ban').empty();
        $.each(data, function(index, banObj){

          $('#ban').append('<option value="'+banObj.id+'">'+banObj.nama_ban+'</option>');

        });

      });

    });
  </script>
</html>