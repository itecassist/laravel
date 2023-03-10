<?php

namespace App\Http\Livewire\UserManagement;

use App\Models\Role;
use Livewire\Component;
use App\Models\Permission;
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
    
    public $permission_list;
    public $name, $permissions =[];

	protected $rules = [
		'name'=>'required',
        'permissions' => 'array',
        'permissions.*' => 'required|integer',
	];

    public function mount()
    {
        $this->permission_list = Permission::orderBy('group_id')->orderBy('name')->get();
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
		return Role::query();
	}

	public function render()
	{
		$data = $this->query()
            // ->where('company_id', session()->get('company')['id'])
			->when($this->searchTerm, function($q){
				$q->where('name', 'like', '%'.$this->searchTerm.'%');
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
        $this->permissions = [];
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalRoles', 'action'=>'show']);
    }

    public function editRoles(Role $record)
    {
        $this->resetErrorBag();
        $this->permissions = [];
        $this->recordId = $record->id;
		$this->name= $record->name;
        
        foreach($record->permissions as $perm)
        {
            $this->permissions[]= $perm->id;
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalRoles', 'action'=>'show']);
    }

    public function submitRoles()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            Role::find($this->recordId)->update($validated); 
            Role::find($this->recordId)->permissions()->sync($this->permissions); 
            $this->recordId = null;
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{
            $role = Role::create($validated);
            $role->permissions()->sync($this->permissions);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->permissions=[];
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalRoles', 'action'=>'hide']);
    }

    public function deleteRoles($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteRoles', 'action'=>'show']);
    }

    public function destroyRoles()
	{
		Role::where('id', $this->recordId)->delete();
		$this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
		$this->dispatchBrowserEvent('modal', ['modal'=>'deletePermission', 'action'=>'hide']);
		$this->recordId=null;
	}
}