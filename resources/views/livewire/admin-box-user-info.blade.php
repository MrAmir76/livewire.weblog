<div class="info-profile p-3 mt-3">
    <div class="mb-1 float-start profile-box">
        <img class="picture-profile" src="{{asset('asset/img/profile.png')}}" alt="">
    </div>
    <div class="float-end">
        <small class="text-white text-shadow float-end">نام کاربر: {{$name}}</small><br>
        <span class="text-white text-shadow  float-end">شناسه کاربر: {{$email}}</span> <br>
        <span class="text-white text-shadow  float-end mt-1">
            <small>تاریخ عضویت:</small>
            <span>
                 {{\App\helper\Jalali::convert($created)[0]}}
            </span>
        </span>
    </div>
</div>
