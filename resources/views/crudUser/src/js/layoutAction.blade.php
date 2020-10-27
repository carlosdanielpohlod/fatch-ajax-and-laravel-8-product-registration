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