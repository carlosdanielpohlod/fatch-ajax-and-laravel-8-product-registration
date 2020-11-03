<script>
  
  
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
        
        Toast.fire({
            icon: 'error',
            title: 'An error has occurred'
        })   
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
  