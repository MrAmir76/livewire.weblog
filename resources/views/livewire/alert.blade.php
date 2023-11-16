<div>
    @if (session()->has('alert'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)"
             class="alert alert-danger" style="margin: 15px">
            <span class="fw-bold fs-5">
                <i class="fa fa-info-circle"></i>
                {{ session('alert') }}</span>
        </div>
    @endif
</div>
