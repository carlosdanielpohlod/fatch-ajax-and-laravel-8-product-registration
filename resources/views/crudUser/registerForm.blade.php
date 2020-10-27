<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <h4> This page do not work </h4>
        <form enctype="multipart/form-data" name="formRegistration">
            @csrf
            <div class="row ml-3">     
                <img id="viewProfilePic" width="100" height="100" class="rounded" src="https://www.promoview.com.br/uploads/images/unnamed%2819%29.png" >
                <label class="label-input" for="profilePic" >Chose profile image</label>
                <input type="file" accept="image/png, image/jpeg"id="profilePic" value="https://www.promoview.com.br/uploads/images/unnamed%2819%29.png" name="profilePic">
            </div>
            <div class="row">
                <div class="col xs-6">
                    <input name="email" id="email" class="form-control" value="kkk" placeholder="Your e-mail">
                    <label style="color:red" id="statusEmail"></label>
                </div>
                <div class="col xs-6">
                    <input name="name" class="form-control" value="kkk" placeholder="Your name">
                </div>
            </div>
            <div class="row">
                <div class="col xs-6">
                    <input name="cpf"  maxlength="11" id="cpf" class="form-control" value="kkk" placeholder="Your CPF">
                    <label style="color:red" id="statusCpf"></label>
                </div>
                <div class="col xs-6">
                    <input name="password" value="jjjj" type="password" class="form-control" placeholder="password">
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
        </form>
    </div>
    
</body>
@include('crudUser.src.js.layoutAction')
@include('crudUser.src.js.validation')

