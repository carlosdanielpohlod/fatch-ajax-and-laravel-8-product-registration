<script>
    document.loginForm.onsubmit = async e => {
        e.preventDefault()
        const form = e.target
        const data = new FormData(form)
        const options = {
            method: "POST",
            body: new URLSearchParams(data)
            
        }
        function verificar(data){
            if(data.success === true)
                window.location.href = '{{route('admin.dashboard')}}'
            else{
                labelError(data.message)
                deleteSpinner()
            }
        }
        createSpinner()
        fetch(form.action, options)
        .then(response => response.json())
        .then(data => verificar(data))
        .catch(error => console.log(error))
        
    }
</script>