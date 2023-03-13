<div class="mt-3 content">

    <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <div class="title"><a href="{{ route('stock-control.items') }}">{{ __('stock-control/stock_items.title') }}</a></div>
                </div>
                <div class="col-md-4">
				@canany(['stock_items_create', 'sa'])
					<a class="btn btn-primary btn-sm" href="{{ route('stock-control.items.form') }}"><i class="fa fa-plus"></i> {{ __('global.create_new') }}</a>
				@endcanany
				</div>
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
					<th>{{ __('stock-control/stock_items.fields.company_id') }}</th>
					<th>{{ __('stock-control/stock_items.fields.stock_category_id') }}</th>
					<th>{{ __('stock-control/stock_items.fields.name') }}</th>
					<th>{{ __('stock-control/stock_items.fields.slug') }}</th>
					<th>{{ __('stock-control/stock_items.fields.item_code') }}</th>
	                    <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                        <tr>
							<td>{{ $rec->company_id }}</td>
							<td>{{ $rec->category->name }}</td>
							<td>{{ $rec->name }}</td>
							<td>{{ $rec->slug }}</td>
							<td>{{ $rec->item_code }}</td>
							<td>
                                <div class="dropleft float-right">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('stock-control.items.form', $rec->id)}}" > {{ __('global.edit') }} </a>
                                        <a class="dropdown-item" href="#" wire:click="deleteStockItems({{ $rec->id }})"> {{ __('global.delete') }} </a>
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

