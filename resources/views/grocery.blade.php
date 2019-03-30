<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Grocery Store</title>
</head>
<body>
  <h1>Grocery App</h1>

  <div class="container">
         <form id="myForm">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" id="type">
            </div>
            <div class="form-group">
               <label for="price">Price:</label>
               <input type="text" class="form-control" id="price">
             </div>
            <button class="btn btn-primary" id="ajaxSubmit">Submit</button>
          </form>
      </div>

      <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script>

    jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
              // alert('hello');
               e.preventDefault();
               // $.ajaxSetup({
    //               headers: {
    //                   'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //               }
    //           });

                $.ajaxSetup({
                headers: {
                    // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

              jQuery.ajax({
                  url: "{{ url('/grocery/post') }}",
                  method: 'post',
                  data: {
                     name: jQuery('#name').val(),
                     type: jQuery('#type').val(),
                     price: jQuery('#price').val()
                  },
                  success: function(result){
                     console.log(result);
                  }
                });
            });
          });

  </script>
</body>
</html>
