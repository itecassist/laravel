<div class="mt-3 content">
    
        <div class="card">
            <div class="card-header">
                <div class="title">{{ __('global.profile') }}</div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        {!! print_r(session()->get('user_settings')) !!}
                    </div>
                    <div class="col-md-6">
                        <form wire:submit.prevent="submitUserSettings">
                        <h5>
                            {{ __('user_settings.title') }}
                        </h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-info card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Mode / Footer</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <x-checkbox id="dark_mode">{{ __('/user_settings.fields.dark_mode') }}
                                            </x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="footer_fixed">{{ __('/user_settings.fields.footer_fixed') }}
                                            </x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="small_text_body">
                                                {{ __('/user_settings.fields.small_text_body') }}</x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="small_text_navbar">
                                                {{ __('/user_settings.fields.small_text_navbar') }}</x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-label for="navbar_variants">
                                                {{ __('/user_settings.fields.navbar_variants') }}</x-label>
                                            <x-input id="navbar_variants"
                                                class="{{ $errors->has('navbar_variants') ? 'is-invalid' : '' }}"
                                                type="text" wire:model.defer="navbar_variants" />
                                            <x-error for="navbar_variants" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-warning card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Header</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <x-checkbox id="header_fixed">{{ __('/user_settings.fields.header_fixed') }}
                                            </x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="header_no_border">
                                                {{ __('/user_settings.fields.header_no_border') }}</x-checkbox>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Sidebar</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_collapsed">
                                                {{ __('/user_settings.fields.sidebar_collapsed') }}</x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_fixed">
                                                {{ __('/user_settings.fields.sidebar_fixed') }}</x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_mini">
                                                {{ __('/user_settings.fields.sidebar_mini') }}</x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_mini_md">
                                                {{ __('/user_settings.fields.sidebar_mini_md') }}</x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_mini_xs">
                                                {{ __('/user_settings.fields.sidebar_mini_xs') }}</x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_nav_flat">
                                                {{ __('/user_settings.fields.sidebar_nav_flat') }}</x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_nav_legacy">
                                                {{ __('/user_settings.fields.sidebar_nav_legacy') }}
                                            </x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_nav_compact">
                                                {{ __('/user_settings.fields.sidebar_nav_compact') }}
                                            </x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_nav_child_indent">
                                                {{ __('/user_settings.fields.sidebar_nav_child_indent') }}
                                            </x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_nav_child_hide">
                                                {{ __('/user_settings.fields.sidebar_nav_child_hide') }}
                                            </x-checkbox>
                                        </div>
                                        <div class="form-group">
                                            <x-checkbox id="sidebar_disable_hover">
                                                {{ __('/user_settings.fields.sidebar_disable_hover') }}
                                            </x-checkbox>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary bt-sm">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
    </form>


</div>
@push('scripts')
    <script>
        $('#dark_mode').on('click', function() {
            if ($(this).is(':checked')) {
                $('body').addClass('dark-mode')
            } else {
                $('body').removeClass('dark-mode')
            }
        });
        $('#footer_fixed').on('click', function() {
            if ($(this).is(':checked')) {
                $('body').addClass('layout-footer-fixed')
            } else {
                $('body').removeClass('layout-footer-fixed')
            }
        });
    </script>
@endpush
