<footer class="bg-white py-2 text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="d-flex justify-content-center social-bx">
                    @foreach($socialNetworks as $sn)
                        <li class="p-2 m-1">
                            <a href="{{$sn->address}}">
                                <i class="{{$sn->icon}}"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12">
                <p>{{env('F_APP_NAME')}} ({{date('Y')}})</p>
                <p class="mb-0">&copy;تمامی حقوق برای این مجموعه محفوظ است.</p>
            </div>
        </div>
    </div>
</footer>
