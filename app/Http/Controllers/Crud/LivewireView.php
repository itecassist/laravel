<?php

namespace App\Http\Controllers\Crud;

class LivewireView
{
    private array $fields;
    private array $nulls;
    private array $inputs;
    private string $table;
    private array|null $script;

    public function __construct($fields, $nulls, $inputs, $table)
    {
        $this->fields = $fields;
        $this->nulls = $nulls;
        $this->inputs = $inputs;
        $this->table = $table;
        $this->script = null;
        $this->createView();
    }

    public function createView() : void
    {
        $dir = base_path('resources/views/livewire');
        $name = str_replace("_", "-",$this->table);
        $wire = ucwords(str_replace("_", " ",$this->table));
        $wire = str_replace(" ", "", $wire);
        $file = $name.'.blade.php';
        $header='';
        $body = '';
        $handle = fopen($dir.'/'.$file, "w");
        $content = file_get_contents(resource_path('views/crud/view.php'));
        $txt = str_replace("[table]", $this->table, $content);
        $txt = str_replace("Table", $wire, $txt);
        $txt = str_replace("[route]", $name, $txt);
        for($i=0; $i<5; $i++)
        {
            if(isset($this->fields[$i]))
            {
                $header .="\n\t\t\t\t\t\t\t<th>{{ __('".$this->table.".fields.".$this->fields[$i]."') }}</th>";
            }

        }

        $txt = str_replace("[header]", $header, $txt);

        for($i=0; $i<5; $i++)
        {
            if(isset($this->fields[$i]))
            {
                $body .="\n\t\t\t\t\t\t\t<td>{{ \$rec->".$this->fields[$i]." }}</td>";
            }

        }

        $txt = str_replace("[body]", $body, $txt);
        $fields="\t\t\t";
        for($i=0; $i< count($this->inputs); $i++)
        {
            $fields .= $this->field($this->inputs[$i], $this->fields[$i])."\n\t\t\t";
        }
        $txt = str_replace("[form]", $fields, $txt);
        if(is_array($this->script) && count($this->script) > 0)
        {
            // ready
            $ready = "";
            // load
            $load = "";
            for($i=0; $i<count($this->script); $i++)
            {
                $ready .= $this->script['ready'][$i];
                $load .= $this->script['load'][$i];
            }
            $txt = str_replace("[livewireReady]", $ready, $txt);
            $txt = str_replace("[livewireLoad]", $load, $txt);
        }else{
            $txt = str_replace("[livewireReady]", "", $txt);
            $txt = str_replace("[livewireLoad]", "", $txt);
        }

        fwrite($handle, $txt);
        fclose($handle);
    }
    public function field($fld, $name) : string
    {
        $field="";
        switch ($fld)
        {
            case 'checkbox':
                $field = '<div class="form-group">
                <x-checkbox id="'.$name.'">{{ __(\''.$this->table.'.fields.'.$name.'\') }}</x-checkbox>
            </div>';
                break;
            case 'null':
                $field = '';
                break;
            case 'input':
                $field = '<div class="form-group">
                <x-label for="name">{{ __(\''.$this->table.'.fields.'.$name.'\') }}</x-label>
                <x-input id="name" class="{{ $errors->has(\''.$name.'\') ? \'is-invalid\' : \'\' }}" type="text"
                    wire:model.defer="'.$name.'" />
                <x-error for="'.$name.'" />
            </div>';
                break;
            case 'input-date':
                break;
            case 'input-num':
                $field = '<div class="form-group">
                <x-label for="name">{{ __(\''.$this->table.'.fields.'.$name.'\') }}</x-label>
                <x-input id="name" class="{{ $errors->has(\''.$name.'\') ? \'is-invalid\' : \'\' }}" type="number"
                    wire:model.defer="'.$name.'" />
                <x-error for="'.$name.'" />
            </div>';
                break;
            case 'input-time':
                break;
            case 'richText':
                break;
            case 'select':
                $field = '<div class="form-group">
                <x-label for="'.$name.'">{{ __(\''.$this->table.'.fields.'.$name.'\') }}</x-label>
                <select id="'.$name.'" class="select2 form-control {{ $errors->has(\''.$name.'\') ? \'is-invalid\' : \'\' }}"
                    wire:model.defer="'.$name.'">
                    <option value="">{{ __(\'global.pleaseSelect\') }}</option>
                    @foreach (__(\'global.yesno\') as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </select>
                <x-error for="'.$name.'" />
            </div>';
                $this->script['ready'][] = "\$('#".$name."').select2();
        $('#".$name."').on('change', function (e) {
            let data = $('#".$name."').select2(\"val\");
            @this.set('".$name."', data);
        });";
                $this->script['load'][]="\$('#".$name."').select2();";
                break;
            case 'text':
                $field = '<div class="form-group">
                <x-label for="'.$name.'">{{ __(\''.$this->table.'.fields.'.$name.'\') }}</x-label>
                <x-textarea id="'.$name.'" wire:model.defer="'.$name.'"></x-textarea>
                <x-error for="'.$name.'" />
            </div>';
                break;
            default:

        }
        return $field;
    }

}
