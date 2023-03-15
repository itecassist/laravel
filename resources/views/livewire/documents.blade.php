<div class="mt-3 content">
    @canany(['documents_access', 'sa'])
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <a href="{{ route('documents.all') }}">{{ __('documents.title') }}</a>
                    </div>
                </div>
                <div class="col-md-4">
                    @canany(['table_create', 'sa'])
                        <button class="btn btn-primary btn-sm" wire:click="createDocuments"><i class="fa fa-plus"></i>&nbsp;{{ __('global.create_new') }}</button>
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
							<th>{{ __('documents.fields.company_id') }}</th>
							<th>{{ __('documents.fields.user_id') }}</th>
							<th>{{ __('documents.fields.for_user_id') }}</th>
							<th>{{ __('documents.fields.document_config_id') }}</th>
							<th>{{ __('documents.fields.extension') }}</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                        <tr>
							<td>{{ $rec->company_id }}</td>
							<td>{{ $rec->user_id }}</td>
							<td>{{ $rec->for_user_id }}</td>
							<td>{{ $rec->document_config_id }}</td>
							<td>{{ $rec->extension }}</td>
                            <td class="text-right">
                                @canany(['documents_update', 'documents_delete', 'sa'])
                                <div class="dropleft">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        @canany(['users_update', 'sa'])
                                            <a class="dropdown-item" href="#" wire:click="editDocuments({{ $rec->id }})"> {{ __('global.edit') }}</a>
                                        @endcanany
                                        @canany(['users_delete', 'sa'])
                                            <a class="dropdown-item" href="#" wire:click="deleteDocuments({{ $rec->id }})"> {{ __('global.delete') }} </a>
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
    <form wire:submit.prevent="submitDocuments">
        <x-modal id="modalDocuments" :title="__('documents.title')">
            			<div class="form-group">
                <x-checkbox id="company_id">{{ __('documents.fields.company_id') }}</x-checkbox>
            </div>
			<div class="form-group">
                <x-checkbox id="user_id">{{ __('documents.fields.user_id') }}</x-checkbox>
            </div>
			<div class="form-group">
                <x-label for="name">{{ __('documents.fields.for_user_id') }}</x-label>
                <x-input id="name" class="{{ $errors->has('for_user_id') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="for_user_id" />
                <x-error for="for_user_id" />
            </div>
			<div class="form-group">
                <x-checkbox id="document_config_id">{{ __('documents.fields.document_config_id') }}</x-checkbox>
            </div>
			<div class="form-group">
                <x-label for="name">{{ __('documents.fields.extension') }}</x-label>
                <x-input id="name" class="{{ $errors->has('extension') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="extension" />
                <x-error for="extension" />
            </div>
			<div class="form-group">
                <x-label for="name">{{ __('documents.fields.file_name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('file_name') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="file_name" />
                <x-error for="file_name" />
            </div>
			<div class="form-group">
                <x-label for="name">{{ __('documents.fields.file_size') }}</x-label>
                <x-input id="name" class="{{ $errors->has('file_size') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="file_size" />
                <x-error for="file_size" />
            </div>
			<div class="form-group">
                <x-label for="notes">{{ __('documents.fields.notes') }}</x-label>
                <x-textarea id="notes" wire:model.defer="notes"></x-textarea>
                <x-error for="notes" />
            </div>

        </x-modal>
    </form>
    <x-modal-delete id="deleteDocuments" />
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
