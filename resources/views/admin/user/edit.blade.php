<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Users') }}
    </x-slot>

    <x-admin.breadcrumb href="{{route('admin.user.index')}}" title="{{ __('Update user') }}">{{ __('<< Back to all users') }}</x-admin.breadcrumb>
    <x-admin.form.errors />
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('admin.user.update', $user->id) }}">
                @csrf
                @method('PUT')

                <x-admin.form.row_input>
                    <x-admin.form.label for="name" class="{{$errors->has('name') ? 'text-red-400' : ''}}">{{ __('Name') }}</x-admin.form.label>

                    <x-admin.form.input id="name" class="{{$errors->has('name') ? 'border-red-400' : ''}}" type="text" name="name" value="{{ old('name', $user->name) }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="email" class="{{$errors->has('email') ? 'text-red-400' : ''}}">{{ __('Email') }}</x-admin.form.label>

                    <x-admin.form.input id="email" class="{{$errors->has('email') ? 'border-red-400' : ''}}" type="email" name="email" value="{{ old('email', $user->email) }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="password" class="{{$errors->has('password') ? 'text-red-400' : ''}}">{{ __('Password') }}</x-admin.form.label>

                    <x-admin.form.input id="password" class="{{$errors->has('password') ? 'border-red-400' : ''}}" type="password" name="password" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="password_confirmation" class="{{$errors->has('password') ? 'text-red-400' : ''}}">{{ __('Password Confirmation') }}</x-admin.form.label>

                    <x-admin.form.input id="password_confirmation" class="{{$errors->has('password') ? 'border-red-400' : ''}}" type="password" name="password_confirmation" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <h4>Roles</h4>
                    <div class="row px-3">
                        @forelse ($roles as $role)
                        <div class="col form-check">
                            <input type="checkbox" name="roles[]" value="{{ $role->name }}" class="form-check-input" id="role-{{ $role->id }}">
                            <label class="form-check-label" for="role-{{ $role->id }}">{{ $role->name }}</label>
                        </div>
                        @empty
                        ----
                        @endforelse
                    </div>
                </x-admin.form.row_input>

                <div class="flex justify-end mt-4">
                    <x-admin.form.button>{{ __('Update') }}</x-admin.form.button>
                </div>
            </form>
        </div>
    </div>
</x-admin.wrapper>