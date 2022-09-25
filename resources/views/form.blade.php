

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <title>Catagory</title>
  <style type="text/css">
    
  </style>
</head>

<body>
  {{-- <form action="{{route('store_rec')}}" method="POST">
    @csrf
    <div class="card pt-2 mx-auto mt-5" style="max-width: 30rem;">
      <div class="card-header" style="font-size: 25px;
        font-style: italic;">
        <header>Catagory Subcatagory</header>
      </div>
      <div class="card-body">
        <div class="card-text mb-2">
          <b>Catagory :</b> <input type="text" name="catagory" class="form-control" placeholder="Catagory Name" >
          
        </div>

      
       

        <div class="card-text mb-2" style="background-size: 20px;">
          <label> SubCatagory:</label> 
          <select class="form-select" name="sub_catagory">
            <option value="">--select--</option>
            @if (!empty($subcatagory))
            @foreach ($subcatagory as $sub)
            <option value="{{$sub->catagory}}"> {{$sub->catagory}} </option>
                
            @endforeach
            @endif
           
               
          
            
           
          </select>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-fill btn-primary">Save</button>
      </div>
    </div>
  </form> --}}

  <div>
    <form action="{{route('loggedin')}}" method="post">
      @csrf
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" value="submit" name="submit">
    </form>
  </div>
</body>

</html>