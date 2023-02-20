<div class="mt-3 content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <div class="title"><a
                            href="{{ route('stock-control.categories') }}">{{ __('stock-control/stock_categories.title') }}</a>
                    </div>
                </div>
                <div class="col-md-4">
                    @canany(['stock_categories_create', 'sa'])
                        <button class="btn btn-primary btn-sm" wire:click="createStockCategories"><i class="fa fa-plus"></i>
                            {{ __('global.create_new') }}</button>
                    </div>
                @endcanany
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
                            <th>{{ __('stock-control/stock_categories.fields.name') }}</th>
                            <th>{{ __('stock-control/stock_categories.fields.slug') }}</th>
                            <th>{{ __('stock-control/stock_categories.fields.parent_id') }}</th>
                            <th>{{ __('stock-control/stock_categories.fields.is_active') }}</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                            <tr>
                                <td>{{ $rec->name }}</td>
                                <td>{{ $rec->slug }}</td>
                                <td>{{ $rec->parent_id == 0 ? '' : $rec->parent->name }}</td>
                                <td>{{ ($rec->is_active==0) ? __('global.no') : __('global.yes') }}</td>
                                <td>
                                    <div class="dropleft float-right">
                                        <a class="dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"
                                                wire:click="editStockCategories({{ $rec->id }})">
                                                {{ __('global.edit') }} </a>
                                            <a class="dropdown-item" href="#"
                                                wire:click="deleteStockCategories({{ $rec->id }})">
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
    <form wire:submit.prevent="submitStockCategories">
        <x-modal id="modalStockCategories" :title="__('stock-control/stock_categories.title')">
            <div class="form-group">
                <x-label for="name">{{ __('stock-control/stock_categories.fields.name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="name" />
                <x-error for="name" />
            </div>
            <div class="form-group">
                <x-label for="slug">{{ __('stock-control/stock_categories.fields.slug') }}</x-label>
                <x-input id="slug" class="{{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text"
                    wire:model.defer="slug" />
                <x-error for="slug" />
            </div>
            <div class="form-group">
                <x-label for="parent_id">{{ __('stock-control/stock_categories.fields.parent_id') }}</x-label>
                <x-select id="parent_id" wire:model.defer="parent_id"
                    class="{{ $errors->has('parent_id') ? 'is-invalid' : '' }}">
                    <option value="">{{ __('global.pleaseSelect') }}</option>
                    <option value="0">Main</option>
                    @foreach ($parents as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </x-select>
            </div>
            <div class="form-group">
                <x-checkbox id="is_active">{{ __('stock-control/stock_categories.fields.is_active') }}</x-checkbox>
            </div>
        </x-modal>
    </form>
    <x-modal-delete id="deleteStockCategories" />
</div>
