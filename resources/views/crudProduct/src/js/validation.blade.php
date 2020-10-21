<script>
    validPrice()
    validName()
    function validPrice(){
        document.getElementById('price').oninput = e => {
        
            if(/^[+-]?\d+(\.\d+)?$/.test(e.target.value) == false){
                statusPrice.innerText = "Only number and ."
                e.target.style = "color:red"
                return false;
            }else{
                statusPrice.innerText = ""
                e.target.style = "color:black"
                return true
            }
        }
    }
    function validName(){
        document.getElementById('name').oninput = e => {
            if(e.target.value.length < 2){
                statusName.innerText = "Min 2 character"
                e.target.style = "color:red"
                return true
            }else{
                statusName.innerText = ""
                e.target.style = "color:black"
                return false;
            }
        
        }
    }
  </script>