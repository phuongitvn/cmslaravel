<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Roles') }}
    </x-slot>
    <x-admin.action_buttons title="{{ __('Roles') }}">
        @can('role create')
        <x-admin.add-link href="{{ route('admin.role.create') }}">
            {{ __('Add Role') }}
        </x-admin.add-link>
        @endcan
    </x-admin.action_buttons>

    <div class="card">
        <div class="card-body">
            <x-admin.grid.search action="{{ route('admin.role.index') }}" />
        </div>
        <div class="card-datatable table-responsive">
            <x-admin.grid.table>
                <x-slot name="head">
                    <tr class="bg-base-200">
                        <x-admin.grid.th is_sort="true" attr="name">
                            @include('admin.includes.sort-link', ['label' => 'Name', 'attribute' => 'name'])
                        </x-admin.grid.th>
                        @canany(['role edit', 'role delete'])
                        <x-admin.grid.th>
                            {{ __('Actions') }}
                        </x-admin.grid.th>
                        @endcanany
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @foreach($roles as $role)
                    <tr>
                        <x-admin.grid.td>
                            <div>
                                <a href="{{route('admin.role.show', $role->id)}}" class="no-underline hover:underline text-cyan-600">{{ $role->name }}</a>
                            </div>
                        </x-admin.grid.td>
                        @canany(['role edit', 'role delete'])
                        <x-admin.grid.td>
                            <form action="{{ route('admin.role.destroy', $role->id) }}" method="POST">
                                <div>
                                    @can('role edit')
                                    <a href="{{route('admin.role.edit', $role->id)}}" class="btn btn-sm btn-icon">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    @endcan

                                    @can('role delete')
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
                    @if($roles->isEmpty())
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
            {{ $roles->appends(request()->query())->links() }}
        </div>
    </div>
    </div>
</x-admin.wrapper>