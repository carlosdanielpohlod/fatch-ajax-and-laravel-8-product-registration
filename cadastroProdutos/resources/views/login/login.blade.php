<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form class="form col-xs-4" name="loginAction" action="{{route('login.do')}}" method="POST">
            @csrf
            <input class="form-control" name="login">
            <button class="btn btn-success" type="submit">Login</button>
        </form>
    </div>
</body>
<script>
    
    const loginForm = document.getElementsByName('loginForm')
    document.loginForm.onsubmit = async e => {
        e.preventDefault()
        const form = e.target
        const data = new FormData(form)
        const options = {
            method: "POST",
            body: URLSearchParams(data)
            action: loginAction.action
        }
        fetch(form.action, options)
        .then(resp => resp.json())
        .then(console.log(resp))
    }
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>