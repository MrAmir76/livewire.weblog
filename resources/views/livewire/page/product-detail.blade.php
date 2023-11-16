@section('title',$title)
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-lg-5">
            <div class="col-md-6 ">
                <img class="card-img-top mb-5 mb-md-0" src="{{$product->image_address}}"
                     alt="{{$product->name}}" style="box-shadow: 1px 1px 5px black"/>
            </div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder">{{$product->name}}</h1>
                <div class="fs-5 mb-5">
                    <span class="bg-danger badge text-black-shadow float-start"> {{$product->tag}} </span>
                    <span class="bg-dark badge text-black-shadow float-end">
                           {{$product->categories()->first()->name}}
                    </span>
                </div>
                <p class="lead " style="text-align: justify">{!! $product->description !!}</p>
                <div class="d-inline-flex float-end">
                    <span class="btn {{$product->is_exist? 'btn-success' :'btn-danger'}}
                        flex-shrink-0 text-black-shadow" type="button">
                        <i class="bi-cart{{$product->is_exist? '-fill':''}} me-1"></i>
                        {{$product->is_exist? 'موجود در فروشگاه' :'اتمام موجوی'}}
                    </span>

                </div>
                <div class="d-inline-flex float-start">
                    <span class="btn btn-success flex-shrink-0 text-black-shadow" type="button">
                        <i class="bi-percent me-1"></i>
                         {{number_format($product->price)}}
                        تومان
                    </span>

                </div>
            </div>
        </div>
    </div>
</section>
