@props(['id', 'maxWidth', 'title'])
@php
    $maxWidth = [
    'sm' => ' modal-sm',
    'md' => '',
    'lg' => ' modal-lg',
    'xl' => ' modal-xl',
    'fw' => ' modal-full-width'
][$maxWidth ?? 'md'];
@endphp

<div class="modal modal-blur fade" id="{{ $id }}" wire:ignore.self aria-labelledby="modal-id-{{ $id }}" role="dialog" aria-hidden="true">
    <div class="modal-dialog {{ $maxWidth }} modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ $title }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{ $slot }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">{{ __('global.cancel') }}</button>
            <button type="submit" class="btn btn-primary">{{ __('global.save') }}</button>
        </div>
      </div>
    </div>
</div>

