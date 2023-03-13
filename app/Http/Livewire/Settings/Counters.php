<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Models\Counter;
use Livewire\WithPagination;

class Counters extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public string $sortBy = 'name';
    public string $searchTerm='';
    public bool $sortAsc = true;
    public int $pageSize = 15;
    public int|null $recordId=null;
    public string $name;
    public string $prefix;
    public int|null $number;

    protected array $rules = [
        'name' => 'required',
        'prefix' => 'nullable',
        'number' => 'required|numeric'
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
        return Counter::query();
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
        return view('livewire.settings.counters', compact('data'));
    }

    public function createCounter()
    {
        $this->recordId=null;
        $this->name=null;
        $this->prefix=null;
        $this->number=null;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalCounter', 'action'=>'show']);
    }

    public function editCounter(Counter $record){
        $this->name = $record->name;
        $this->number = $record->number;
        $this->recordId = $record->id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalCounter', 'action'=>'show']);
    }

    public function submitCounter()
    {
        $this->validate();
        if(!is_null($this->recordId))
        {
            $this->record->save();
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{
            Counter::create($this->record);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalUsers', 'action'=>'hide']);
    }
}
