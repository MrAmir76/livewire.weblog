<section>
    @foreach($categories as $category)
        <div class="container" wire:key="{{$category->id}}">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="title-box">
                        <span class="text-black-50 fw-bold">جدیدترین‌ محصولات </span>
                        <p class="m-0 p-2 badge bg-dark">
                            {{$category->name}}
                        </p>
                    </div>
                </div>
                @foreach($category->products->where('offer',0)-> sortByDesc('id')->take(6) as $product)
                    <livewire:VerticalProductCart :product='$product'/>
                @endforeach
            </div>
        </div>
        <hr>
    @endforeach
</section>
