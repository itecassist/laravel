@props(['id', 'maxWidth', 'title'])
@php
    $maxWidth = [
        'sm' => ' modal-sm',
        'md' => '',
        'lg' => ' modal-lg',
        'xl' => ' modal-xl',
    ][$maxWidth ?? 'md'];
@endphp

<div class="modal fade" id="{{ $id }}" style="display: none;" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog{{ $maxWidth }}">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $title }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">{{ __('global.close') }}</button>
                <button type="button" class="btn btn-primary btn-sm">{{ __('global.save') }}</button>
            </div>
        </div>

    </div>

</div>
