<?php

namespace App\Http\Livewire\StockControl;

use App\Models\StockItem;
use App\Models\StockCategory;
use Illuminate\View\View;
use Livewire\Component;

class StockItemForm extends Component
{
    public int $recordId;
    public string $action;
    public string $pageReferer = "";
    public array $state;
    public array $categories;

    public function mount($id = null) : void
    {
        $this->pageReferer = $_SERVER['HTTP_REFERER'];
        if($id != null)
        {
            $this->recordId = $id;
            $this->state = StockItem::find($this->recordId);
            $this->action = __('global.edit');
        }else{

            $this->action = __('global.add');
        }
    }
    public function render() : View
    {
        $this->categories = $this->getCategories();
        return view('livewire.stock-control.stock-item-form');
    }
    public function getCategories()
    {
        $categories = StockCategory::where('is_active', 1)->orderBy('parent_id')->orderBy('name')->get();
        $c=[];
        foreach($categories as $cat)
        {
            if($cat->parent_id == 0)
            {
                $c[$cat->id][]=['id'=>$cat->id, 'name'=>$cat->name, 'slug'=>$cat->slug];
                foreach($categories as $sub)
                {
                    if($sub->parent_id == $cat->id)
                    {
                        $c[$cat->id][$sub->id]=['id'=>$sub->id, 'name'=>$sub->name, 'slug'=>$sub->slug];
                    }
                }
            }
        }
        return $c;
    }
}
