<div class="col-md-8">
    <div class="slider-index shadow-sm">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @php($firstSlider = true)
                @foreach($sliders as $slider)
                    <div class="carousel-item {{$firstSlider? 'active':'' }}">
                        @php($firstSlider =false)
                        <a href="{{$slider->link}}" target="_blank" referrerpolicy="no-referrer">
                            <img src="{{$slider->image_address}}" style="width: 900px;height: 350px"
                                 class="d-block w-100 rounded" alt="{{$slider->title}}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
