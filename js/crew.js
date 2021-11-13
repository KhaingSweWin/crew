$(document).ready(function(){
    $("body").on( "click", ".delete", function( event ) {
        console.log("delete");
        var result=confirm("Are you sure to delete?");
        if(result)
        {
            var cid=$(this).parents('td').attr('cid');
            event.preventDefault();
            $.ajax({
                url:"delete_crew.php",
                type:"post",
                data:{id:cid},
                error:function(){
                    alert("Fail to delete");
                },
                success:function(results){
                    $('#tbody').html(results);
                    }
            })
        }
        
        
        
    });

    
})