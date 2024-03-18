$(document).ready(function() {

//ajout au panier
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
                console.log(response.image);
                $('.badge').html(response.cart);
                if (response.success==true) {
                    refreshCart();

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
    function refreshCart() {
        $('#cart').load(location.href + ' #cart', function() {
            // Réattacher les gestionnaires d'événements après le chargement du contenu du panier
            attachCartEvents();
        });
        $('#carts').load(location.href + ' #carts', function() {
            // Réattacher les gestionnaires d'événements après le chargement du contenu du panier
            attachCartEvents();
        });
    }


    function attachCartEvents() {
    //     //modification du panier
    // $('.update-cart').on('change', function() {
    //     var rowId = $(this).data('row-id');
    //     var quantity = $(this).val();

    //     $.ajax({
    //         type: 'get',
    //         url: '/cart/update',
    //         data: {
    //             row_id: rowId,
    //             quantity: quantity,
    //            // _token: '{{ csrf_token() }}'
    //         },
    //         success: function(response) {
    //             // Mettre à jour l'interface utilisateur avec la réponse du serveur
    //             console.log(response);
    //             refreshCart();
    //         },
    //         error: function(error) {
    //             console.error(error);
    //         }
    //     });
    // });
         //supression panier
    $('.remove-from-cart').on('click', function() {
        var rowId = $(this).data('row-id');

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
                    refreshCart();

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
}

attachCartEvents();





});

$(document).ready(function() {
    $('.btn-update').click(function() {
        var productId = $(this).data('product-id');
        var action = $(this).data('action');
        var quantityElement = $(this).siblings('.quantity');
        var currentQuantity = parseInt(quantityElement.text());

        if (action === 'increment') {
            var newQuantity = currentQuantity + 1;
        } else if (action === 'decrement' && currentQuantity > 1) {
            var newQuantity = currentQuantity - 1;
        } else {
            return; // Sortie si l'action n'est pas valide ou si la quantité est déjà à 1
        }

        // Envoyer une requête AJAX pour mettre à jour la quantité
        $.ajax({
            url: '/cart/update',
            method: "get",
            data: {
                productId: productId,
                quantity: newQuantity
            },
            success: function(response) {
                if (response.success) {
                    // Mettre à jour l'affichage de la quantité
                    quantityElement.text(newQuantity);
                }
            },
            error: function(error) {
                console.error(error);
            }
        });
    });
});




