<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <form>
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
<script>
    const inputProfilePic = document.getElementById('profilePic')
    inputProfilePic.oninput = e =>{
	
		const input = e.target;

		const reader = new FileReader();
		reader.onload = function() {
			const dataURL = reader.result;
			const output = document.getElementById('viewProfilePic');
			output.src = dataURL;
		};
		reader.readAsDataURL(input.files[0]);
	};
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