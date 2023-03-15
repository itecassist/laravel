<div class="mt-3 content">
    @canany(['mail_configs_access', 'sa'])
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <a href="{{ route('mail-configs') }}">{{ __('mail_configs.title') }}</a>
                    </div>
                </div>
                <div class="col-md-4">
                    @canany(['table_create', 'sa'])
                        <button class="btn btn-primary btn-sm" wire:click="createMailConfigs"><i class="fa fa-plus"></i>{{ __('global.create_new') }}</button>
                    @endcan
                </div>
                <div class="col-md-3">
                    <div class="card-tools">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" value="8" size="3" wire:model="pageSize">
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-control-sm" wire:model.debounce.300ms="searchTerm" placeholder="Search">
                            </div>
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
							<th>{{ __('mail_configs.fields.company_id') }}</th>
							<th>{{ __('mail_configs.fields.host') }}</th>
							<th>{{ __('mail_configs.fields.port') }}</th>
							<th>{{ __('mail_configs.fields.encryption') }}</th>
							<th>{{ __('mail_configs.fields.validate_cert') }}</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                        <tr>
							<td>{{ $rec->company_id }}</td>
							<td>{{ $rec->host }}</td>
							<td>{{ $rec->port }}</td>
							<td>{{ $rec->encryption }}</td>
							<td>{{ $rec->validate_cert }}</td>
                            <td class="text-right">
                                @canany(['mail_configs_update', 'mail_configs_delete', 'sa'])
                                <div class="dropleft">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        @canany(['users_update', 'sa'])
                                            <a class="dropdown-item" href="#" wire:click="editMailConfigs({{ $rec->id }})"> {{ __('global.edit') }}</a>
                                        @endcanany
                                        @canany(['users_delete', 'sa'])
                                            <a class="dropdown-item" href="#" wire:click="deleteMailConfigs({{ $rec->id }})"> {{ __('global.delete') }} </a>
                                        @endcanany
                                    </div>
                                </div>
                                @endcanany
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
    @endcanany
    <form wire:submit.prevent="submitMailConfigs">
        <x-modal id="modalMailConfigs" :title="__('mail_configs.title')">
            			
			<div class="form-group">
                <x-label for="name">{{ __('mail_configs.fields.host') }}</x-label>
                <x-input id="name" class="{{ $errors->has('host') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="host" />
                <x-error for="host" />
            </div>
			<div class="form-group">
                <x-label for="name">{{ __('mail_configs.fields.port') }}</x-label>
                <x-input id="name" class="{{ $errors->has('port') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="port" />
                <x-error for="port" />
            </div>
			<div class="form-group">
                <x-label for="encryption">{{ __('mail_configs.fields.encryption') }}</x-label>
                <select id="encryption" class="select2 form-control {{ $errors->has('encryption') ? 'is-invalid' : '' }}"
                    wire:model.defer="encryption">
                    <option value="">{{ __('global.pleaseSelect') }}</option>
                    @foreach (__('global.yesno') as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </select>
                <x-error for="encryption" />
            </div>
			<div class="form-group">
                <x-label for="validate_cert">{{ __('mail_configs.fields.validate_cert') }}</x-label>
                <select id="validate_cert" class="select2 form-control {{ $errors->has('validate_cert') ? 'is-invalid' : '' }}"
                    wire:model.defer="validate_cert">
                    <option value="">{{ __('global.pleaseSelect') }}</option>
                    @foreach (__('global.yesno') as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </select>
                <x-error for="validate_cert" />
            </div>
			<div class="form-group">
                <x-label for="name">{{ __('mail_configs.fields.username') }}</x-label>
                <x-input id="name" class="{{ $errors->has('username') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="username" />
                <x-error for="username" />
            </div>
			<div class="form-group">
                <x-label for="name">{{ __('mail_configs.fields.password') }}</x-label>
                <x-input id="name" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="password" />
                <x-error for="password" />
            </div>
			
			
        </x-modal>
    </form>
    <x-modal-delete id="deleteMailConfigs" />
</div>
@push('scripts')
<script>
    $(document).ready(function () {
        $('#encryption').select2();
        $('#encryption').on('change', function (e) {
            let data = $('#encryption').select2("val");
            @this.set('encryption', data);
        });$('#validate_cert').select2();
        $('#validate_cert').on('change', function (e) {
            let data = $('#validate_cert').select2("val");
            @this.set('validate_cert', data);
        });
    });
    document.addEventListener("livewire:load", () => {
        Livewire.hook('message.processed', (message, component) => {
            $('#encryption').select2();$('#validate_cert').select2();
        });
    });
</script>
@endpush
