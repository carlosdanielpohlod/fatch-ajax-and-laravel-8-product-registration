<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('login/src/css/login.css')}}">

</head>
<body>
    {{-- Esse template de Login foi adaptado de https://bootsnipp.com/snippets/dldxB --}}
    <div class="wrapper fadeInDown">
        <div id="formContent">
         
          <div class="fadeIn first">
            <img src="data:image/png;base64,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" id="icon"  alt="User Icon" />
          </div>
      
          
          <form name="loginForm" class="form"  action="{{route('login.do')}}" method="POST">
            @csrf
            <input type="text" id="email" value="email@example.com" class="fadeIn second" name="email" placeholder="login">
            <input type="text" id="password" value="12345" class="fadeIn third" name="password" placeholder="password">
            <div id="submitDiv">
                <button id="submitButton" type="submit" class="fadeIn fourth btn btn-success">Login</button>
            </div>
              
             <div id="formFooter row">
                <label id="labelError"><label>
            </div>
          </form>       
          <div id="formFooter row">
            <a class="underlineHover" href="{{route('register.user.form')}}">Register</a>
          </div>
      
        </div>
    </div>
</body>


    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@include('login.src.js.animation')
@include('login.src.js.ajax')