<div>
    @if ($paginator->hasPages())
        <nav>
            <ul class="pagination">
                {{--  اگه صفحه جاری بزرگتر از 3 باشد. چون اگر کوچکتر یا مساوی 3 باشد در قسمت بعد (توسط بخش: دوصفحه قبلی) نمایش داده می شود --}}
                @if ($paginator->currentPage()>3)
                    <li class="page-item" style="margin: 0 15px">
                        <a type="button" class="page-link" href="?{{ $paginator->getPageName()}}=1"
                           wire:navigate>1
                        </a>
                    </li>
                @endif
                {{-- دوصفحه قبل و بعد صفحه‌ی جاری --}}
                @foreach ($elements as $element)
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                    <span class="page-link">{{$page}}</span>
                                </li>
                            @else
                                @if($page == $paginator->currentPage()+1 or
                                    $page == $paginator->currentPage()+2 or
                                    $page == $paginator->currentPage()-1 or
                                    $page == $paginator->currentPage()-2
                                     )
                                    <li class="page-item ">
                                        <a type="button" class="page-link"
                                           href="?{{ $paginator->getPageName()}}={{ $page }}" wire:navigate>
                                            {{$page}}
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{--  اگه صفحه جاری کوچکتر از lastpage-2 باشد. چون در قسمت قبلی (توسط بخش: دوصفحه بعدی) نمایش داده می شود --}}
                @if ($paginator->currentPage()<$paginator->lastPage()- 2)
                    <li class="page-item" style="margin: 0 15px">
                        <a type="button" class="page-link"
                           href="?{{ $paginator->getPageName()}}={{$paginator->lastPage()}}"
                           wire:navigate>{{$paginator->lastPage()}}
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>
