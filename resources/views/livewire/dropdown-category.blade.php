<div class="dropdown">
    <button class="btn nav-link dropdown-toggle" style="background: white"
            id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="true">
        {{$category->name}}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

        @foreach($category->children as $child)
            <li>
                <a class="dropdown-item"
                   href="{{route('category',[$child->slug])}}" wire:navigate>
                    {{$child->name}}
                </a>
            </li>
        @endforeach
    </ul>
</div>
