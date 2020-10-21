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
    function labelError(msg){
        const labelError = document.getElementById('labelError')
        labelError.innerText = msg
    }
    function deleteSpinner(){
        const divSpinner = document.getElementById('spinner').remove()
        disabledSubmit(false)
        
    }
</script>