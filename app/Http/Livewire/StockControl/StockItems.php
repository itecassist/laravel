<?php

namespace App\Http\Livewire\StockControl;

use Livewire\Component;
use App\Models\StockItem;
use Livewire\WithPagination;

class StockItems extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
	public $sortBy = 'name';
	public $searchTerm='';
	public $sortAsc = true;
	public $pageSize = 13;
    public $recordId=null;

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
		return StockItem::query();
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

        return view('livewire.stock-control.stock_items', ['data'=>$data]);
    }

    public function deleteStockItems($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteStockItems', 'action'=>'show']);
    }

    public function destroyStockItems()
	{
		StockItem::where('id', $this->recordId)->delete();
		$this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
		$this->dispatchBrowserEvent('modal', ['modal'=>'deletePermission', 'action'=>'hide']);
		$this->recordId=null;
	}
}
