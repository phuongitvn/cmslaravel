<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Roles') }}
    </x-slot>

    <x-admin.breadcrumb href="{{route('admin.role.index')}}" title="{{ __('Update role') }}">{{ __('<< Back to all roles') }}</x-admin.breadcrumb>
    <x-admin.form.errors />
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.role.update', $role->id) }}">
                @csrf
                @method('PUT')

                <div class="py-2">
                    <x-admin.form.label for="name" class="{{$errors->has('name') ? 'text-red-400' : ''}}">{{ __('Name') }}</x-admin.form.label>

                    <x-admin.form.input id="name" class="{{$errors->has('name') ? 'border-red-400' : ''}}" type="text" name="name" value="{{ old('name', $role->name) }}" />
                </div>

                @unless ($role->name == env('APP_SUPER_ADMIN', 'super-admin'))
                <div class="py-2">
                    <h4>Permissions</h4>
                    <div class="">
                        @forelse ($permissions as $permission)
                        <div class="col form-check">
                        <input type="checkbox" id="role-{{ $permission->id }}" name="permissions[]" value="{{ $permission->name }}" {{ in_array($permission->id, $roleHasPermissions) ? 'checked' : '' }} class="form-check-input">
                            <label class="form-check-label" for="role-{{ $permission->id }}">
                                {{ $permission->name }}
                            </label>
                        </div>
                        @empty
                        ----
                        @endforelse
                    </div>
                </div>
                @endunless

                <div class="flex justify-end mt-4">
                    <x-admin.form.button>{{ __('Update') }}</x-admin.form.button>
                </div>
            </form>
        </div>
    </div>
</x-admin.wrapper>