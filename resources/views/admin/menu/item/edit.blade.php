<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Menu Items') }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{route('admin.menu.item.index', $menu->id)}}" title="{{ __('Update Menu Item') }}">{{ __('<< Back to Menu Items') }}</x-admin.breadcrumb>
        <x-admin.form.errors />
    </div>
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('admin.menu.item.update', ['menu' => $menu->id, 'item' => $item->id]) }}">
                @csrf
                @method('PUT')

                <x-admin.form.row_input>
                    <x-admin.form.label for="name">{{ __('Name') }}</x-admin.form.label>

                    <x-admin.form.input id="name" class="{{$errors->has('name') ? 'is-invalid' : ''}}" type="text" name="name" value="{{ old('name', $item->name) }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="uri" class="{{$errors->has('uri') ? 'text-red-400' : ''}}">{{ __('Link') }}</x-admin.form.label>

                    <x-admin.form.input id="uri" class="{{$errors->has('uri') ? 'is-invalid' : ''}}" type="text" name="uri" value="{{ old('uri', $item->uri) }}" />
                    <div class="item-list">
                        You can also enter an internal path such as <span class="badge bg-label-primary">/home</span> or an external URL such as <span class="badge bg-label-primary">http://example.com</span>.
                        Add prefix <span class="badge bg-label-primary">&lt;admin&gt;</span> to link for admin page. Enter <span class="badge bg-label-primary">&lt;nolink&gt;</span> to display link text only.
                    </div>
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="description" class="{{$errors->has('description') ? 'text-red-400' : ''}}">{{ __('Description') }}</x-admin.form.label>

                    <x-admin.form.input id="description" class="{{$errors->has('description') ? 'is-invalid' : ''}}" type="text" name="description" value="{{ old('description', $item->description) }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <label for="enabled" class="inline-flex items-center">
                        <input id="enabled" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="enabled" value="1" {{ old('enabled', $item->enabled) ? 'checked="checked"' : '' }}>
                        <span class="ml-2">{{ __('Enabled') }}</span>
                    </label>
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="parent_id">{{ __('Parent Item') }}</x-admin.form.label>
                    <div class="position-relative">
                    <select name="parent_id" id="parent_id" class="select2 form-select">
                        <option value=''>-ROOT-</option>
                        @foreach ($item_options as $key => $name)
                        <option value="{{ $key }}" @selected(old('parent_id', $item['parent_id'])==$key)>
                            {!! $name !!}
                        </option>
                        @endforeach
                    </select>
                    </div>

                    <div>
                        The maximum depth for a link and all its children is fixed. Some menu links may not be available as parents if selecting them would exceed this limit.
                    </div>
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="weight">{{ __('Weight') }}</x-admin.form.label>

                    <x-admin.form.input id="weight" class="{{$errors->has('weight') ? 'is-invalid' : ''}}" type="number" name="weight" value="{{ old('weight', $item->weight) }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="icon">{{ __('Icon') }}</x-admin.form.label>

                    <textarea name="icon" id="icon" class="form-control {{$errors->has('icon') ? 'is-invalid' : ''}}">{{ old('icon', $item->icon) }}</textarea>
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                <h4>Roles</h4>
                    <div class="row px-3">
                        @forelse ($roles as $role)
                        <div class="col form-check">
                            <input class="form-check-input" id="role-{{ $role->id }}" type="checkbox" name="roles[]" value="{{ $role->name }}" {{ in_array($role->id, $itemHasRoles) ? 'checked' : '' }} />
                            <x-admin.form.label for="role-{{ $role->id }}">{{ $role->name }}</x-admin.form.label>
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