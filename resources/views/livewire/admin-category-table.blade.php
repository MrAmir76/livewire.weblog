<div class="p-3" style="max-height:440px;overflow-y: auto">
    <table class="table">
        <thead class="thead-light">
        <tr class="bg-dark text-white">
            <th scope="col">#</th>
            <th scope="col">نام دسته</th>
            <th scope="col">شناسه دسته</th>
            <th scope="col">والد</th>
            <th scope="col">فرزند</th>
            <th scope="col">فعال</th>
            <th scope="col" class="text-center">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr wire:key="{{$category->id}}">
                <th scope="col">{{$category->id}}</th>
                <th scope="col">{{$category->name}}</th>
                <th scope="col">{{$category->slug}}</th>
                <th scope="col">{{optional(\App\Models\Category::find($category->parent_id))->name ?? 'ندارد'}}</th>
                <th scope="col">{{$category->has_children ? 'دارد':'ندارد'}}</th>
                <th scope="col">{{$category->active?'هست':'نیست'}}</th>
                <th scope="col">
                    <span class="btn btn-danger float-start mx-1"
                          wire:click="deleteCategory({{$category->id}})">حذف
                    </span>
                    <span class="btn btn-warning float-start mx-1"
                          wire:click="$dispatch('updateFrom',{categoryId: {{ $category->id }}})">
                        ویرایش
                    </span>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
