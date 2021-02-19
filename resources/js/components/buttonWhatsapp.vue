<template>
    <!-- Veja que eu passo o numero ali bem parecido com o blade -->
    <a href="https://api.whatsapp.com/send?phone={phoneNumber}&text=mensagem" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</template>

<script>
    export default {
    name: 'Card',
    props: {  //parametros q eu passo pra ca
        phoneNumber : {} //o numero q vou passa la do HTML, pode ate predefinir um aqui 
    }
    }
</script>

<style>

    .float{right:25px; position:fixed; width:60px; height:60px; bottom:40px; background-color:#25d366; color:#FFF;border-radius:50px; text-align:center;font-size:30px; box-shadow: 2px 2px 3px #999; z-index:100;}
    .my-float{margin-top:16px;}

</style>
