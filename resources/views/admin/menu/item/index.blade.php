<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Menus') }}
    </x-slot>
    
    <div class="d-print-none with-border">
        <x-admin.breadcrumb href="{{route('admin.menu.index')}}" title="{{ __('Menu Items') }}">{{ __('<< Back to all menus') }}</x-admin.breadcrumb> 
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <td>{{ __('Name') }}</td>
                        <td>{{$menu->name}}</td>
                    </tr>
                    <tr>
                        <td>{{ __('Machine name') }}</td>
                        <td>{{$menu->machine_name}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
    @can('menu create')
    <div class="card-header">
    <x-admin.add-link href="{{ route('admin.menu.item.create', $menu->id) }}">
        {{ __('Add Menu Item') }}
    </x-admin.add-link>
    </div>
    @endcan
    
    <div class="table-responsive">
        <div class="min-w-full  border-base-200 shadow overflow-x-auto">
            <x-admin.grid.table>
                <x-slot name="head">
                    <tr class="bg-base-200">
                        <x-admin.grid.th>
                        {{ __('Name') }}
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            {{ __('Enabled') }}
                        </x-admin.grid.th>
                        @canany(['menu.item edit', 'menu.item delete'])
                        <x-admin.grid.th>
                            {{ __('Actions') }}
                        </x-admin.grid.th>
                        @endcanany
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @foreach($items as $item)
                        <x-admin.grid.index-menu-item :item="$item" :menu="$menu" level="0"/>
                    @endforeach
                    @empty($items)
                        <tr>
                            <td colspan="2">
                                <div class="flex flex-col justify-center items-center py-4 text-lg">
                                    {{ __('No Result Found') }}
                                </div>
                            </td>
                        </tr>
                    @endempty
                </x-slot>
            </x-admin.grid.table>
        </div>
    </div>
    </div>
</x-admin.wrapper>
