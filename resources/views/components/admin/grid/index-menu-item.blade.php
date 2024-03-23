<tr>
    <x-admin.grid.td>
        <div class="text-sm" style="margin-left:{{$level*20}}px;">
            @if($item['icon'])
            <x-admin.base-icon path="{{$item['icon']}}" />
            @endif
            {{ $item['name'] }}
        </div>
    </x-admin.grid.td>
    <x-admin.grid.td>
        <div class="text-sm">
            {{ $item['enabled'] ? 'Enabled' : 'Disabled' }}
        </div>
    </x-admin.grid.td>
    @canany(['menu edit', 'menu delete', 'menu.item list'])
    <x-admin.grid.td>
        <form action="{{ route('admin.menu.item.destroy', ['menu' => $menu->id, 'item' => $item['id']]) }}" method="POST">
            <div>

                @can('menu.item edit')
                <a href="{{route('admin.menu.item.edit', ['menu' => $menu->id, 'item' => $item['id']]) }}" class="btn btn-sm btn-icon">
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
@isset($item['children'])
    @foreach($item['children'] as $child)
        <x-admin.grid.index-menu-item :item="$child" :menu="$menu" :level="($level+1)" />
    @endforeach
@endisset