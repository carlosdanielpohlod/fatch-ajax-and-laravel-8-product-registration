<script>
    function updateRecentList(data){
        const tbodyRecents = document.getElementById('recentsTbody')
        tbodyRecents.insertAdjacentHTML('afterbegin','<tr>  <td>'+data.name+'</td> <td>'+data.price+'</td> </tr>')
    }
</script>