{{--@else
    {{ __('global.access_denied') }}
@endcan--}}
    <form wire:submit.prevent="submitStockItems">
        <x-modal id="modalStockItems" :title="__('stock-control/stock_items.title')">

	<div class="form-group">
                <x-label for="company_id">{{ __('stock-control/stock_items.fields.company_id') }}</x-label><x-select id="company_id" wire:model.defer="company_id" class="{{ $errors->has('company_id') ? 'is-invalid' : '' }}">
                <option value="">{{ __('global.pleaseSelect') }}</option>
                @foreach (__('global.yesno') as $k => $v)
                    <option value="{{ $k }}">{{ $v }}</option>
                @endforeach
            </x-select>
            </div>
	<div class="form-group">
                <x-label for="stock_category_id">{{ __('stock-control/stock_items.fields.stock_category_id') }}</x-label><x-select id="stock_category_id" wire:model.defer="stock_category_id" class="{{ $errors->has('stock_category_id') ? 'is-invalid' : '' }}">
                <option value="">{{ __('global.pleaseSelect') }}</option>
                @foreach (__('global.yesno') as $k => $v)
                    <option value="{{ $k }}">{{ $v }}</option>
                @endforeach
            </x-select>
            </div>
	<div class="form-group">
                <x-label for="name">{{ __('stock-control/stock_items.fields.name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" wire:model.defer="name"/>
                <x-error for="name"/>
                </div>
	<div class="form-group">
                <x-label for="slug">{{ __('stock-control/stock_items.fields.slug') }}</x-label>
                <x-input id="slug" class="{{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" wire:model.defer="slug"/>
                <x-error for="slug"/>
                </div>
	<div class="form-group">
                <x-label for="item_code">{{ __('stock-control/stock_items.fields.item_code') }}</x-label>
                <x-input id="item_code" class="{{ $errors->has('item_code') ? 'is-invalid' : '' }}" type="text" wire:model.defer="item_code"/>
                <x-error for="item_code"/>
                </div>
	<div class="form-group">
                <x-label for="stock_unit_id">{{ __('stock-control/stock_items.fields.stock_unit_id') }}</x-label><x-select id="stock_unit_id" wire:model.defer="stock_unit_id" class="{{ $errors->has('stock_unit_id') ? 'is-invalid' : '' }}">
                <option value="">{{ __('global.pleaseSelect') }}</option>
                @foreach (__('global.yesno') as $k => $v)
                    <option value="{{ $k }}">{{ $v }}</option>
                @endforeach
            </x-select>
            </div>
	<div class="form-group">
                <x-date id="expire_date" class="{{ $errors->has('expire_date') ? 'is-invalid' : '' }}" wire:model.defer="expire_date" />
                </div>
	<div class="form-group">
            <x-label for="on_hand">{{ __('stock-control/stock_items.fields.on_hand') }}</x-label>
            <x-input id="on_hand" class="{{ $errors->has('on_hand') ? 'is-invalid' : '' }}" type="text" wire:model.defer="on_hand"/>
            <x-error for="on_hand"/>
            </div>
	<div class="form-group">
            <x-label for="min_order_quantity">{{ __('stock-control/stock_items.fields.min_order_quantity') }}</x-label>
            <x-input id="min_order_quantity" class="{{ $errors->has('min_order_quantity') ? 'is-invalid' : '' }}" type="text" wire:model.defer="min_order_quantity"/>
            <x-error for="min_order_quantity"/>
            </div>
	<div class="form-group">
                <x-label for="tags">{{ __('stock-control/stock_items.fields.tags') }}</x-label>
                <x-input id="tags" class="{{ $errors->has('tags') ? 'is-invalid' : '' }}" type="text" wire:model.defer="tags"/>
                <x-error for="tags"/>
                </div>
	<div class="form-group">
                <x-label for="short_description">{{ __('stock-control/stock_items.fields.short_description') }}</x-label>
                <x-input id="short_description" class="{{ $errors->has('short_description') ? 'is-invalid' : '' }}" type="text" wire:model.defer="short_description"/>
                <x-error for="short_description"/>
                </div>
	<div class="form-group">
            <x-label for="description">{{ __('stock-control/stock_items.fields.description') }}</x-label>
            <x-input id="description" class="{{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" wire:model.defer="description"/>
            <x-error for="description"/>
            </div>
	<div class="form-group">
            <x-label for="weight_gram">{{ __('stock-control/stock_items.fields.weight_gram') }}</x-label>
            <x-input id="weight_gram" class="{{ $errors->has('weight_gram') ? 'is-invalid' : '' }}" type="text" wire:model.defer="weight_gram"/>
            <x-error for="weight_gram"/>
            </div>
	<div class="form-group">
            <x-label for="length_cm">{{ __('stock-control/stock_items.fields.length_cm') }}</x-label>
            <x-input id="length_cm" class="{{ $errors->has('length_cm') ? 'is-invalid' : '' }}" type="text" wire:model.defer="length_cm"/>
            <x-error for="length_cm"/>
            </div>
	<div class="form-group">
            <x-label for="height_cm">{{ __('stock-control/stock_items.fields.height_cm') }}</x-label>
            <x-input id="height_cm" class="{{ $errors->has('height_cm') ? 'is-invalid' : '' }}" type="text" wire:model.defer="height_cm"/>
            <x-error for="height_cm"/>
            </div>
	<div class="form-group">
            <x-label for="width_cm">{{ __('stock-control/stock_items.fields.width_cm') }}</x-label>
            <x-input id="width_cm" class="{{ $errors->has('width_cm') ? 'is-invalid' : '' }}" type="text" wire:model.defer="width_cm"/>
            <x-error for="width_cm"/>
            </div>
	<div class="form-group">
            <x-label for="unit_price">{{ __('stock-control/stock_items.fields.unit_price') }}</x-label>
            <x-input id="unit_price" class="{{ $errors->has('unit_price') ? 'is-invalid' : '' }}" type="text" wire:model.defer="unit_price"/>
            <x-error for="unit_price"/>
            </div>
	<div class="form-group">
            <x-label for="unit_price_for">{{ __('stock-control/stock_items.fields.unit_price_for') }}</x-label>
            <x-input id="unit_price_for" class="{{ $errors->has('unit_price_for') ? 'is-invalid' : '' }}" type="text" wire:model.defer="unit_price_for"/>
            <x-error for="unit_price_for"/>
            </div>
	<div class="form-group">
            <x-label for="markup_percentage">{{ __('stock-control/stock_items.fields.markup_percentage') }}</x-label>
            <x-input id="markup_percentage" class="{{ $errors->has('markup_percentage') ? 'is-invalid' : '' }}" type="text" wire:model.defer="markup_percentage"/>
            <x-error for="markup_percentage"/>
            </div>
	<div class="form-group">
                <x-label for="main_image">{{ __('stock-control/stock_items.fields.main_image') }}</x-label>
                <x-input id="main_image" class="{{ $errors->has('main_image') ? 'is-invalid' : '' }}" type="text" wire:model.defer="main_image"/>
                <x-error for="main_image"/>
                </div>
	<div class="form-group">
                <x-checkbox id="is_active">{{ __('stock-control/stock_items.fields.is_active') }}</x-checkbox>
                </div>
	<div class="form-group">
                <x-checkbox id="is_feature">{{ __('stock-control/stock_items.fields.is_feature') }}</x-checkbox>
                </div>
        </x-modal>
    </form>
    <x-modal-delete id="deleteStockItems" />
</div>
