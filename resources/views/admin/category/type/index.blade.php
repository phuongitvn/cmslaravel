<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Category Types') }}
    </x-slot>
    <x-admin.action_buttons title="{{ __('Category Types') }}">
        @can('menu create')
        <x-admin.add-link href="{{ route('admin.category.type.create') }}">
            {{ __('Add Category Type') }}
        </x-admin.add-link>
        @endcan
    </x-admin.action_buttons>
    <div class="card">
        <div class="card-body">
            <x-admin.grid.search action="{{ route('admin.category.type.index') }}" />
        </div>
        <x-admin.grid.table>
            <x-slot name="head">
                <tr class="bg-base-200">
                    <x-admin.grid.th is_sort="true" attr="name">
                        @include('admin.includes.sort-link', ['label' => 'Name', 'attribute' => 'name'])
                    </x-admin.grid.th>
                    <x-admin.grid.th>
                        {{ __('Description') }}
                    </x-admin.grid.th>
                    <x-admin.grid.th>
                        {{ __('Machine name') }}
                    </x-admin.grid.th>
                    @canany(['category.type edit', 'category.type delete'])
                    <x-admin.grid.th>
                        {{ __('Actions') }}
                    </x-admin.grid.th>
                    @endcanany
                </tr>
            </x-slot>
            <x-slot name="body">
                @foreach($categoryTypes as $categoryType)
                <tr>
                    <x-admin.grid.td>
                        <div>
                            {{ $categoryType->name }}
                        </div>
                    </x-admin.grid.td>
                    <x-admin.grid.td>
                        <div>
                            {{ $categoryType->description }}
                        </div>
                    </x-admin.grid.td>
                    <x-admin.grid.td>
                        <div>
                            {{ $categoryType->machine_name }}
                        </div>
                    </x-admin.grid.td>
                    @canany(['category.type edit', 'category.type delete', 'category list'])
                    <x-admin.grid.td>
                        <form action="{{ route('admin.category.type.destroy', $categoryType->id) }}" method="POST">
                            <div>
                                @can('category list')
                                <a href="{{route('admin.category.type.item.index', $categoryType->id)}}" class="btn btn-sm btn-icon">
                                    <i class="bx bx-menu"></i>
                                </a>
                                @endcan

                                @can('category.type edit')
                                <a href="{{route('admin.category.type.edit', $categoryType->id)}}" class="btn btn-sm btn-icon">
                                    <i class="bx bx-edit"></i>
                                </a>
                                @endcan

                                @can('category.type delete')
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-icon delete-record" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                    <i class="bx bx-trash"></i>
                                </button>
                                @endcan
                            </div>
                        </form>
                    </x-admin.grid.td>
                    @endcanany
                </tr>
                @endforeach
                @if($categoryTypes->isEmpty())
                <tr>
                    <td colspan="4">
                        <div>
                            {{ __('No Result Found') }}
                        </div>
                    </td>
                </tr>
                @endif
            </x-slot>
        </x-admin.grid.table>
    </div>
    <div class="py-8">
        {{ $categoryTypes->appends(request()->query())->links() }}
    </div>
    </div>
</x-admin.wrapper>