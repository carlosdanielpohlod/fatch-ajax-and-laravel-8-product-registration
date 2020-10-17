<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('crudProduct/src/css/spinner.css')}}">
</head>
<header>
  @include('admin.src.html.layoutUp')
</header>
<body>
  <div class="container">
    
      <form name="newProduct" method="post">
        <div class="row">
          @csrf
          <div class="col 6">
            <input type="text" name="name" class="form-control" placeholder="Titulo" />
          </div>
          <div class="col 6">
            <input type="text" name="price" class="form-control" placeholder="Preco" />
          </div>
        </div>
        <div id="submitDiv" class="row">
          <button class="btn btn-success" id="submitButton">Save</button>
        </div>
        
      </form>
    
      
  </div>
  
</body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function disabledSubmit(status){
    const buttonSubmit = document.getElementById('submitButton')
    buttonSubmit.disabled = status
  }
  function createSpinner(){
      const divSubmit = document.getElementById('submitDiv')
      
      divSubmit.insertAdjacentHTML('afterbegin','<div class="spinner-border" id="spinner" role="status"></div>')
      disabledSubmit(true)
  }
  function deleteSpinner(){
      const divSpinner = document.getElementById('spinner').remove()
      disabledSubmit(false)
  }
  function msgResponse(data){
    if(data.success === true){
      deleteSpinner()
      alert("Cdastrado")
    }else{
      deleteSpinner()
      alert(data.message)
    }
  }
  document.newProduct.onsubmit = async e => {
      e.preventDefault()
      const data = new FormData(e.target)
      const url = '{{route('product.new.do')}}'
      const options = {
        method: "POST",
        body: new URLSearchParams(data)
      }
      createSpinner()
      fetch(url, options)
      .then(response => response.json())
      .then(data => msgResponse(data))
      .catch(alert(response), deleteSpinner())
   
       
  }
</script>