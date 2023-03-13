<?php

namespace App\Http\Controllers\Crud;

use http\Encoding\Stream;

class LanguageClass
{
    private array $fields;
    private array $descriptions;
    private string $table;
    public function __construct(array $fields, array $descriptions, string $table)
    {
        $this->fields = $fields;
        $this->descriptions = $descriptions;
        $this->table = $table;
        $this->createFile();
    }

    private function createFile(): void
    {
        $dir = base_path('lang/en');
        $file = $this->table.'.php';
        $handle = fopen($dir.'/'.$file, "w");
        $txt = "<?php\n\treturn [\n\t\t'title' => '".ucfirst(str_replace("_", " ", $this->table))."',\n\t\t'fields' => [";
            for($i = 0; $i < count($this->fields); $i++){
                $txt .="\n\t\t\t'".$this->fields[$i]."'\t=>'".$this->descriptions[$i]."',";
            }
        $txt .="\n\t\t]\n\t];";
        fwrite($handle, $txt);
    }

}
