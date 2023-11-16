<div class="container">
    @section('title',$title)
    <div class="row justify-content-center">

        @foreach($products as $product)
            <livewire:VerticalProductCart :product='$product'/>
        @endforeach

        <div class="m-2 d-inline-flex justify-content-around">
            {{$products->links()}}
        </div>

    </div>
</div>

