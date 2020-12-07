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
  <div id="app" class="container mt-2">
    
  </div>
  <div id="cards" >
    <div v-for="(data) in campo">
      <card :title="data.title" disponibility="Disponivel" idProduct="1" :pic02="data.pic02" :pic01="data.pic01" :price="data.price"></card>

    </div>
    <button @click="mais"> Mais Itens </button>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

<script>
  new Vue({
    el: "#cards",
    data: {
      
      campo:[
                {title:"Produto01",price:"32",pic01:"http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg",pic02:"http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg"},
                {title:"Produto02",price:"34",pic01:"http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg",pic02:"http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg"}
            ]
        
    },
    mounted(){
      // const options = {
      //   method:"GET",
      //   url: "http://localhost/cadastro-de-produtos-node.js/public/api/products"
      // }
      // fetch(options.url, options)
      // .then(response => response.json())
      // .then(data => this.cardData = [0])

      
    }
  })

</script>