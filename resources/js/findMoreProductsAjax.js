
  
    const containerCards = document.getElementById('containerCards')
    document.formGetMore.onsubmit = async e =>{
      e.preventDefault()
      
      const data = new FormData(e.target)
      const options = {
        method: "POST",
        body: new URLSearchParams(data),
        url: "{{route('product.list.more')}}"
      }
      
      fetch(options.url, options)
      .then(response => response.json())
      .then(data => createCard(data.products))
     
    }

