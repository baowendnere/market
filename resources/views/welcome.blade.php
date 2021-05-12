<x-main-layout>
    <div class="container mt-4 mb-4">
        <div class="row">
            @foreach ($products as $product )
                <div class="card col-md-4">
                    <img class="card-img-top pt-2" src="https://picsum.photos/100/100" alt="Card image cap">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $product->prod_designation }}</h4>
                        <p class="card-text">{{ $product->prod_description }}</p>
                    </div>
                    <div class="card-body text-right">
                        <a href="{{ route('cart.add', $product->id) }}" class="card-link">Add to cart</a>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</x-main-layout>
