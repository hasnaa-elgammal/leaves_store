<div class="popup">
    <div class="cart">
        <h2 class="cart-title"><span class="word">Your</span> Cart ({{ $cart_items->count() }})</h2>

        @if (session()->has('message'))
            <div class="alert alert-success" style="margin: 15px;">
                {{ session()->get('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger" style="margin: 15px;">
                {{ session()->get('error') }}
            </div>
        @endif

        @foreach ($cart_items as $cart_item)
            <div class="bg">
                <div class="cart-content">
                    <div class="cart-box">
                        <img src="{{ asset('images/plants/' . $cart_item->image) }}" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-title">{{ $cart_item->name }}</div>
                            <div class="cart-price">L.E {{ $cart_item->price }}</div>



                            <form action="{{ route('cart.update', $cart_item->cartItem_id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input class="cart-quantity" type="number" name="quantity"
                                    value="{{ $cart_item->quantity }}" data-item-id="{{ $cart_item->cartItem_id }}"
                                    onchange="this.form.submit();">
                                <input type="hidden" name="cartItem_id" value="{{ $cart_item->cartItem_id }}">
                                {{-- <button type="submit">Update</button> --}}
                            </form>


                        </div>

                        <a href="{{ route('cart.destroy', $cart_item->cartItem_id) }}"
                            onclick="event.preventDefault(); document.getElementById('cart-form').submit();"
                            style="margin: 15px 20px; color:forestgreen;">
                            <i class='fa fa-trash-alt'></i>
                        </a>

                        <form id="cart-form" action="{{ route('cart.destroy', $cart_item->cartItem_id) }}"
                            method="POST" class="d-none">
                            @csrf
                            @method('DELETE')
                        </form>


                    </div>
                </div>
            </div>
        @endforeach


        <br>
        <div class="line">
            <hr>
        </div>


        <div class="total">
            <div class="total-title">Total:</div>

            @php
                $totalPrice = 0;
            @endphp

            @foreach ($cart_items as $cart_item)
                @php
                    $totalPrice += $cart_item['price'] * $cart_item['quantity'];
                @endphp
            @endforeach

            <div class="total-price">{{ number_format($totalPrice, 2) }} L.E</div>
        </div>


        <button type="button" class="btn-buy">Checkout</button>
        <div class="cart-close">
            <i class='bx bx-x' id="cart-close"></i>
        </div>
    </div>
</div>

{{-- 
<script>
    // const quantityInputs = document.querySelectorAll('input[name="quantity"]');

    // quantityInputs.forEach(input => {
    //     input.addEventListener('change', () => {
    //         const itemId = input.getAttribute('data-item-id');
    //         const newQuantity = input.value;
    //         updateCartItemQuantity(itemId, newQuantity);
    //     });
    // });

    // function updateCartItemQuantity(itemId, newQuantity) {
    //     fetch(`/cart/${itemId}`, {
    //             method: 'PUT',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //             },
    //             body: JSON.stringify({
    //                 quantity: newQuantity
    //             })
    //         })
    //         .then(response => response.json())

    //         .catch(error => {
    //             console.error(error);
    //         });
    // }


    const quantityInputs = document.querySelectorAll('input[name="quantity"]');
    quantityInputs.forEach(input => {
        input.addEventListener('change', () => {
            const itemId = input.getAttribute('data-item-id');
            const newQuantity = input.value;
            updateCartItemQuantity(itemId, newQuantity);
        });
    });

    function updateCartItemQuantity(itemId, newQuantity) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const url = `/cart/${itemId}`;
        const data = {
            _token: csrfToken,
            _method: 'PATCH',
            quantity: newQuantity
        };
        const config = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify(data)
        };

        fetch(url, config)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                console.log(response.data);
            })
            .catch(error => {
                console.error(error);
            });
    }
</script> --}}
