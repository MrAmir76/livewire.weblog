<section class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-box mb-3">
                    <p class="m-0 p-2 badge bg-dark">محصولات پیشنهادی</p>
                </div>
            </div>
            <div class="col-12">
                <div class="top-slider owl-carousel owl-theme top-slider-wrap">
                    @foreach($products as $product)
                        <a href="{{route('product.detail',[$product->id])}}"
                           wire:key="{{$product->id}}" wire:navigate class="hover">
                            <div class="slider-item bg-white rounded p-4">
                                <livewire:SmallComponent.ProductCart.ImageProduct :product="$product"/>
                                <livewire:SmallComponent.ProductCart.TitleProduct :product="$product"/>
                                <livewire:SmallComponent.ProductCart.CategoryTitleProduct :product="$product"/>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
