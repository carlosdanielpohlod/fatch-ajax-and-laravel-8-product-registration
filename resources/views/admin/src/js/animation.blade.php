<script>

    function createCard(json){
      
      for(let i = 0;  i < json.length; i++){
        let data = json[i]
        let html = @include('admin.src.html.productCard') 
        containerCards.insertAdjacentHTML('beforeend',html)
      }
    }

    
</script>
