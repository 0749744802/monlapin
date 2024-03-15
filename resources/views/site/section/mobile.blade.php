<!-- pannier-->
<div class="sidemenu-wrapper sidemenu-cart d-none d-lg-block ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Panier</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    @php
                       $stotal=0;
                       $total=0;
                    @endphp
                    @foreach(Cart::content() as $item)
                    @php
                      $total+=$stotal+$item->subtotal;
                    @endphp


                    <li id="test" class="woocommerce-mini-cart-item mini_cart_item row_produit_{{ $item->rowId }}">
                        <button class="remove remove_from_cart_button remove-from-cart" data-row-id="{{ $item->rowId }}"><i class="far fa-times"></i></button>
                        <a href="#"><img src="monlapin/assets/img/product/product_thumb_1_1.jpg" alt="Cart Image">{{ $item->name  }}</a>
                        <span class="quantity">{{ $item->qty }} ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">FCFA</span>{{ $item->price }}</span>
                        </span>
                    </li>
                    @endforeach
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>{{ $total }}</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="cart.html" class="th-btn wc-forward">View cart</a>
                    <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>
<!-- mobile-->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="home-organic-farm.html"><img src="monlapin/assets/img/logo.svg" alt="Frutin"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li>
                    <a href="accueil">Accueil</a>

                </li>
                <li class="menu-item-has-children">
                <a href="#">Entreprise</a>
                <ul class="sub-menu">
                        <li><a href="entreprise&id=1">Qui sommes nous?</a></li>
                        <li><a href="entreprise&id=2">Pourquoi nous choisir?</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="service.html">Service</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Produits</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Frais</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Vivans</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>


                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
