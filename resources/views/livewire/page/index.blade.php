@section('title',$title)
<div class="mt-1">
    <section class="my-3">
        <div class="container">
            <div class="row">
                @livewire('Slider')
                @livewire('VipProduct')
                @livewire('ProductSlider')
                @livewire('CategoryProducts')

            </div>
        </div>
    </section>
</div>
