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
          <form name="newProduct" method="post" class="form-row">
              @csrf
              <div class="col-xs-6">
                <input type="text" name="name" id="name" class="form-control" placeholder="Title" />
                <label id="statusName" class="mt-1"></label>
              </div>
              <div class="col-xs-6">
                <input type="text" name="price" id="price" class="form-control" placeholder="Price" />
                <label id="statusPrice" class="mt-1"></label>
              </div>
              <div id="submitDiv">
                <button class="btn btn-success" id="submitButton">Save</button>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@include('crudProduct.src.js.animation')
@include('crudProduct.src.js.layoutAction')
@include('crudProduct.src.js.validation')
@include('crudProduct.src.js.ajax')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('admin.src.js.currentPageMonitoring')