<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 my-3" wire:key="{{$product->id}}">
    <a href="{{route('product.detail',[$product->id])}}"
       wire:key="{{$product->id}}" wire:navigate class="hover">
        <div class="blg-wrap bg-white pb-3">
            <figure class="position-relative">
                <img src="{{$product->image_address}}" alt="{{$product->name}}" class="w-100">
                <figcaption class="position-absolute w-100 h-100">
                <span class="blg-dt text-black-shadow float-start bg-dark">
                    {{\App\helper\Jalali::convert($product->created_at)[0]}}
                </span>
                    <span class="blg-dt text-black-shadow float-end bg-dark">
                    {{$product->categories()->first()->name}}
                </span>
                </figcaption>
            </figure>
            <div class="px-3 py-1 text-start">
            <span class="blg-cat-name d-inline-block bg-info py-1 px-2 text-black-shadow">
                {{number_format($product->price)}}
                <span> تومان</span>
            </span>
            </div>
            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">
                {{$product->name}}

            </h4>
            <div class="post-type d-flex p-2 pb-0">
                <i class="{{$product->tag_icon}} d-inline-block text-info text-center"></i>
                <span>{{$product->tag}}</span>
            </div>
            <p class="p-4 overflow-hidden">
                {{Str::limit($product->description,150)}}
            </p>
        </div>
    </a>
</div>

