<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form name="loginForm" class="form"  action="{{route('login.do')}}" method="POST">
            @csrf
            <div class="row">
                <div class="ml-6 col-xs-4 mr-6">
                    <input class="form-control" name="email">
                </div>
            </div>
            <div class="row">
                <div class="ml-6 col-xs-4 mr-6">
                    <input class="form-control" name="password">
                </div>
                
            </div>
            <div class="row">
                <label id="labelError"><label>
            </div>
            <div class="row">
                <div class="ml-4 col-xs-4 mr-4">
                    <button class="btn btn-success" id="submitButton" type="submit">Login</button>
                </div>
            </div>
            <div id="submitDiv"></div>
        </form>
    </div>
</body>
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
    // const loginForm = document.getElementsByName('loginForm')
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>