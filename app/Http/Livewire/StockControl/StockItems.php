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
    
    public  $company_id,
			$stock_category_id,
			$name,
			$slug,
			$item_code,
			$stock_unit_id,
			$expire_date,
			$on_hand,
			$min_order_quantity,
			$tags,
			$short_description,
			$description,
			$weight_gram,
			$length_cm,
			$height_cm,
			$width_cm,
			$unit_price,
			$unit_price_for,
			$markup_percentage,
			$main_image,
			$is_active,
			$is_feature;

	protected $rules = [
		'company_id'=>'required',
		'stock_category_id'=>'required',
		'name'=>'required',
		'slug'=>'required',
		'item_code'=>'required',
		'stock_unit_id'=>'required',
		'expire_date'=>'required',
		'on_hand'=>'required',
		'min_order_quantity'=>'required',
		'tags'=>'required',
		'short_description'=>'required',
		'description'=>'required',
		'weight_gram'=>'required',
		'length_cm'=>'required',
		'height_cm'=>'required',
		'width_cm'=>'required',
		'unit_price'=>'required',
		'unit_price_for'=>'required',
		'markup_percentage'=>'required',
		'main_image'=>'required',
		'is_active'=>'required',
		'is_feature'=>'required',
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

    public function createStockItems()
    {
        //$this->reset();
        $this->recordId = null;
		$this->company_id= '';
		$this->stock_category_id= '';
		$this->name= '';
		$this->slug= '';
		$this->item_code= '';
		$this->stock_unit_id= '';
		$this->expire_date= '';
		$this->on_hand= '';
		$this->min_order_quantity= '';
		$this->tags= '';
		$this->short_description= '';
		$this->description= '';
		$this->weight_gram= '';
		$this->length_cm= '';
		$this->height_cm= '';
		$this->width_cm= '';
		$this->unit_price= '';
		$this->unit_price_for= '';
		$this->markup_percentage= '';
		$this->main_image= '';
		$this->is_active= '';
		$this->is_feature= '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalStockItems', 'action'=>'show']);
    }

    public function editStockItems(StockItem $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
		$this->company_id= $record->company_id;
		$this->stock_category_id= $record->stock_category_id;
		$this->name= $record->name;
		$this->slug= $record->slug;
		$this->item_code= $record->item_code;
		$this->stock_unit_id= $record->stock_unit_id;
		$this->expire_date= $record->expire_date;
		$this->on_hand= $record->on_hand;
		$this->min_order_quantity= $record->min_order_quantity;
		$this->tags= $record->tags;
		$this->short_description= $record->short_description;
		$this->description= $record->description;
		$this->weight_gram= $record->weight_gram;
		$this->length_cm= $record->length_cm;
		$this->height_cm= $record->height_cm;
		$this->width_cm= $record->width_cm;
		$this->unit_price= $record->unit_price;
		$this->unit_price_for= $record->unit_price_for;
		$this->markup_percentage= $record->markup_percentage;
		$this->main_image= $record->main_image;
		$this->is_active= $record->is_active;
		$this->is_feature= $record->is_feature;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalStockItems', 'action'=>'show']);
    }

    public function submitStockItems()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            StockItem::find($this->recordId)->update($validated);  
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{
           StockItem::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalStockItems', 'action'=>'hide']);
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