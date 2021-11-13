$(document).ready(function(){
    $('.delete').click(function(){
        var result=confirm("are you sure to delete");
        if(result){
            var cid=$(this).parents('td').attr('cid');
            $.ajax({
                url:"delete_crew.php",
                type:"post",
                data:{id:cid},
                error:function(){
                    alert("fail to delete");
                },
                success:function(data){
                   


// $("#tbody").html(data);
                }
            })
        }
    })
})