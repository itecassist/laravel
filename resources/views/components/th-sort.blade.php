<th class="col sortable-column" wire:click="sortBy('$name')">
    {{ __('permissions.fields.title') }}
    @if (\$sortBy == '$name')
        <x-icons.sort sortField='$name' :sort-by="\$sortBy" :sort-asc="\$sortAsc" />
    @endif

</th>
