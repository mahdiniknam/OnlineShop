@extends('layout')
@section('category')
 <div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        @foreach ($categories as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
@section('main')
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>سبد خرید</title>
</head>
<body>
    <h1>سبد خرید شما</h1>
    <div id="cart-items"></div>

    <button id="clear-cart">حذف همه محصولات</button>

    <script>
        function displayCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || {};
            let cartContainer = document.getElementById('cart-items');
            cartContainer.innerHTML = '';

            Object.entries(cart).forEach(([productId, product]) => {
                let item = document.createElement('p');
                item.innerHTML = `
                    ${product.name} - ${product.price} تومان - تعداد: ${product.quantity}
                    <button class="remove-item" data-id="${productId}">❌ حذف</button>
                `;
                cartContainer.appendChild(item);
            });

            document.querySelectorAll('.remove-item').forEach(button => {
                button.addEventListener('click', function() {
                    let productId = this.getAttribute('data-id');
                    let cart = JSON.parse(localStorage.getItem('cart')) || {};
                    delete cart[productId];
                    localStorage.setItem('cart', JSON.stringify(cart));
                    displayCart();
                });
            });
        }

        document.getElementById('clear-cart').addEventListener('click', function() {
            localStorage.removeItem('cart');
            displayCart();
        });

        // نمایش اولیه سبد خرید
        displayCart();
    </script>
</body>
</html>

@stop
