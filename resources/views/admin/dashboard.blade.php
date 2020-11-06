<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="content" content="dashboard">
</head>
<header>
  @include('admin.src.html.layoutUp')
</header>
<body>
  <div id="containerCards" class="container mt-2">
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('admin.src.js.currentPageMonitoring')
@include('admin.src.js.animation')
@include('utils.cardFavoriteAjax')
<script>
  const json = {!! $products !!}
  const containerCards = document.getElementById('containerCards')
  createCard(json)
</script>