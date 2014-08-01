function validation()
{
    var formids = ["name", "lname", "email","pass"];
    var length = formids.length;
    for(var i=0;i<=length;i++)
    {
        value='';
        var value = $("#"+formids[i]).val();

        if(value=='' || value== null || formids[i]=="email")
        {
            $("#"+formids[i]).css('border','1px solid red');
            $(".val-"+i).css('display','block');
            if(formids[i]=="email")
            {
                 var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                 if (filter.test(value)) 
                 {
                    $("#"+formids[i]).css('border','2px solid green');
                    $(".val-"+i).css('display','none');
                 }
                 else
                 {
                     if(value!='' && value!= null)
                     {
                        $("#"+formids[i]).css('border','1px solid red');
                        $(".val-"+i).css('display','block');
                        $(".val-"+i).text('Please enter valid email');
                    }
                 }
            }
        }
        else
        {
            $("#"+formids[i]).css('border','2px solid green');
            $(".val-"+i).css('display','none');
        }
    }

}