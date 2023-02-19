<div class="mt-3 content">
    @canany(['roles_access', 'sa'])
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <div class="title"><a href="{{ route('user-management.roles') }}">{{ __('user-management/roles.title') }}</a></div>
                </div>
                <div class="col-md-4">
                    @canany(['roles_create', 'sa'])
                        <button class="btn btn-primary btn-sm" wire:click="createRoles"><i class="fa fa-plus"></i> {{ __('global.create_new') }}</button>
                    @endcanany
                </div>
                <div class="col-md-3">
                    <div class="card-tools">
                        <div class="row">
                            <div class="col-md-3"><input type="text" class="form-control form-control-sm"
                                    value="8" size="3" wire:model="pageSize"></div>
                            <div class="col-md-9"><input type="text" class="form-control form-control-sm"
                                    wire:model.debounce.300ms="searchTerm" placeholder="Search"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table table-hover">
                    <thead>
                        <tr>
                            <th>{{ __('user-management/roles.fields.name') }}</th>
                            <th>{{ __('user-management/roles.fields.permission') }}</th>
                            <th class="col-md-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                            <tr>
                                <td>{{ $rec->name }}</td>
                                <td>
                                    @foreach ($rec->permissions as $permission)
                                        <span class="badge bg-info">{{ $permission->access }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="dropleft float-right">
                                        <a class="dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"
                                                wire:click="editRoles({{ $rec->id }})"> {{ __('global.edit') }}
                                            </a>
                                            <a class="dropdown-item" href="#"
                                                wire:click="deleteRoles({{ $rec->id }})">
                                                {{ __('global.delete') }} </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.card -->
{!! $data->links() !!}
    <!-- /.content -->

    @else
    {{ __('global.access_denied') }}
@endcan
    <form wire:submit.prevent="submitRoles">
        <x-modal maxWidth="xl" id="modalRoles" :title="__('user-management/roles.title')">
            <div class="form-group">
                <x-label for="name">{{ __('user-management/roles.fields.name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="name" />
                <x-error for="name" />
            </div>
            <div class="form-group">
                <div class="row">
                 @foreach ($permission_list as $pl)
                    @if ($pl->group_id == 0)
                        <div class="col-md-2">
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" wire:model="permission"
                                    value="{{ $pl->id }}"
                                    @isset($role) 
                                        @if (isset($role->permissions) && $role->permissions->contains($pl->id))
                                            checked="" 
                                        @endif
                                    @endisset>
                                <span class="form-check-label">
                                    {{ $pl->name }}</span>
                            </label>
                            @foreach ($permission_list as $list)
                            @if ($list->group_id == $pl->id)
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model="permission"
                                        value="{{ $list->id }}"
                                        @isset($role) 
                                                @if (isset($role->permissions) && $role->permissions->contains($list->id))
                                                    checked="" 
                                                @endif
                                        @endisset>
                                    <span class="form-check-label">{{ $list->name }}</span>
                                </label>
                            @endif
                        @endforeach
                        </div>
                    @endif


                    
                @endforeach   
                </div>
                
            </div>
        </x-modal>
    </form>
    <x-modal-delete id="deleteRoles" />
</div>
