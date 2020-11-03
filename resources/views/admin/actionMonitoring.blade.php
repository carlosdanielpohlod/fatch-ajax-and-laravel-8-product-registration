<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<header>
    @include('admin.src.html.layoutUp')
</header>
<body>
    <h1> Testing the user log actions </h1>
    <button id="test">Click me</button>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    const button = document.getElementById('test')
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    window.onload = e =>{
        // const log = [{'log': "Opened " }]
        const options = {
            method: "POST",
            body: JSON.stringify({
                'log':'Teste'}),
            url : "{{route('log.teste.do')}}",
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
            }
        }

        fetch(options.url, options)
        .then(response => response.json())
        .then(data => {
            if(data.success == true){
                Toast.fire({
                    icon: 'success',
                    title: 'Open page log saved'
                })  
            }else{
                console.log(data.error, data.info)
            }
        })
        
    }
</script>