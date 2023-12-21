<form class="search">
    <div class="search-2">
        <input type="text"
               x-data
               x-init="$el.focus()"
               placeholder="نام محصول مورد نظر را وارد کنید"
               wire:model.live.debounce.2s="searchInput">
    </div>
    @error('searchInput')
    <span class="text-danger fw-bold m-auto py-1">{{$message}}</span>
    @enderror
</form>