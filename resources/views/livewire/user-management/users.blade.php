<div class="mt-3 content">
	
    <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="card-title"><a href="{{ route('user-management.users') }}">{{ __('user-management/users.title') }}</a></h3>
                </div>
                <div class="col-md-4"><button class="btn btn-primary btn-sm" wire:click="createUsers"><i class="fa fa-plus"></i> {{ __('global.create_new') }}</button></div>
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
					<th>{{ __('user-management/users.fields.name') }}</th>
					<th>{{ __('user-management/users.fields.email') }}</th>
					<th>{{ __('user-management/users.fields.contact_number') }}</th>
					<th>{{ __('user-management/users.fields.email_verified_at') }}</th>
					<th>{{ __('user-management/users.fields.password') }}</th>
	                    <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                        <tr>
							<td>{{ $rec->name }}</td>
							<td>{{ $rec->email }}</td>
							<td>{{ $rec->contact_number }}</td>
							<td>{{ $rec->email_verified_at }}</td>
							<td>{{ $rec->password }}</td>
							<td>
                                <div class="dropleft">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" wire:click="editUsers({{ $rec->id }})"> {{ __('global.edit') }} </a>
                                        <a class="dropdown-item" href="#" wire:click="deleteUsers({{ $rec->id }})"> {{ __('global.delete') }} </a>
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
    <form wire:submit.prevent="submitUsers">
        <x-modal id="modalUsers" :title="__('user-management/users.title')">
            
	<div class="form-group">
                <x-label for="name">{{ __('user-management/users.fields.name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" wire:model.defer="name"/>
                <x-error for="name"/>
                </div>
	<div class="form-group">
                <x-label for="email">{{ __('user-management/users.fields.email') }}</x-label>
                <x-input id="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" wire:model.defer="email"/>
                <x-error for="email"/>
                </div>
	<div class="form-group">
                <x-label for="contact_number">{{ __('user-management/users.fields.contact_number') }}</x-label>
                <x-input id="contact_number" class="{{ $errors->has('contact_number') ? 'is-invalid' : '' }}" type="text" wire:model.defer="contact_number"/>
                <x-error for="contact_number"/>
                </div>
	<div class="form-group">
            <x-label for="email_verified_at">{{ __('user-management/users.fields.email_verified_at') }}</x-label>
            <x-input id="email_verified_at" class="{{ $errors->has('email_verified_at') ? 'is-invalid' : '' }}" type="text" wire:model.defer="email_verified_at"/>
            <x-error for="email_verified_at"/>
            </div>
	<div class="form-group">
                <x-label for="password">{{ __('user-management/users.fields.password') }}</x-label>
                <x-input id="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" wire:model.defer="password"/>
                <x-error for="password"/>
                </div>
	<div class="form-group">
                <x-label for="job_title">{{ __('user-management/users.fields.job_title') }}</x-label>
                <x-input id="job_title" class="{{ $errors->has('job_title') ? 'is-invalid' : '' }}" type="text" wire:model.defer="job_title"/>
                <x-error for="job_title"/>
                </div>
	<div class="form-group">
                <x-label for="theme">{{ __('user-management/users.fields.theme') }}</x-label>
                <x-input id="theme" class="{{ $errors->has('theme') ? 'is-invalid' : '' }}" type="text" wire:model.defer="theme"/>
                <x-error for="theme"/>
                </div>
	<div class="form-group">
                <x-checkbox id="is_admin">{{ __('user-management/users.fields.is_admin') }}</x-checkbox>
                </div>
	<div class="form-group">
                <x-label for="avatar">{{ __('user-management/users.fields.avatar') }}</x-label>
                <x-input id="avatar" class="{{ $errors->has('avatar') ? 'is-invalid' : '' }}" type="text" wire:model.defer="avatar"/>
                <x-error for="avatar"/>
                </div>
	<div class="form-group">
                <x-label for="remember_token">{{ __('user-management/users.fields.remember_token') }}</x-label>
                <x-input id="remember_token" class="{{ $errors->has('remember_token') ? 'is-invalid' : '' }}" type="text" wire:model.defer="remember_token"/>
                <x-error for="remember_token"/>
                </div>
        </x-modal>
    </form>
    <x-modal-delete id="deleteUsers" />
</div>
