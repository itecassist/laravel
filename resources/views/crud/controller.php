<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\[model];
use Livewire\WithPagination;

class [Table] extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public string $sortBy = 'name';
    public string $searchTerm='';
    public bool $sortAsc = true;
    public int $pageSize = 15;
    public int|null $recordId=null;

    public  [fields];

    protected $rules = [[fieldsRules]];

    public function mount()
    {
        $this->company_id = session()->get('company')['id'];
    }
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
        return [model]::query();
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

        return view('livewire.[page]', ['data'=>$data]);
    }

    public function create[Table]()
    {
        //$this->reset();
        [createFields]
        $this->dispatchBrowserEvent('modal', ['modal'=>'modal[Table]', 'action'=>'show']);
    }

    public function edit[Table]([model] $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
        [editFields]
        $this->dispatchBrowserEvent('modal', ['modal'=>'modal[Table]', 'action'=>'show']);
    }

    public function submit[Table]()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            [model]::find($this->recordId)->update($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{

            [model]::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modal[Table]', 'action'=>'hide']);
    }

    public function delete[Table]($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'delete[Table]', 'action'=>'show']);
    }

    public function destroy[Table]()
    {
        [model]::where('id', $this->recordId)->delete();
        $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
        $this->dispatchBrowserEvent('modal', ['modal'=>'delete[Table]', 'action'=>'hide']);
        $this->recordId=null;
    }
}
