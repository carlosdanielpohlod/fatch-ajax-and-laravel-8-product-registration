<script>
    
    const cpf = document.getElementById('cpf')
    cpf.oninput = e => {
        const statusCPF = document.getElementById('statusCpf')

        let Soma;
        strCPF = e.target.value
        let Resto;
        Soma = 0;
        if (strCPF == "00000000000"){ 
            e.target.style = "color:red"
        }
        for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;
        
            if ((Resto == 10) || (Resto == 11))  Resto = 0;
            if (Resto != parseInt(strCPF.substring(9, 10)) ) {
                
                statusCPF.innerText = "Invalid"
                e.target.style = "color:red"
                // inputCPF.value = ''
            }else{
                statusCPF.innerText = ""
                e.target.style = "color:black"
            }

        Soma = 0;
            for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
            Resto = (Soma * 10) % 11;

            if ((Resto == 10) || (Resto == 11))  Resto = 0;
            if (Resto != parseInt(strCPF.substring(10, 11) ) ) {
                
                
                statusCPF.innerText = "Invalid"
                e.target.style = "color:red"
            }
            else{
                statusCPF.innerText = ""
                e.target.style = "color:black"
            }
            
}


    const email = document.getElementById('email')
    
    email.oninput = e =>{
        const label = document.getElementById('statusEmail')
        if(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/.test(e.target.value)){
            label.innerText = ""
            e.target.style = "color:black"
        }else{
            label.innerText = "Invalid"
            e.target.style = "color:red"
        }
    }
    
</script>
<script>
    
    document.formRegistration.onsubmit = async e =>{
        e.preventDefault()
        const data = new FormData(e.target)
        // data.append('profilePic', e.target.files[0])
        const url = "{{route('register.user.do')}}"
        const options = {         
            method: "POST",
            body: new URLSearchParams(data),
            
        }
        
        fetch(url, options)
        .then(response => response.json())
        .then(data =>  {
            if(data.success == false){
                console.log(data.error)
            }else{
                console.log(data.error)
            }
        })
        .catch(function(error){
            console.log(error)
        })
    }
</script>

