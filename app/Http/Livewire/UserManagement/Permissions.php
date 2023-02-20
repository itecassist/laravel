<?php

namespace App\Http\Livewire\UserManagement;

use Livewire\Component;
use App\Models\Permission;
use Livewire\WithPagination;

class Permissions extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
	public $sortBy = 'name';
	public $searchTerm='';
	public $sortAsc = true;
	public $pageSize = 15;
    public $recordId=null;
    
    public  $access,
			$name,
			$group_id, $crud;

	protected $rules = [
		'access'=>'required',
		'name'=>'required',
		'group_id'=>'required',
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
		return Permission::query();
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

        return view('livewire.user-management.permissions', ['data'=>$data]);
    }

    public function createPermissions()
    {
        //$this->reset();
        $this->recordId = null;
		$this->access= '';
		$this->name= '';
		$this->group_id= '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalPermissions', 'action'=>'show']);
    }

    public function editPermissions(Permission $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
		$this->access= $record->access;
		$this->name= $record->name;
		$this->group_id= $record->group_id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalPermissions', 'action'=>'show']);
    }

    public function submitPermissions()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            Permission::find($this->recordId)->update($validated);  
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{
            if($this->crud)
            {
                $access = ['access', 'create', 'delete', 'update'];
                $name = ['Access', 'Create', 'Delete', 'Update'];
                for($i=0; $i<count($access); $i++)
                {
                    $data = [
                        'access' => $validated['access'].'_'.$access[$i],
                        'name'  => $validated['name'].' '.$name[$i],
                        'group_id'  => $validated['group_id']
                    ];
                    Permission::create($data);
                }
            }else{
                Permission::create($validated);
            }
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalPermissions', 'action'=>'hide']);
    }

    public function deletePermissions($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deletePermissions', 'action'=>'show']);
    }

    public function destroyPermissions()
	{
		Permission::where('id', $this->recordId)->delete();
		$this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
		$this->dispatchBrowserEvent('modal', ['modal'=>'deletePermission', 'action'=>'hide']);
		$this->recordId=null;
	}
}