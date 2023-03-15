<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Support\Str;

class LivewireController
{
    private array $fields;
    private string $table;
    public function __construct($table, $fields)
    {
        $this->fields = $fields;
        $this->table = $table;
        $this->createView();
    }

    public function createView() : void
    {
        $ignore = ['created_at', 'updated_at', 'deleted_at'];
        $dir = base_path('app/Http/Livewire');
        $name = str_replace("_", "-",$this->table);
        $Table = ucwords(str_replace("_", " ",$this->table));
        $Table = str_replace(" ", "", $Table);
        $model = Str::studly(Str::singular($this->table));
        $file = $Table.'.php';
        $field = "";
        $rules = "";
        $create = "";
        $edit ="";
        $handle = fopen($dir.'/'.$file, "w");
        $content = file_get_contents(resource_path('views/crud/controller.php'));
        $txt = str_replace("[model]", $model, $content);
        for($i=0; $i < count($this->fields); $i++)
        {
            if(!in_array($this->fields[$i], $ignore))
            {
                $field .="\$".$this->fields[$i].",";
                $rules .="\n\t\t'".$this->fields[$i]."' => 'required',";
            }
            if($this->fields[$i] != 'company_id')
            {
                $create .= "\n\t\t\$this->".$this->fields[$i]." = '';";
                $edit .= "\n\t\t\$this->".$this->fields[$i]." = \$record->".$this->fields[$i].";";
            }

        }
        $field = substr($field, 0, -1);
        $txt = str_replace("[fields]", $field, $txt);
        $txt = str_replace("[createFields]", $create, $txt);
        $txt = str_replace("[editFields]", $edit, $txt);
        $txt = str_replace("[fieldsRules]", $rules, $txt);
        $txt = str_replace("[page]", $name, $txt);
        $txt = str_replace("[Table]", $Table, $txt);

        fwrite($handle, $txt);
        fclose($handle);

    }

}
