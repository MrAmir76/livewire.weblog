<header>
    <div class="index-top position-relative w-100 bg-white">
        <div class="main-menu">
            <div class="row" style="padding: 10px 20px">
                <div class="col-md-1 col-lg-1 col-xl-1 col-xxl-1 logo">
                    <a href="{{route('index')}}" wire:navigate>
                        <img src="{{asset('asset/img/logo.png')}}" alt="" height="50px">
                    </a>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-7 col-xl-7 col-xxl-7">
                    <livewire:Navbar/>
                </div>
                <div class="col-sm-12 col-md-6  col-lg-4  col-xl-4 col-xxl-4">
                    <livewire:SearchBox/>
                </div>
            </div>
        </div>
    </div>
</header>
