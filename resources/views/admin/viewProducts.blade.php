<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="content" content="List products">
</head>
<header>
    @include('admin.src.html.layoutUp')
</header>
<body>
  <div class="row container mt-3"> 
    <div class="col-md-6">
      <div class="container mt-3" id="containerCards">
          {{-- the card has generated here --}}
      </div>
    </div>
    <div class="col-md-6">
      <form name="formGetMore" class="form-row">
        @csrf
        <div class="col-md-4">
          <input type="number" name="index" class="form-control" placeholder="type it the id">
        </div>
        <div class="col-md-4">
          <input type="number" name="take" class="form-control"placeholder="quantity">
        </div>
        <div class="col-md-4">
          <button id="getMoreButton" class="btn btn-default">Get More</button>
        </div>
      </form>
    </div>
  </div>
</body>

  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('admin.src.js.ajax')
@include('admin.src.js.animation')
@include('utils.cardFavoriteAjax')
@include('admin.src.js.currentPageMonitoring')