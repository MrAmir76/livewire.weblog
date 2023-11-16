<li class="nav-item">
    <a class="nav-link" href="{{route('category',['slug'=>$category->slug])}}" wire:navigate>
        {{$category->name}}
    </a>
</li>
