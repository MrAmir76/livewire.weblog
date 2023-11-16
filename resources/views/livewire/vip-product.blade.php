<div class="col-md-4 top-slider">
    <div class="slider-item bg-white rounded p-4">
        <figure class="position-relative">
            <a href="{{route('product.detail',[$vipProduct->id])}}" wire:navigate>
                <img src="{{$vipProduct->image_address}}" alt="{{$vipProduct->name}}"
                     class="w-100 rounded">
            </a>
            <figcaption class="tp_top position-absolute p-4">
                <span>{{\App\helper\Jalali::convert($vipProduct->created_at)[0]}}</span>
            </figcaption>
            <figcaption class="tp_bottom position-absolute p-4">
                <i class="bi bi-award bg-white d-inline-block text-center"></i>
            </figcaption>
        </figure>
        <div class="item-cat">
            <div class="d-flex">
                <i class="bi bi-stars"></i>
                <a href="{{route('product.detail',[$vipProduct->id])}}" wire:navigate
                   class="d-block p-2 text-info">{{$vipProduct->name}}</a>
            </div>
        </div>
        <a href="{{route('product.detail',[$vipProduct->id])}}" wire:navigate>
            <h6 class="overflow-hidden px-2">{{number_format($vipProduct->price)}}
                <span>تومان</span>
            </h6>
        </a>
        <a href="{{route('product.detail',[$vipProduct->id])}}" wire:navigate
           class="d-block bg-dark p-3 mt-3 text-center text-light rounded">محصول Vip
        </a>
    </div>
</div>
