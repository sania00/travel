jQuery( function( $ ) {
    $(document).ready(function () {
        $('.remove-btn').click(function(){
            var section = $(this).closest('.selection');
            var product_id = $(this).attr("data-product_id");
            $.ajax({
                type: 'POST',
                url: gwajax.url,
                data: {
                    nonce : gwajax.nonce,
                    action: "product_remove",
                    product_id: product_id
                },
                beforeSend: function () {

                },
                success: function(data){
                    $(section).fadeOut();
                    setTimeout(function() {
                        $(section).remove();
                    }, 1000);
                    setTimeout(function() {
                        if ($("div").is(".selection")) {
                            console.log("yes");
                        }else{
                            $('.woocommerce').remove();
                            $('.no-select').fadeIn();

                        }
                    }, 1500);


                },
                error: function (xhr, textStatus) {
                    console.log([ xhr.status, textStatus ]);

                }
            });
            return false;
        });

    });

});
