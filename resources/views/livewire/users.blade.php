<div class="container">
    <x-table :title="__('Users')" role="grid">
        <x-slot name="header">
            <th class="col sortable-column" wire:click="sortBy('name')">
                @lang('Name')
                @if ($sortBy == 'name')
                    <x-icons.sort sortField='name' :sort-by="$sortBy" :sort-asc="$sortAsc" />
                @endif
            </th>
            <th class="col sortable-column" wire:click="sortBy('email')">
                @lang('Email')
                @if ($sortBy == 'email')
                    <x-icons.sort sortField='email' :sort-by="$sortBy" :sort-asc="$sortAsc" />
                @endif
            </th>
            <th class="col">@lang('Email Verified')</th>
            <th class="col">@lang('Is Admin')</th>
            <th class="col text-end">{{ __('global.action') }}</th>
        </x-slot>
        <x-slot name="body">
            @forelse ($data as $rec)
                <tr>
                    <td class="col">{{ $rec->name }}</td>
                    <td class="col">{{ $rec->email }}</td>
                    <td class="col">{{ $rec->email_verified_at }}</td>
                    <td class="col">{{ ($rec->is_admin==1) ? 'Yes' : 'No' }}</td>
                    <td class="col text-end">
                        <div class="dropdown dropstart">
                            <x-secondary-button class="dropdown-toggle" id="btn_{{ $rec->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                <x-icons.gear class="w-4 h-4"/>
                            </x-secondary-button>
                            <ul class="dropdown-menu" aria-labelledby="btn_{{ $rec->id }}">
                              <li><a class="dropdown-item" wire:click="showModal({{ $rec->id }})">{{ __('global.edit') }}</a></li>
                              <li><a class="dropdown-item" wire:click="showDestroy({{ $rec->id }})">{{ __('global.delete') }}</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">{{ __('global.no_results') }}</td></tr>
            @endforelse
        </x-slot>
        <x-slot name="footer">
            {{ $data->links() }}
        </x-slot>
    </x-table>
    <form wire:submit.prevent="modalSubmit">
        <x-modal id="formModal" :title="__('Users')">
            <div class="mb-3">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model.defer="state.name" autocomplete="name" />
                <x-input-error for="state.name" />
            </div>
            <div class="mb-3">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" wire:model.defer="state.email" autocomplete="email" />
                <x-input-error for="state.email" />
            </div>
            <div class="mb-3">
                <x-checkbox id="state.is_admin" :title="__('Is Admin')"/>
            </div>
        </x-modal>
    </form>
    <x-modal-delete/>
    
</div>
