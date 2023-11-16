<div>
    <div class="container mt-3">
        <h3 class="text-black-50">
            افزودن دسته جدید
        </h3>
        <form method="post" wire:submit.prevent="save">
            <div class="row">
                <div class="col-sm-12 mb-3 col-md-4">
                    <input type="text" class="form-control" placeholder="نام دسته" wire:model="categoryName">
                    @error('categoryName')
                    <small class="text-danger fw-bold">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-sm-12  col-md-4">
                    <input type="text" class="form-control" wire:model="categorySlug"
                           placeholder="شناسه دسته ( حروف کوچک و بزرگ اعداد و  - _ مجاز است )">
                    @error('categorySlug')
                    <small class="text-danger fw-bold">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-sm-12  col-md-4">
                    <select class="form-select py-12px" wire:model="categoryParent">
                        <option selected>بدون والد</option>
                        @foreach($categoryList as $key=>$value)
                            <option value={{$key}}>{{$value}}</option>
                        @endforeach
                    </select>
                    @error('categoryParent')
                    <small class="text-danger fw-bold">{{$message}}</small>
                    @enderror
                </div>
                <label class="form-check-label col-4">
                    فرزند دارد؟
                    <input class="form-check-input" type="checkbox" wire:model="hasChildren"
                           @if($hasChildren) checked @endif>
                    @error('hasChildren')
                    <small class="text-danger fw-bold">{{$message}}</small>
                    @enderror
                </label>
                <label class="form-check-label col-5">
                    دسته‌بندی فعال باشد؟
                    <input class="form-check-input" type="checkbox" wire:model="isActive"
                           @if($isActive) checked @endif>
                    @error('isActive')
                    <small class="text-danger fw-bold">{{$message}}</small>
                    @enderror
                </label>
                <div>
                    <input class="btn col-3 submit" type="submit"
                           value="{{isset($categoryId)?'بروزرسانی':'ذخیره'}}">
                </div>
            </div>
        </form>
    </div>
</div>
