<div class="mt-3 container">
     <div class="card">
         <div class="card-header">
             <div class="row">
                 <div class="col-md-5">
                     <div class="title">
                         <a href="{{ route('settings.enums') }}">{{ __('enum_lookups.title') }}</a></div>
                 </div>
                 <div class="col-md-4">
                     @canany(['users_create', 'sa'])
                         <button class="btn btn-primary btn-sm" wire:click="createEnum"><i class="fa fa-plus"></i> {{ __('global.create_new') }}</button>
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
             <div class="table-responsive">
                 <table class="table table-vcenter table-mobile-md card-table table-hover">
                     <thead>
                     <tr>
                         <th>{{ __('enum_lookups.fields.name') }}</th>
                         <th>{{ __('enum_lookups.fields.value') }}</th>
                         <th class="w-1"></th>
                     </tr>
                     </thead>
                     <tbody>
                     @foreach ($data as $rec)
                         <tr>
                             <td>{{ $rec->name }}</td>
                             <td>{{ $rec->value }}</td>
                             <td class="text-right">
                                 @canany(['users_update', 'users_delete', 'sa'])
                                     <div class="dropleft"><a class="dropdown-toggle" type="button"
                                                              data-toggle="dropdown" aria-expanded="false">
                                             <i class="fa fa-cog"></i>
                                         </a>
                                         <div class="dropdown-menu">
                                             @canany(['users_update', 'sa'])
                                                 <a class="dropdown-item" href="#"
                                                    wire:click="editEnum({{ $rec->id }})"> {{ __('global.edit') }}
                                                 </a>
                                             @endcanany
                                             @canany(['users_delete', 'sa'])
                                                 <a class="dropdown-item" href="#"
                                                    wire:click="deleteEnum({{ $rec->id }})">
                                                     {{ __('global.delete') }} </a>
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
         {!! $data->links() !!}
     </div>
    <form wire:submit.prevent="submitEnum">
        <x-modal id="modalEnum" :title="__('enum_lookups.title')">
            <div class="form-group">
                <x-label for="name">{{ __('enum_lookups.fields.name') }}</x-label>
                <x-input id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                         wire:model.defer="name" />
                <x-error for="name" />
            </div>
            <div class="form-group">
                <x-label for="value">{{ __('enum_lookups.fields.value') }}</x-label>
                <x-input id="value" class="{{ $errors->has('value') ? 'is-invalid' : '' }}" type="text"
                         wire:model.defer="value" />
                <x-error for="value" />
            </div>
        </x-modal>
    </form>
</div>
