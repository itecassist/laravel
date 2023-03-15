<div class="mt-3 content">
    @canany(['[table]_access', 'sa'])
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <a href="{{ route('[route]') }}">{{ __('[table].title') }}</a>
                    </div>
                </div>
                <div class="col-md-4">
                    @canany(['table_create', 'sa'])
                        <button class="btn btn-primary btn-sm" wire:click="createTable"><i class="fa fa-plus"></i>&nbsp;{{ __('global.create_new') }}</button>
                    @endcan
                </div>
                <div class="col-md-3">
                    <div class="card-tools">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-sm" value="8" size="3" wire:model="pageSize">
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-control-sm" wire:model.debounce.300ms="searchTerm" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table table-hover">
                    <thead>
                        <tr>[header]
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rec)
                        <tr>[body]
                            <td class="text-right">
                                @canany(['[table]_update', '[table]_delete', 'sa'])
                                <div class="dropleft">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        @canany(['users_update', 'sa'])
                                            <a class="dropdown-item" href="#" wire:click="editTable({{ $rec->id }})"> {{ __('global.edit') }}</a>
                                        @endcanany
                                        @canany(['users_delete', 'sa'])
                                            <a class="dropdown-item" href="#" wire:click="deleteTable({{ $rec->id }})"> {{ __('global.delete') }} </a>
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
    </div>
    <!-- /.card -->
    {!! $data->links() !!}
    <!-- /.content -->
    @else
    {{ __('global.access_denied') }}
    @endcanany
    <form wire:submit.prevent="submitTable">
        <x-modal id="modalTable" :title="__('[table].title')">
            [form]
        </x-modal>
    </form>
    <x-modal-delete id="deleteTable" />
</div>
@push('scripts')
<script>
    $(document).ready(function () {
        [livewireReady]
    });
    document.addEventListener("livewire:load", () => {
        Livewire.hook('message.processed', (message, component) => {
            [livewireLoad]
        });
    });
</script>
@endpush
