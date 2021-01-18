<template>
    <input name="CPF" @input="validate()">
</template>

<script>
    export default{  
        name:'input_CPF',
        methods:{
            validate(){
                let sum;
                    
                let rest;
                sum = 0;
                if (strCPF == "00000000000"){ 
                }
                for (i=1; i<=9; i++) sum = sum + parseInt(strCPF.substring(i-1, i)) * (11 - i);
                rest = (sum * 10) % 11;

                if ((rest == 10) || (rest == 11))  rest = 0;
                if (rest != parseInt(strCPF.substring(9, 10)) ) {
                    //CPF invalido
                        
                }

                sum = 0;
                for (i = 1; i <= 10; i++) sum = sum + parseInt(strCPF.substring(i-1, i)) * (12 - i);
                rest = (sum * 10) % 11;

                if ((rest == 10) || (rest == 11))  rest = 0;
                if (rest != parseInt(strCPF.substring(10, 11) ) ) {
                    //CPF invalido
                }
               //CPF valido
            }
        }
    }
</script>

<style>

</style>