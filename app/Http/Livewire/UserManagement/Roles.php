<?php

namespace App\Http\Livewire\UserManagement;

use Livewire\Component;
use App\Models\Role;
use Livewire\WithPagination;

class Roles extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
	public $sortBy = 'name';
	public $searchTerm='';
	public $sortAsc = true;
	public $pageSize = 15;
    public $recordId=null;
    
    public  $name;

	protected $rules = [
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
		return Role::query();
	}

	public function render()
	{
		$data = $this->query()
            // ->where('company_id', session()->get('company')['id'])
			->when($this->searchTerm, function($q){
				$q->where('first_name', 'like', '%'.$this->searchTerm.'%');
			})
			->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
			->paginate($this->pageSize);

        return view('livewire.user-management.roles', ['data'=>$data]);
    }

    public function createRoles()
    {
        //$this->reset();
        $this->recordId = null;
		$this->name= '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalRoles', 'action'=>'show']);
    }

    public function editRoles(Role $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
		$this->name= $record->name;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalRoles', 'action'=>'show']);
    }

    public function submitRoles()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            Role::find($this->recordId)->update($validated);  
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{
           Role::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalRoles', 'action'=>'hide']);
    }

    public function deleteRoles($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteRoles', 'action'=>'show']);
    }

    public function destroy()
	{
		Role::where('id', $this->recordId)->delete();
		$this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
		$this->dispatchBrowserEvent('modal', ['modal'=>'deletePermission', 'action'=>'hide']);
		$this->recordId=null;
	}
}