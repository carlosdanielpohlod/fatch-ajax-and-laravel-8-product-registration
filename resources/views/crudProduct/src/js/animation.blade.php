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
    const Toast = Swal.mixin({
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