<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


    <table id="tb">
        <thead>
            <tr>
                <th>hhh</th>
                <th>hhh</th>
                <th>hhh</th>
                <th>will to toor</th>
                <th>hhh</th>
                <th>hhh</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $item)
                
           
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->gender}}</td>
                <td><div class="form-check form-switch">
                  <input class="form-check-input" data-id="{{$item->id}}" type="checkbox"  name="darkmode" data-on="1" data-off="0" {{$item->willtowor ==1 ? 'checked':''}}>
                  <label class="form-check-label" for="mySwitch">Dark Mode</label>
                </div></td>
                <td>{{$item->lang}}</td>
                <td><input type="hidden" class="deleteChef" value="{{$item->id}}">
                    <button type="submit" class="btn btn-fill btn-danger chefdeletebtn">Delete</button> 
                </td>
               
            </tr>
            @endforeach
        </tbody>
        
        
    </table>
    



    {{-- warning massage during delete --}}
    {{-- jquary cdn --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{-- sweet alert --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $(document).ready(function () {
        $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                    });
        $('.chefdeletebtn').click(function (e){
          e.preventDefault();

          var delete_id = $(this).closest("tr").find('.deleteChef').val();
          // alert(delete_id);



          swal({
                title: "Are you sure to delete?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {

                  var data = {
                              "_token": $('input[name=_token]').val(),
                              "id": delete_id,
                            };
                  $.ajax({
                    type: "DELETE",
                    url: '/form-val-del/'+delete_id,
                    data: data,
                   
                    success: function (response) {
                      swal(response.status, {
                          icon: "success",
                        })
                        .then((result) => {
                          location.reload();
                        });
                    }
                  });          


                  
                } else {
                  swal("Your imaginary file is safe!");
                }
            });
        });
      });
    </script>
    {{-- delete warning end --}}
    <script>
      $(document).ready(function () {
        $("#tb"),DataTable()
      });
      $(function() {
        $('.form-check-input').change(function() {
          
          var willtowor = $(this).prop('checked') == true ? 1 : 0;
          var data_id = $(this).data('id');
          
          $.ajax({
            type: "GET",
            url: "/changeS",
            data: {'willtowor':willtowor, 'data_id': data_id},
            dataType: "json",
            success: function (data) {
              console.log(data.status);
            }
          });
        })
      })
    </script>
</body>
