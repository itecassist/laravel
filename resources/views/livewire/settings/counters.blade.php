<div class="mt-3 container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5 title">
                    <a href="{{ route('settings.counters') }}">Counters</a>
                </div>
                <div class="col-md-4">
                    @canany(['counters_create', 'sa'])
                        <button class="btn btn-primary btn-sm" wire:click="createCounter"><i class="fa fa-plus"></i>
                            {{ __('global.create_new') }}</button>
                    @endcan
                </div>
                <div class="col-md-3 card-tools">
                    <div class="row">
                        <div class="col-md-3"><input type="text" class="form-control form-control-sm"
                                                     value="8" size="3" wire:model="pageSize"></div>
                        <div class="col-md-9"><input type="text" class="form-control form-control-sm"
                                                     wire:model.debounce.300ms="searchTerm" placeholder="Search"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table table-hover">
                    <thead>
                        <tr>
                            <th>{{ __('counters.fields.name') }}</th>
                            <th>{{ __('counters.fields.prefix') }}</th>
                            <th>{{ __('counters.fields.number') }}</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $rec)
                        <tr>
                            <td>{{ $rec->name }}</td>
                            <td>{{ $rec->prefix }}</td>
                            <td>{{ $rec->number }}</td>
                            <td class="text-right">
                                @canany(['counters_update', 'counters_delete', 'sa'])
                                    <div class="dropleft"><a class="dropdown-toggle" type="button"
                                                             data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            @canany(['counters_update', 'sa'])
                                                <a class="dropdown-item" href="#"
                                                   wire:click="editCounter({{ $rec->id }})"> {{ __('global.edit') }}
                                                </a>
                                            @endcanany
                                            @canany(['counters_delete', 'sa'])
                                                <a class="dropdown-item" href="#"
                                                   wire:click="deleteCounter({{ $rec->id }})">
                                                    {{ __('global.delete') }} </a>
                                            @endcanany
                                        </div>
                                    </div>
                                @endcanany
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
    {!! $data->links() !!}
    <form wire:submit.prevent="submitCounter">
        <x-modal id="modalCounter" :title="__('counters.title')">

            <div class="form-group">
                <x-label for="name">{{ __('counters.fields.name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('record.name') ? 'is-invalid' : '' }}" type="text"
                         wire:model.defer="record.name" />
                <x-error for="record.name" />
            </div>
        </x-modal>
    </form>

</div>
