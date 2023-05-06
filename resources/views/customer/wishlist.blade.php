<div class="wishlist">
    <h2 class="wish-title"><span class="word">Wish</span>list ({{ $wishlist_items->count() }})</h2>

    @if (session()->has('message'))
        <div class="alert alert-success" style="margin: 15px;">
            {{ session()->get('message') }}
        </div>
    @endif
    @foreach ($wishlist_items as $wishlist_item)
        <div class="bg1">
            <div class="wish-content">
                <div class="wish-box">
                    <img src="{{ asset('images/plants/' . $wishlist_item->image) }}" alt="" class="wish-img">
                    <div class="wish-detail">
                        <div class="wish-product-title">{{ $wishlist_item->name }}</div>
                        <div class="wish-price">L.E {{ $wishlist_item->price }}</div>

                        <div class="ico">
                            <a href="{{ route('wishlist.destroy', $wishlist_item->wishlistItem_id) }}"
                                onclick="event.preventDefault(); document.getElementById('destroy-form').submit();">
                                <i class='bx bxs-heart' id="heart"></i>
                            </a>

                            <form id="destroy-form" action="{{ route('wishlist.destroy', $wishlist_item->wishlistItem_id) }}"
                                method="POST" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="wish-close">
        <i class='bx bx-x' id="wish-close"></i>
    </div>
</div>
