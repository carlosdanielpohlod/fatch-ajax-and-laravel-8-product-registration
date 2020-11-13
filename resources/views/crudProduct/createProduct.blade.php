<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('crudProduct/src/css/spinner.css')}}">
</head>
<header>
  @include('admin.src.html.layoutUp')
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="content" content="New product">
</header>
<body>
  <div class="container mt-2">
      <div class="row">
        <div class="col-md-6">
        <form name="newProduct" action="{{route('product.new.do')}}"method="POST" class="form-row" enctype="multipart/form-data">
              @csrf
              <div class="col-xs-6">
                <input type="text" name="name" id="name" class="form-control" placeholder="Title" />
                <label id="statusName" class="mt-1"></label>
              </div>
              <div class="col-xs-6">
                <input type="text" name="price" id="price" class="form-control" placeholder="Price" />
                <label id="statusPrice" class="mt-1"></label>
              </div>
              <div class="col-xs-6">
                <input type="file" name="productImage" id="productImage" class="form-control" placeholder="productImage" />
              </div>
              <div id="submitDiv">
                <button class="btn btn-success" type="submit" id="submitButton">Save</button>
              </div>

          </form>
        </div>
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                
              </tr>
            </thead>
            <tbody id="recentsTbody">
              
            </tbody>
          </table>
        </div>
  </div>
  
</body>
{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> --}}

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@include('crudProduct.src.js.animation')
@include('crudProduct.src.js.layoutAction')
@include('crudProduct.src.js.validation')
{{-- @include('crudProduct.src.js.ajax') --}}
@include('admin.src.js.currentPageMonitoring')
{{-- <script>
  
  
  function msgResponse(data){
    if(data.success === true){
      deleteSpinner()
      updateRecentList(data)
      Toast.fire({
          icon: 'success',
          title: 'successfully created'
      })   
    }else{
      deleteSpinner()
      console.log(data)
      Toast.fire({
          icon: 'error',
          title: 'An error has occurred'
      })   
    }
  }
  document.newProduct.onsubmit = async e => {
      e.preventDefault()
        // const image = document.getElementById('productImage')
        const data = new FormData(e.target)
        // data.append("productImage", image.files[0]);
        const url = '{{route('product.new.do')}}'
        // $.ajax({
        //     url: url,
        //     data: new URLSearchParams(data),
        //     type: 'POST',
        //     contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        //     processData: false // NEEDED, DON'T OMIT THIS
        //     // ... Other options like success and etc
        // });
        const options = {
          method: "POST",
          body: new URLSearchParams(data),
          enctype:"multipart/form-data"
        }
        
        // createSpinner()
        fetch(url, options)
        .then(response => response.json())
        .then(data => msgResponse(data))
        .catch(exception => alert(exception))
      
       
  }
</script> --}}
