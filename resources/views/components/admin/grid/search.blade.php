<form method="GET" action="{{ $action }}">
    <div class="row">
        <div class="col-sm-10">
            <input type="search" name="search" value="{{ request()->input('search') }}" class="form-control" placeholder="Search">
        </div>
        <div class="col-sm-2">
            <button type='submit' class='btn btn-primary'>
                {{ __('Search') }}
            </button>
        </div>
    </div>
</form>