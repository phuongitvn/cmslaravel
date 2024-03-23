@if(session()->has('message'))
<div class="alert alert-info d-flex" role="alert">
    <span class="badge badge-center rounded-pill bg-info border-label-info p-3 me-2"><i class="bx bx-detail fs-6"></i></span>
    <div class="d-flex flex-column ps-1">
        <span>{{ session()->get('message') }}</span>
    </div>
</div>
@endif