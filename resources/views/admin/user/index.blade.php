<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Users') }}
    </x-slot>
    <x-admin.action_buttons title="{{ __('Users') }}">
    @can('user create')
    <x-admin.add-link href="{{ route('admin.user.create') }}">
        {{ __('Add User') }}
    </x-admin.add-link>
    @endcan
    </x-admin.action_buttons>
    <div class="card">
        <div class="card-body">
            <x-admin.grid.search action="{{ route('admin.user.index') }}" />
        </div>
        <div class="card-datatable table-responsive">
            <x-admin.grid.table>
                <x-slot name="head">
                    <tr class="bg-base-200">
                        <x-admin.grid.th is_sort="true" attr="name">
                            @include('admin.includes.sort-link', ['label' => 'Name', 'attribute' => 'name'])
                        </x-admin.grid.th>
                        <x-admin.grid.th is_sort="true" attr="email">
                            @include('admin.includes.sort-link', ['label' => 'Email', 'attribute' => 'email'])
                        </x-admin.grid.th>
                        @canany(['user edit', 'user delete'])
                        <x-admin.grid.th>
                            {{ __('Actions') }}
                        </x-admin.grid.th>
                        @endcanany
                    </tr>
                </x-slot>
                <x-slot name="body">
                @foreach($users as $user)
                    <tr>
                        <x-admin.grid.td>
                            <div>
                                <a href="{{route('admin.user.show', $user->id)}}" class="no-underline hover:underline text-cyan-600">{{ $user->name }}</a>
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $user->email }}
                            </div>
                        </x-admin.grid.td>
                        @canany(['user edit', 'user delete'])
                        <x-admin.grid.td>
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                <div>
                                    @can('user edit')
                                    <a href="{{route('admin.user.edit', $user->id)}}" class="btn btn-sm btn-icon">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    @endcan

                                    @can('user delete')
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
                    @if($users->isEmpty())
                        <tr>
                            <td colspan="3">
                                <div class="py-4">
                                    {{ __('No Result Found') }}
                                </div>
                            </td>
                        </tr>
                    @endif
                </x-slot>
            </x-admin.grid.table>
        </div>
        <div class="py-8">
            {{ $users->appends(request()->query())->links() }}
        </div>
    </div>
</x-admin.wrapper>
