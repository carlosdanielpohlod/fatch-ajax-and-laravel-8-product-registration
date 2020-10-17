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
                <div class="ml-4 col-xs-4 mr-4">
                    <button class="btn btn-success" type="submit">Login</button>
                </div>
            </div>
            
        </form>
    </div>
</body>
<script>
    
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
            else
                alert("falha")
        }
        fetch(form.action, options)
        .then(response => response.json())
        .then(data => verificar(data))
        .catch(error => console.log(error))
        
    }
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>