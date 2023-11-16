<div class="item-cat p-1"
     style="background: unset; width: max-content;border-radius: 5px">
    <div class="d-flex">
    <span class="d-block text-black-50" style="padding-top: 7px">
        <i class="bi bi-link-45deg text-black-50"></i>
        دسته‌بندی:
    </span>
        @foreach($product->categories as $category)
            <span class="d-block pt-2 text-black-50"> &nbsp; {{$category->name}}</span>
        @endforeach
    </div>
</div>
