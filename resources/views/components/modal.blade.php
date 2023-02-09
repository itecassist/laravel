@props(['id', 'maxWidth', 'title'])
@php
    $maxWidth = [
    'sm' => ' modal-sm',
    'md' => '',
    'lg' => ' modal-lg',
    'xl' => ' modal-xl',
][$maxWidth ?? 'md'];
@endphp

<div class="modal fade" tabindex="-1" id="formModal" wire:ignore.self aria-labelledby="modal-id-{{ $id }}" aria-hidden="true">
    <div class="modal-dialog{{ $maxWidth }}">
      <div class="modal-content" style="border-radius: 10px">
        <div class="modal-header">
          <h5 class="modal-title">{{ $title }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{ $slot }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">{{ __('global.close') }}</button>
          <button type="submit" class="btn btn-dark btn-sm">{{ __('global.save') }}</button>
        </div>
      </div>
    </div>
</div>

