<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <form enctype="multipart/form-data" name="formRegistration">
            @csrf
            <div class="row ml-3">     
                <img id="viewProfilePic" width="100" height="100" class="rounded" src="https://www.promoview.com.br/uploads/images/unnamed%2819%29.png" >
                <label class="label-input" for="profilePic" >Chose profile image</label>
                <input type="file" id="profilePic" name="profilePic">
            </div>
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
@include('crudUser.src.js.layoutAction')

<script>
    document.formRegistration.onsubmit = async e =>{
        e.preventDefault()
        const data = new FormData(e.target)
        const url = "{{route('register.user.do')}}"
        const options = {         
            method: "POST",
            body: new URLSearchParams(data),
            
        }
        alert(options.body)
        fetch(url, options)
        .then(response = response.json())
        .then(data => alert(data.success))
        .catch(alert("error"))
    }
</script>

<style>
    input[type='file'] {
      display: none
    }
    
    /* Aparência que terá o seletor de arquivo */
    .label-input {
      background-color: #3498db;
      border-radius: 5px;
      color: #fff;
      cursor: pointer;
      margin: 40px;
      padding: 6px 20px
    }
    </style>