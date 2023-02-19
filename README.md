@foreach ($permission_list as $pl)
                    @if ($pl->group_id == 0)
                        <div class="col-md-2">
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" wire:model="permission"
                                    value="{{ $pl->id }}"
                                    @isset($role) 
                                        @if (isset($role->permissions) && $role->permissions->contains($pl->id))
                                            checked="" 
                                        @endif
                                    @endisset>
                                <span class="form-check-label">
                                    {{ $pl->name }}</span>
                            </label>
                            <ul>
                            @foreach ($permission_list as $list)
                            @if ($list->group_id == $pl->id)
                            <li>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model="permission"
                                        value="{{ $list->id }}"
                                        @isset($role) 
                                                @if (isset($role->permissions) && $role->permissions->contains($list->id))
                                                    checked="" 
                                                @endif
                                        @endisset>
                                    <span class="form-check-label">{{ $list->name }}</span>
                                </label>
                            </li>
                            @endif
                        </ul>
                        @endforeach
                        </div>
                    @endif


                    
                @endforeach   