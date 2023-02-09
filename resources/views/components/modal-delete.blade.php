<form wire:submit.prevent="destroy">
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius: 10px">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">{{ __('global.delete') }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{ __('Are you sure you want to delet this record?') }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">{{ __('global.close') }}</button>
          <button type="submit" class="btn btn-danger btn-sm">{{ __('global.delete') }}</button>
        </div>
      </div>
    </div>
  </div>
</form>
