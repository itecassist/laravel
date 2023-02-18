<div class="mt-3 content">
	
    <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="card-title"><a href="{{ route('user-management.permissions') }}">{{ __('user-management/permissions.title') }}</a></h3>
                </div>
                <div class="col-md-4"><button class="btn btn-primary btn-sm" wire:click="createPermissions"><i class="fa fa-plus"></i> {{ __('global.create_new') }}</button></div>
                <div class="col-md-3">
                    <div class="card-tools">
                        <div class="row">
                            <div class="col-md-3"><input type="text" class="form-control form-control-sm" value="8" size="3" wire:model="pageSize"></div>
                            <div class="col-md-9"><input type="text" class="form-control form-control-sm" wire:model.debounce.300ms="searchTerm" placeholder="Search"></div>
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
					<th>{{ __('user-management/permissions.fields.access') }}</th>
					<th>{{ __('user-management/permissions.fields.name') }}</th>
					<th>{{ __('user-management/permissions.fields.group_id') }}</th>
	                    <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                        <tr>
							<td>{{ $rec->access }}</td>
							<td>{{ $rec->name }}</td>
							<td>{{ $rec->group_id }}</td>
							<td>
                                <div class="dropleft">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" wire:click="editPermissions({{ $rec->id }})"> {{ __('global.edit') }} </a>
                                        <a class="dropdown-item" href="#" wire:click="deletePermissions({{ $rec->id }})"> {{ __('global.delete') }} </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        {!! $data->links() !!}
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    <!-- /.content -->

{{--@else
    {{ __('global.access_denied') }}
@endcan--}}
    <form wire:submit.prevent="submitPermissions">
        <x-modal id="modalPermissions" :title="__('user-management/permissions.title')">
            
	<div class="form-group">
                <x-label for="access">{{ __('user-management/permissions.fields.access') }}</x-label>
                <x-input id="access" class="{{ $errors->has('access') ? 'is-invalid' : '' }}" type="text" wire:model.defer="access"/>
                <x-error for="access"/>
                </div>
	<div class="form-group">
                <x-label for="name">{{ __('user-management/permissions.fields.name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" wire:model.defer="name"/>
                <x-error for="name"/>
                </div>
	<div class="form-group">
                <x-label for="group_id">{{ __('user-management/permissions.fields.group_id') }}</x-label><x-select id="group_id" wire:model.defer="group_id" class="{{ $errors->has('group_id') ? 'is-invalid' : '' }}">
                <option value="">{{ __('global.pleaseSelect') }}</option>
                @foreach (__('global.yesno') as $k => $v)
                    <option value="{{ $k }}">{{ $v }}</option>
                @endforeach
            </x-select>
            </div>
        </x-modal>
    </form>
    <x-modal-delete id="deletePermissions" />
</div>
