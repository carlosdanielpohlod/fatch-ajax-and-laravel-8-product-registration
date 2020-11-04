<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('crudProduct/src/css/spinner.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="content" content="@foreach ($product_tags as $tag){{$tag->name}} @endforeach">
</head>
<header>
  @include('admin.src.html.layoutUp')
</header>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('product.checkout.do')}}" method="POST">
                    <input name="idProduct" value="{{$product->idProduct}}" hidden>
                    @csrf
                    <label for="credit-card">Credit-card number </label>
                    <input class="form-control" id="credit-card" placeholder="card number" name="cardNumber">
                    <div class="col-xs-3">
                        <input class="form-control" type="number" placeholder="quantity" name="quantity">
                    </div>
                    <div class="row">
                        
                        <button type="submit" class="btn btn-info"> Buy </button>
                    </div>
                    <div class="row">
                        <label for="remember-card">Remember my card number </label>
                        <input id="remember-card" type="checkbox">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item active">Checkout informations</li>
                    <li class="list-group-item">name: {{$product->name}}</li>
                    <li class="list-group-item">price: {{$product->price}}</li>
                    <li class="list-group-item active">Product Tags</li>
                    <li class="list-group-item">
                        @foreach ($product_tags as $tag)
                        <span class="badge badge-info">{{$tag->name}}</span> 
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    let Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
  })
  </script>
  @include('admin.src.js.currentPageMonitoring')