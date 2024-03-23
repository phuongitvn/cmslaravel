<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Menus') }}
    </x-slot>
    <x-admin.action_buttons title="{{ __('Menus') }}">
        @can('menu create')
        <x-admin.add-link href="{{ route('admin.menu.create') }}">
            {{ __('Add Menu') }}
        </x-admin.add-link>
        @endcan
    </x-admin.action_buttons>
    <div class="card">
        <h5 class="card-header">{{ __('Menus') }}</h5>
        <div class="card-body">
            <x-admin.grid.search action="{{ route('admin.menu.index') }}" />
        </div>
        <div class="card-datatable table-responsive">
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
                        @canany(['menu edit', 'menu delete'])
                        <x-admin.grid.th>
                            {{ __('Actions') }}
                        </x-admin.grid.th>
                        @endcanany
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @foreach($menus as $menu)
                    <tr>
                        <x-admin.grid.td>
                            {{ $menu->name }}
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            {{ $menu->description }}
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            {{ $menu->machine_name }}
                        </x-admin.grid.td>
                        @canany(['menu edit', 'menu delete', 'menu.item list'])
                        <x-admin.grid.td>
                            <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST">
                                <div>
                                    @can('menu.item list')
                                    <a href="{{route('admin.menu.item.index', $menu->id)}}" class="btn btn-sm btn-icon">
                                        <i class="bx bx-menu"></i>
                                    </a>
                                    @endcan

                                    @can('menu edit')
                                    <a href="{{route('admin.menu.edit', $menu->id)}}" class="btn btn-sm btn-icon">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    @endcan

                                    @can('menu delete')
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
                    @if($menus->isEmpty())
                    <tr>
                        <td colspan="2">
                            <div class="flex flex-col justify-center items-center py-4 text-lg">
                                {{ __('No Result Found') }}
                            </div>
                        </td>
                    </tr>
                    @endif
                </x-slot>
            </x-admin.grid.table>
        </div>
        <div class="py-8">
            {{ $menus->appends(request()->query())->links() }}
        </div>
    </div>
</x-admin.wrapper>