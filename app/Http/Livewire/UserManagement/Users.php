<?php

namespace App\Http\Livewire\UserManagement;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
	public $sortBy = 'name';
	public $searchTerm='';
	public $sortAsc = true;
	public $pageSize = 15;
    public $recordId=null;
    
    public  $name,
			$email,
			$email_verified_at,
			$password,
			$is_admin,
			$remember_token;

	protected $rules = [
		'name'=>'required',
		'email'=>'required',
		'email_verified_at'=>'required',
		'password'=>'required',
		'is_admin'=>'required',
		'remember_token'=>'required',
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
		return User::query();
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

        return view('livewire.user-management.users', ['data'=>$data]);
    }

    public function createUsers()
    {
        //$this->reset();
        $this->recordId = null;
		$this->name= '';
		$this->email= '';
		$this->email_verified_at= '';
		$this->password= '';
		$this->is_admin= '';
		$this->remember_token= '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalUsers', 'action'=>'show']);
    }

    public function editUsers(User $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
		$this->name= $record->name;
		$this->email= $record->email;
		$this->email_verified_at= $record->email_verified_at;
		$this->password= $record->password;
		$this->is_admin= $record->is_admin;
		$this->remember_token= $record->remember_token;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalUsers', 'action'=>'show']);
    }

    public function submitUsers()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            User::find($this->recordId)->update($validated);  
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{
           User::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalUsers', 'action'=>'hide']);
    }

    public function deleteUsers($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteUsers', 'action'=>'show']);
    }

    public function destroy()
	{
		User::where('id', $this->recordId)->delete();
		$this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
		$this->dispatchBrowserEvent('modal', ['modal'=>'deletePermission', 'action'=>'hide']);
		$this->recordId=null;
	}
}