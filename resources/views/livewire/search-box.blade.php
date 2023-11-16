<form class="search" wire:submit.prevent="search">
    <div class="search-2">
        <button type="submit">جستوجو کن</button>
        <input type="text" placeholder="نام محصول مورد نظر را وارد کنید" wire:model="searchInput">
    </div>
    @error('searchInput')
    <span class="text-danger fw-bold m-auto">{{$message}}</span>
    @enderror
</form>
