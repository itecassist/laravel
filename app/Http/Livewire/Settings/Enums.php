<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Models\EnumLookup;
use Livewire\WithPagination;
class Enums extends Component
{
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';
    public string $sortBy = 'name';
    public string $searchTerm='';
    public bool $sortAsc = true;
    public int $pageSize = 15;
    public int|null $recordId=null;

    public string $name;
    public string $value;

    protected array $rules = [
        'name'=>'required',
        'value'=>'required'
    ];
    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function updatedPageSize()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($field == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }
    public function query()
    {
        return EnumLookup::query();
    }
    public function render()
    {
        $data = $this->query()
            ->where('company_id', session()->get('company')['id'])
            ->when($this->searchTerm, function($q){
                $q->where('name', 'like', '%'.$this->searchTerm.'%');
            })
            ->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->pageSize);
        return view('livewire.settings.enums', compact('data'));
    }

    public function createEnum()
    {
        $this->recordId = null;
        $this->name = '';
        $this->value = '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalEnum', 'action'=>'show']);
    }
    public function editEnum(EnumLookup $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
        $this->name= $record->name;
        $this->value= $record->value;

        $this->dispatchBrowserEvent('modal', ['modal'=>'modalEnum', 'action'=>'show']);
    }
    public function submitEnum()
    {
        $validated = $this->validate();
        $validated['company_id'] = session()->get('company')['id'];
//        dd($validated);
        if(!is_null($this->recordId))
        {
            EnumLookup::find($this->recordId)->update($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{
            EnumLookup::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalEnum', 'action'=>'hide']);
    }
}
