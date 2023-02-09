@props(['header', 'body', 'footer'=>'', 'title', 'href'=>''])
<div class="card mt-1 p-3">
    <div class="d-flex justify-content-between">
        <div>
            <div class="h5 text-indigo-400">{{ $title }}</div>
        </div>
        <div>
            <a
            @if($href != '')
                 href="{{ $href }}"
            @else
                 href="#" wire:click="showModal"
            @endif
            class="btn btn-primary btn-sm">
                <x-icons.plus class="w-4 h-4"/> {{ __('global.add_new_record') }}
            </a>
        </div>
        <div>
            <div class="d-flex">
                <x-page-size>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </x-page-size>&nbsp
                <x-input class="form-control-sm" type="search" placeholder="{{ __('global.search') }}" wire:model.debounce.300ms="searchTerm"/>
            </div>

        </div>
    </div>

    <table class="table table-hover">
        <thead>
            {{ $header }}
        </thead>
        <tbody>
            {{ $body }}
        </tbody>
        {{ $footer }}
    </table>
</div>
