<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Permissions') }}
    </x-slot>
    <x-admin.action_buttons title="{{ __('Permissions') }}">
        @can('permission create')
        <x-admin.add-link href="{{ route('admin.permission.create') }}">
            {{ __('Add Permission') }}
        </x-admin.add-link>
        @endcan
    </x-admin.action_buttons>
    <div class="card">
        <div class="card-header">
            <x-admin.grid.search action="{{ route('admin.permission.index') }}" />
        </div>
        <div class="">

            <x-admin.grid.table>
                <x-slot name="head">
                    <tr class="bg-base-200">
                        <x-admin.grid.th>
                            {{ __('Name') }}
                        </x-admin.grid.th>
                        @canany(['permission edit', 'permission delete'])
                        <x-admin.grid.th>
                            {{ __('Actions') }}
                        </x-admin.grid.th>
                        @endcanany
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @foreach($permissions as $permission)
                    <tr>
                        <x-admin.grid.td>
                            <a href="{{route('admin.permission.show', $permission->id)}}" class="no-underline hover:underline text-cyan-600">{{ $permission->name }}</a>
                        </x-admin.grid.td>
                        @canany(['permission edit', 'permission delete'])
                        <x-admin.grid.td>
                            <form action="{{ route('admin.permission.destroy', $permission->id) }}" method="POST">
                                <div>
                                    @can('permission edit')
                                    <a href="{{route('admin.permission.edit', $permission->id)}}" class="btn btn-sm btn-icon">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    @endcan

                                    @can('permission delete')
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
                    @if($permissions->isEmpty())
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
            {{ $permissions->appends(request()->query())->links() }}
        </div>
    </div>
</x-admin.wrapper>