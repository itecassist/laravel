<?php

namespace App\Http\Livewire\StockControl;

use Livewire\Component;
use App\Models\StockUnit;
use Livewire\WithPagination;

class StockUnits extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
	public $sortBy = 'name';
	public $searchTerm='';
	public $sortAsc = true;
	public $pageSize = 13;
    public $recordId=null;
    
    public  $company_id,
			$name;

	protected $rules = [
		'company_id'=>'required',
		'name'=>'required',
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
		return StockUnit::query();
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

        return view('livewire.stock-control.stock_units', ['data'=>$data]);
    }

    public function createStockUnits()
    {
        //$this->reset();
        $this->recordId = null;
		$this->company_id= '';
		$this->name= '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalStockUnits', 'action'=>'show']);
    }

    public function editStockUnits(StockUnit $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
		$this->company_id= $record->company_id;
		$this->name= $record->name;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalStockUnits', 'action'=>'show']);
    }

    public function submitStockUnits()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            StockUnit::find($this->recordId)->update($validated);  
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{
           StockUnit::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalStockUnits', 'action'=>'hide']);
    }

    public function deleteStockUnits($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteStockUnits', 'action'=>'show']);
    }

    public function destroyStockUnits()
	{
		StockUnit::where('id', $this->recordId)->delete();
		$this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
		$this->dispatchBrowserEvent('modal', ['modal'=>'deletePermission', 'action'=>'hide']);
		$this->recordId=null;
	}
}