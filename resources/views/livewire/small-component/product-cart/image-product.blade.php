<figure class="position-relative">
    <img src="{{$product->image_address}}" alt="{{$product->name}}"
         class="w-100 rounded">
    <figcaption class="tp_top position-absolute p-4">
        <span>{{\App\helper\Jalali::convert($product->created_at)[0]}}</span>
    </figcaption>
</figure>
