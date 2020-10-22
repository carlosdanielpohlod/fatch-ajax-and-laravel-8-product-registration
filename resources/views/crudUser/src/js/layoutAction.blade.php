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