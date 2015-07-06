
(function () {

    var formOne = function () {
        var formData = $("#formOne").serialize();
        
        $.ajax({ url: 'ajax.php',
            data: formData,
            type: 'post',
            complete: function(output) {
                         $('#formOneResults').html(output.responseText);
                     }
        });     
    };

    



    $(document).ready(function () {
        $("#formOneBtn").on("click", function(e){
            // console.log('test');
            e.preventDefault();
            formOne();
        });     
        
         

       });

} ());