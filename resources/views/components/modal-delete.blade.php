@props(['id'])
<form wire:submit.prevent="destroy{{ $id }}">
    <div class="modal fade" id="delete{{ $id }}" wire:ignore.self>
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('global.delete') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ __('Are you sure you want to delet this record?') }}
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">{{ __('global.close') }}</button>
                    <button type="dubmit" class="btn btn-danger btn-sm">{{ __('global.delete') }}</button>
                </div>
            </div>

        </div>

    </div>
</form>
