function addProduct( select_form )
{
    form = $(select_form);
    formData = new FormData(form.get(0));

    $.ajax({
        url: "/ovchinnikov/db_product/add_product.php",
        type: "POST",
        contentType: false,
        processData: false,
        data: formData,
        dataType:"json",
        success: function( json )
        {
            if( json.success )
            {
               $('#add_modal').modal('hide');
                location = location.href;
                console.log("succsess");
            }
            if(json.error)
            {
                console.log("error");
            }
        }
    });
}