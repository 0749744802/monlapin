@extends('site.index')
@section('titre', 'Panier')
@section('content')
    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="monlapin/assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Cart Page</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-organic-farm.html">Home</a></li>
                <li>Cart Page</li>
            </ul>
        </div>
    </div>
</div><!--==============================
Cart Area
==============================-->
<div class="th-cart-wrapper  space-top space-extra-bottom">
    <div class="container">
        <div class="woocommerce-notices-wrapper">
            <div class="woocommerce-message">Shipping costs updated.</div>
        </div>
        <form action="#" class="woocommerce-cart-form">
            <table class="cart_table " id="cart">
                <thead>
                    <tr>
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">Titre produit</th>
                        <th class="cart-col-price">Prix</th>
                        <th class="cart-col-quantity">Quantité</th>
                        <th class="cart-col-total">Total</th>
                        <th class="cart-col-remove">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $stotal=0;
                       $total=0;
                    @endphp
                    @foreach(Cart::content() as $item)
                    @php
                      $total+=$stotal+$item->subtotal;
                    @endphp
                    <tr class="cart_item row_produit_{{ $item->rowId }}">
                        <td data-title="Product">
                            <a class="cart-productimage" href="shop-detailis.html"><img width="91" height="91" src="{{ asset('storage/' . $item->options->image) }}" alt="Image"></a>
                        </td>
                        <td data-title="Name">
                            <a class="cart-productname" href="shop-detailis.html">{{ $item->name  }}</a>
                        </td>
                        <td data-title="Price">
                            <span class="amount"><bdi><span>$</span>{{ $item->price }}</bdi></span>
                        </td>
                        <td data-title="Quantity">
                            <div class="quantity">
                                <button data-product-id="{{ $item->id }}" data-action="decrement" class="quantity-minus qty-btn btn-update"><i class="far fa-minus"></i></button>
                                
                                <span class="quantity">{{ $item->qty }}</span>
                                <button data-product-id="{{ $item->id }}" data-action="increment" class="quantity-plus qty-btn btn-update"><i class="far fa-plus "></i></button>
                            </div>
                        </td>
                        <td data-title="Total">
                            <span class="amount"><bdi><span>$</span>{{ $item->subtotal }}</bdi></span>
                        </td>
                        <td data-title="Remove">
                            <a  class="remove remove-from-cart" data-row-id="{{ $item->rowId }}"><i class="fal fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </form>
        <div class="row justify-content-end">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <h2 class="h4 summary-title">Cart Totals</h2>
                <table class="cart_totals">
                    <tbody>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td data-title="Cart Subtotal">
                                <span class="amount"><bdi><span>$</span>{{ $item->subtotal }}</bdi></span>
                            </td>
                        </tr>
                        <tr class="shipping">
                            <th>Shipping and Handling</th>
                            <td data-title="Shipping and Handling">
                                <ul class="woocommerce-shipping-methods list-unstyled">
                                    <li>
                                        <input type="radio" id="free_shipping" name="shipping_method" class="shipping_method">
                                        <label for="free_shipping">Free shipping</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="flat_rate" name="shipping_method" class="shipping_method" checked="checked">
                                        <label for="flat_rate">Flat rate</label>
                                    </li>
                                </ul>
                                <p class="woocommerce-shipping-destination">
                                    Shipping options will be updated during checkout.
                                </p>
                                <form action="#" method="post">
                                    <a href="#" class="shipping-calculator-button">Change address</a>
                                    <div class="shipping-calculator-form">
                                        <p class="form-row">
                                            <select class="form-select">
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="BD" selected="selected">Bangladesh</option>
                                            </select>
                                        </p>
                                        <p>
                                            <select class="form-select">
                                                <option value="">Select an option…</option>
                                                <option value="BD-05">Bagerhat</option>
                                                <option value="BD-01">Bandarban</option>
                                                <option value="BD-02">Barguna</option>
                                                <option value="BD-06">Barishal</option>
                                            </select>
                                        </p>
                                        <p class="form-row">
                                            <input type="text" class="form-control" placeholder="Town / City">
                                        </p>
                                        <p class="form-row">
                                            <input type="text" class="form-control" placeholder="Postcode / ZIP">
                                        </p>
                                        <p>
                                            <button class="th-btn">Update</button>
                                        </p>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <td>Order Total</td>
                            <td data-title="Total">
                                <strong><span class="amount"><bdi><span>$</span>{{ $total +1000 }}</bdi></span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="wc-proceed-to-checkout mb-30">
                    <a href="checkout.html" class="th-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
