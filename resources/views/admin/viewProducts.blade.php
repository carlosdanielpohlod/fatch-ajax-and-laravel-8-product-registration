<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<header>
    @include('admin.src.html.layoutUp')
  </header>
  <body>
      
    <div class="container mt-3" id="containerCards">
        
    </div>
    <button onclick="createCard()">Create</button>
  </body>
  
<script>
    const json = [{"id":"1","nome":"KKKKKKK","idade":"12"},{"id":"4","nome":"LLKKK","idade":"2"}]
    // const cardBody = document.getElementById('card-body').childNodes
    const containerCards = document.getElementById('containerCards')
    function createCard(){
      for(let i = 0;  i < json.length; i++){
        let data = json[i]
        const html = @include('admin.src.html.productCard')
        
        containerCards.insertAdjacentHTML('beforeend',html)
      }
    }
    
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   