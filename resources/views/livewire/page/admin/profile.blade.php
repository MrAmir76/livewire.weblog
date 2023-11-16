<div>
    <div class="container m-5">
        <h3 class="text-black-50"> بروزرسانی مشخصات کاربری</h3> <br>
        <form method="post" wire:submit.prevent="updateProfile">
            <div class="row my-3">
                <div class="col-sm-12 mb-3 col-md-5">
                    <input type="text" class="form-control" placeholder="شناسه کاربری" value="{{$username}}"
                           wire:model="username">
                    @error('username')
                    <small class="text-danger fw-bold">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-sm-12 mb-3 col-md-5">
                    <input type="text" class="form-control" placeholder="نام کامل"
                           value="{{$name}}" wire:model="name">
                    @error('name')
                    <small class="text-danger fw-bold">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-sm-12 mb-3 col-md-5">
                    <input type="password" class="form-control" placeholder="رمزعبور قدیمی"
                           wire:model="oldPassword">
                    @error('oldPassword')
                    <small class="text-danger fw-bold">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-sm-12 mb-3 col-md-5">
                    <input type="password" class="form-control" placeholder="رمزعبور جدید"
                           wire:model="newPassword">
                    @error('newPassword')
                    <small class="text-danger fw-bold">{{$message}}</small>
                    @enderror
                </div>
                <label class="form-check-label col-2 mt-3">
                    مدیرسایت
                    <input class="form-check-input" type="checkbox"
                           wire:model="isAdmin" {{$isAdmin ? 'checked':''}}>
                </label>
                <div>
                    <input class="btn col-3  submit" type="submit" value="بروزرسانی">
                </div>
            </div>
        </form>
    </div>
</div>
