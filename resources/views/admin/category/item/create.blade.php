<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Categories') }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{route('admin.category.type.item.index', $type->id)}}" title="{{ __('Add Category') }}">{{ __('<< Back to Categories') }}</x-admin.breadcrumb>
        <x-admin.form.errors />
    </div>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.category.type.item.store', ['type' => $type->id]) }}">
                @csrf

                <x-admin.form.row_input>
                    <x-admin.form.label for="name">{{ __('Name') }}</x-admin.form.label>

                    <x-admin.form.input id="name" class="{{$errors->has('name') ? 'is-invalid' : ''}}" type="text" name="name" value="{{ old('name') }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="slug">{{ __('Slug') }}</x-admin.form.label>

                    <x-admin.form.input id="slug" class="{{$errors->has('slug') ? 'is-invalid' : ''}}" type="text" name="slug" value="{{ old('slug') }}" />
                    <div>
                        The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.
                    </div>
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <x-admin.form.label for="description">{{ __('Description') }}</x-admin.form.label>

                    <x-admin.form.input id="description" class="{{$errors->has('description') ? 'is-invalid' : ''}}" type="text" name="description" value="{{ old('description') }}" />
                </x-admin.form.row_input>

                <x-admin.form.row_input>
                    <label for="enabled" class="inline-flex items-center">
                        <input id="enabled" type="checkbox" class="form-check-input" name="enabled" value="1" {{ old('enabled', 1) ? 'checked="checked"' : '' }}>
                        <span class="ml-2">{{ __('Enabled') }}</span>
                    </label>
                </x-admin.form.row_input>

                @if (!$type->is_flat)
                <div class="py">
                    <x-admin.form.label for="parent_id" class="{{$errors->has('parent_id') ? 'is-invalid' : ''}}">{{ __('Parent Item') }}</x-admin.form.label>

                    <select name="parent_id" class="input input-bordered w-full ">
                        <option value=''>-ROOT-</option>
                        @foreach ($item_options as $key => $name)
                        <option value="{{ $key }}" @selected(old('parent_id')==$key)>
                            {!! $name !!}
                        </option>
                        @endforeach
                    </select>

                    <div>
                        The maximum depth for a link and all its children is fixed. Some menu links may not be available as parents if selecting them would exceed this limit.
                    </div>
                </div>


                <x-admin.form.row_input>
                    <x-admin.form.label for="weight">{{ __('Weight') }}</x-admin.form.label>

                    <x-admin.form.input id="weight" class="{{$errors->has('weight') ? 'is-invalid' : ''}}" type="number" name="weight" value="{{ old('weight', 0) }}" />
                </x-admin.form.row_input>
                @endif

                <div class="flex justify-end mt-4">
                    <x-admin.form.button>{{ __('Create') }}</x-admin.form.button>
                </div>
            </form>
        </div>
    </div>
</x-admin.wrapper>