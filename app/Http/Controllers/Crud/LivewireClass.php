<?php

namespace App\Http\Controllers\Crud;

class LivewireClass
{
    private array $fields;
    private array $nulls;
    private array $inputs;
    private string $table;
    public function __construct($fields, $nulls, $inputs, $table)
    {
        $this->fields = $fields;
        $this->nulls = $nulls;
        $this->inputs = $inputs;
        $this->table = $table;
        $this->createView();
    }

    public function createView() : void
    {
        $dir = base_path('resources/views/livewire');
        $name = str_replace("_", "-",$this->table);
        $file = $name.'.blade.php';
        $handle = fopen($dir.'/'.$file, "w");
        $txt = '<div class="mt-3 content">
    <div class="card">
        <div class="card-header">
            <div class="title">{{ __(\''.$this->table.'.title\') }}</div>
        </div>
        <div class="card-body">

        </div>
    </div>
</div>';
        fwrite($handle, $txt);
    }
    public function createController() : void
    {

    }

}
