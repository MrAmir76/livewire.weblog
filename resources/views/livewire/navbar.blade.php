<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"
         id="navbarSupportedContent">
        <a href="{{route('index')}}" class="bi-house fw-bold text-black-50 home-page" wire:navigate></a>
        <ul class="navbar-nav mb-2 mb-lg-0">
            @foreach($superCategories as $category)
                @if($category->has_children ==1)
                    <livewire:DropdownCategory :category="$category"/>
                @else
                    <livewire:SingleCategory :category="$category"/>
                @endif
            @endforeach
        </ul>
    </div>
    @auth()
        <a href="{{route('auth.profile')}}" wire:navigate
           class="text-black-50 auth-page fw-bold bi-person-lines-fill border p-2 m-1"> پروفایل
        </a>
        <livewire:Page.Logout/>
    @else
        <a href="{{route('login')}}"
           class="text-black-50 auth-page fw-bold bi-person border p-2">
            حساب کاربری
        </a>
    @endauth
</nav>
