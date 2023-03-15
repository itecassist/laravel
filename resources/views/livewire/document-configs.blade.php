<div class="mt-3 content">
    @canany(['document_configs_access', 'sa'])
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <a href="{{ route('document-configs') }}">{{ __('document_configs.title') }}</a>
                    </div>
                </div>
                <div class="col-md-4">
                    @canany(['table_create', 'sa'])
                        <button class="btn btn-primary btn-sm" wire:click="createDocumentConfigs"><i class="fa fa-plus"></i>&nbsp;{{ __('global.create_new') }}</button>
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
							<th>{{ __('document_configs.fields.company_id') }}</th>
							<th>{{ __('document_configs.fields.name') }}</th>
							<th>{{ __('document_configs.fields.required_immediate') }}</th>
							<th>{{ __('document_configs.fields.required_original') }}</th>
							<th>{{ __('document_configs.fields.required_document') }}</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                        <tr>
							<td>{{ $rec->company_id }}</td>
							<td>{{ $rec->name }}</td>
							<td>{{ $rec->required_immediate }}</td>
							<td>{{ $rec->required_original }}</td>
							<td>{{ $rec->required_document }}</td>
                            <td class="text-right">
                                @canany(['document_configs_update', 'document_configs_delete', 'sa'])
                                <div class="dropleft">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        @canany(['users_update', 'sa'])
                                            <a class="dropdown-item" href="#" wire:click="editDocumentConfigs({{ $rec->id }})"> {{ __('global.edit') }}</a>
                                        @endcanany
                                        @canany(['users_delete', 'sa'])
                                            <a class="dropdown-item" href="#" wire:click="deleteDocumentConfigs({{ $rec->id }})"> {{ __('global.delete') }} </a>
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
    <form wire:submit.prevent="submitDocumentConfigs">
        <x-modal id="modalDocumentConfigs" :title="__('document_configs.title')">
            			<div class="form-group">
                <x-checkbox id="company_id">{{ __('document_configs.fields.company_id') }}</x-checkbox>
            </div>
			<div class="form-group">
                <x-label for="name">{{ __('document_configs.fields.name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="name" />
                <x-error for="name" />
            </div>
			<div class="form-group">
                <x-checkbox id="required_immediate">{{ __('document_configs.fields.required_immediate') }}</x-checkbox>
            </div>
			<div class="form-group">
                <x-checkbox id="required_original">{{ __('document_configs.fields.required_original') }}</x-checkbox>
            </div>
			<div class="form-group">
                <x-checkbox id="required_document">{{ __('document_configs.fields.required_document') }}</x-checkbox>
            </div>
			<div class="form-group">
                <x-checkbox id="use_as_download">{{ __('document_configs.fields.use_as_download') }}</x-checkbox>
            </div>

        </x-modal>
    </form>
    <x-modal-delete id="deleteDocumentConfigs" />
</div>
@push('scripts')
<script>
    $(document).ready(function () {

    });
    document.addEventListener("livewire:load", () => {
        Livewire.hook('message.processed', (message, component) => {

        });
    });
</script>
@endpush
