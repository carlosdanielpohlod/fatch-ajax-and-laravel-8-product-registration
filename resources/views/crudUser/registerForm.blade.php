<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <form>
            @csrf
            <div class="row">
                <div class="col xs-6">
                    <input name="email" class="form-control" placeholder="Your e-mail">
                </div>
                <div class="col xs-6">
                    <input name="name" class="form-control" placeholder="Your name">
                </div>
            </div>
            <div class="row">
                <div class="col xs-6">
                    <input name="cpf" class="form-control"placeholder="Your CPF">
                </div>
                <div class="col xs-6">
                    <input name="password" type="password" class="form-control" placeholder="password">
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
        </form>
    </div>
</body>
<script>
</script>