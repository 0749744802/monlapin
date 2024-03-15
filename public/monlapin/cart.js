$(document).ready(function() {


    $('.add-to-cart').on('click', function() {
        var productId = $(this).attr("data-product-id") ;
         console.log( productId)
        $.ajax({
            type: 'get',
            url: '/cart/add',
            data: {
                product_id: productId,
                // _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Mettre à jour l'interface utilisateur avec la réponse du serveur
                console.log(response.name,response.id);
                $('.badge').html(response.cart);
                if (response.success==true) {
                  $('#test').append(
                    '<p>'+response.name+ '</p>'
                   )
                  
                    Swal.fire({
                        // position: "top-end",
                        icon: "success",
                        title: "Votre produit à été ajouté avec succès !",
                        showConfirmButton: false,
                        timer: 2500
                        });
                }
            },
            error: function(error) {
                console.error(error);
            }
        });
    });


    $('.update-cart').on('change', function() {
        var rowId = $(this).data('row-id');
        var quantity = $(this).val();

        $.ajax({
            type: 'POST',
            url: '/cart/update',
            data: {
                row_id: rowId,
                quantity: quantity,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Mettre à jour l'interface utilisateur avec la réponse du serveur
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('.remove-from-cart').on('click', function() {
        var rowId =  $('.remove-from-cart').attr('data-row-id');

        $.ajax({
            type: 'get',
            url: '/cart/remove',
            data: {
                row_id: rowId,
                // _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Mettre à jour l'interface utilisateur avec la réponse du serveur
                ;

                if (response.success==true) {
                    $('.row_produit_'+rowId).remove()
                    $('.badge').html(response.cart);

                    Swal.fire({
                        // position: "top-end",
                        icon: "success",
                        title: "Votre produit à été retiré avec succès !",
                        showConfirmButton: false,
                        timer: 2500
                        });
                }
            },
            error: function(error) {
                console.error(error);
            }
        });
    });



});


