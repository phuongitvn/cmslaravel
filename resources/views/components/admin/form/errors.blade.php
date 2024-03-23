@if ($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
    <p class="m-0">{{ $error }}</p>
    @endforeach
</div>
@endif