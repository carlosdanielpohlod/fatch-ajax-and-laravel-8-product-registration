
let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const content = document.querySelector('meta[name="content"]').getAttribute('content');
window.onload = e =>{
    // const log = [{'log': "Opened " }]
    const options = {
        method: "POST",
        body: JSON.stringify({
            'log':'Opened page ('+content+') '+ window.location.href}),
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
                title: 'Opened page log saved'
            })  
        }else{
            console.log(data.error, data.info)
        }
    })
    
}
