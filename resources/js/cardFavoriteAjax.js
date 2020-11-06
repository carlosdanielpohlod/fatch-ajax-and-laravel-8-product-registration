
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


  function addToFavorite(e){
    e.preventDefault()
    const data = new FormData(e.target)
      const options = {
        method: "POST",
        body: new URLSearchParams(data),
        url:"{{route('product.addToFavorite')}}"
      }
      
      fetch(options.url, options)
      .then(response => response.json())
      .then(data => {
        Toast.fire({
                icon: 'success',
                title: 'Favorited'
            }) 
      })
     
    

  }
