<div class="mt-3" style="max-width: 800px; margin:0 auto">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <div class="title"><a
                            href="{{ route('stock-control.units') }}">{{ __('stock-control/stock_units.title') }}</a>
                    </div>
                </div>
                <div class="col-md-4">
                    @canany(['stock_units_create', 'sa'])
                        <button class="btn btn-primary btn-sm" wire:click="createStockUnits"><i class="fa fa-plus"></i>
                            {{ __('global.create_new') }}</button>
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
                            <th>{{ __('stock-control/stock_units.fields.name') }}</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                            <tr>
                                <td>{{ $rec->name }}</td>
                                <td>
                                    <div class="dropleft float-right">
                                        <a class="dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"
                                                wire:click="editStockUnits({{ $rec->id }})">
                                                {{ __('global.edit') }} </a>
                                            <a class="dropdown-item" href="#"
                                                wire:click="deleteStockUnits({{ $rec->id }})">
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
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    {!! $data->links() !!}
    <!-- /.content -->

    {{-- @else
    {{ __('global.access_denied') }}
@endcan --}}
    <form wire:submit.prevent="submitStockUnits">
        <x-modal id="modalStockUnits" :title="__('stock-control/stock_units.title')">
            <div class="form-group">
                <x-label for="name">{{ __('stock-control/stock_units.fields.name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="name" />
                <x-error for="name" />
            </div>
        </x-modal>
    </form>
    <x-modal-delete id="deleteStockUnits" />
</div>
