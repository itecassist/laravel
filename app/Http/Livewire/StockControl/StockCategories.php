<?php

namespace App\Http\Livewire\StockControl;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Models\StockCategory;

class StockCategories extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
	public $sortBy = 'name';
	public $searchTerm='';
	public $sortAsc = true;
	public $pageSize = 13;
    public $recordId=null;
    public $categories=[];
    public $parents;
    public  $company_id,
			$name,
			$slug,
			$parent_id,
			$is_active;

	protected $rules = [
        'company_id' => 'required',
		'name'=>'required',
		'slug'=>'required',
		'parent_id'=>'required',
		'is_active'=>'required',
	];

    
    public function updatedSearchTerm()
	{
		$this->resetPage();
	}

	public function updatedPageSize()
	{
		$this->resetPage();
	}

    public function updatedName()
    {
        $category = StockCategory::find($this->parent_id);
        if($this->parent_id != 0)
        {
            $this->slug = Str::slug($category->name.'-'.$this->name);
        }else{
            $this->slug = Str::slug($this->name);
        }
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
		return StockCategory::query();
	}

	public function render()
	{
        $this->parents = StockCategory::where('parent_id', 0)->where('company_id', session()->get('company')['id'])->orderBy('name')->pluck('name','id')->toArray();
		$data = $this->query()
            ->where('company_id', session()->get('company')['id'])
			->when($this->searchTerm, function($q){
				$q->where('name', 'like', '%'.$this->searchTerm.'%');
			})
			->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
			->paginate($this->pageSize);

        return view('livewire.stock-control.stock_categories', ['data'=>$data]);
    }

    public function createStockCategories()
    {
        //$this->reset();
        $this->recordId = null;
		$this->company_id= session()->get('company')['id'];
		$this->name= '';
		$this->slug= '';
		$this->parent_id= '';
		$this->is_active= '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalStockCategories', 'action'=>'show']);
    }

    public function editStockCategories(StockCategory $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
		$this->company_id= $record->company_id;
		$this->name= $record->name;
		$this->slug= $record->slug;
		$this->parent_id= $record->parent_id;
		$this->is_active= $record->is_active;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalStockCategories', 'action'=>'show']);
    }

    public function submitStockCategories()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            StockCategory::find($this->recordId)->update($validated);  
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{
           StockCategory::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalStockCategories', 'action'=>'hide']);
    }

    public function deleteStockCategories($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteStockCategories', 'action'=>'show']);
    }

    public function destroyStockCategories()
	{
		StockCategory::where('id', $this->recordId)->delete();
		$this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
		$this->dispatchBrowserEvent('modal', ['modal'=>'deletePermission', 'action'=>'hide']);
		$this->recordId=null;
	}
}