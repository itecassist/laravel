<div class="mt-3 content">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('stock-control.items') }}"> Stock Items </a> / {{ $action }}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="stock_category_id">Category</label>
                    <x-select id="stock_category_id"
                              class="{{ $errors->has('stock_category_id') ? 'is-invalid' : '' }}"
                              wire:model.defer="stock_category_id">
                        <option value="">{{ __('global.pleaseSelect') }}</option>
                        @foreach ($categories as $cat)
                            @if (count($cat) > 1)
                                <optgroup label="{{ $cat[0]['name'] }}">
                                    @foreach ($cat as $sub)
                                        @if ($sub['slug'] != $cat[0]['slug'])
                                            <option value="{{ $sub['id'] }}">{{ $sub['name'] }}</option>
                                        @endif
                                    @endforeach
                                </optgroup>
                            @else
                                <option value="{{ $cat[0]['id'] }}">{{ $cat[0]['name'] }}</option>
                            @endif
                        @endforeach
                    </x-select>
                    <x-error for="stock_category_id"/>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="item_code">Item Code</label>
                    <x-input type="text" id="item_code"
                             class="{{ $errors->has('item_code') ? 'is-invalid' : '' }}"
                             wire:model.defer="item_code" />
                    <x-error for="item_code"/>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="name">Name</label>
                    <x-input type="text" id="name"
                             class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                             wire:model="name" />
                    <x-error for="name"/>
                </div>
            </div>
        </div>

    </div>

</div>
