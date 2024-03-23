<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Category Types') }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{route('admin.category.type.index')}}" title="{{ __('Create Category Type') }}">{{ __('<< Back to all Category Types') }}</x-admin.breadcrumb>
        <x-admin.form.errors />
    </div>
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('admin.category.type.store') }}">
                @csrf

                <x-admin.form.row_input>
                    <x-admin.form.label for="name">{{ __('Name') }}</x-admin.form.label>

                    <x-admin.form.input id="name" class="{{$errors->has('name') ? 'is-invalid' : ''}}" type="text" name="name" value="{{ old('name') }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="machine_name">{{ __('Machine-readable name') }}</x-admin.form.label>

                    <x-admin.form.input id="machine_name" class="{{$errors->has('machine_name') ? 'is-invalid' : ''}}" type="text" name="machine_name" value="{{ old('machine_name') }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="description">{{ __('Description') }}</x-admin.form.label>

                    <x-admin.form.input id="description" class="{{$errors->has('description') ? 'is-invalid' : ''}}" type="text" name="description" value="{{ old('description') }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <label for="is_flat" class="inline-flex items-center">
                        <input id="is_flat" type="checkbox" class="form-check-input" name="is_flat" value="1" {{ old('is_flat', 0) ? 'checked="checked"' : '' }}>
                        <span class="ml-2">{{ __('Use Flat Category') }}</span>
                    </label>
                </x-admin.form.row_input>

                <div class="flex justify-end mt-4">
                    <x-admin.form.button>{{ __('Create') }}</x-admin.form.button>
                </div>
            </form>
        </div>
    </div>
</x-admin.wrapper>