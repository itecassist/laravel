<div class="mt-3 content">@canany(['mail_logs_access', 'sa'])
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">{{ __('mail_logs.title') }}</div>
                </div>
                <div class="col-md-4">
                    @canany(['mail_logs', 'sa'])
                        <button class="btn btn-primary btn-sm" wire:click="createMailLogs"><i class="fa fa-plus"></i>
                            {{ __('global.create_new') }}</button>
                    @endcan
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
            <table class="table table-responsive">
                <thead>
                    <tr>
						<th>{{ __('mail_logs.fields.company_id')}}</th>
						<th>{{ __('mail_logs.fields.user_id')}}</th>
						<th>{{ __('mail_logs.fields.from_email')}}</th>
						<th>{{ __('mail_logs.fields.to_email')}}</th>
						<th>{{ __('mail_logs.fields.subject')}}</th>
						<th class="w-1"></th>
					</tr>
                </thead>
                <tbody>
                @foreach($data as $rec)
                <tr>
                
						<td>{{ $rec->company_id }}</td>
						<td>{{ $rec->user_id }}</td>
						<td>{{ $rec->from_email }}</td>
						<td>{{ $rec->to_email }}</td>
						<td>{{ $rec->subject }}</td>
                    @canany(['mail_logs_update', 'mail_logs_delete', 'sa'])
                        <div class="dropleft"><a class="dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                            </a>
                            <div class="dropdown-menu">
                                @canany(['mail_logs_update', 'sa'])
                                    <a class="dropdown-item" href="#"
                                        wire:click="editMailLogs({{ $rec->id }})"> {{ __('global.edit') }}
                                    </a>
                                @endcanany
                                @canany(['mail_logs_delete', 'sa'])
                                    <a class="dropdown-item" href="#"
                                        wire:click="deleteMailLogs({{ $rec->id }})">
                                        {{ __('global.delete') }} </a>
                                @endcanany
                            </div>
                        </div>
                    @endcanany
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {!! $data->links() !!}
    @endcanany
    <form wire:submit.prevent="submitMailLogs">
        <x-modal id="modalUsers" :title="__('mail_logs.title')"></x-modal>
    </form>
</div>