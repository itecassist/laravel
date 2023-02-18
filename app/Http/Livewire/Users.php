<?php

namespace App\Http\Livewire;

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
			$contact_number,
			$email_verified_at,
			$password,
			$job_title,
			$theme,
			$is_admin,
			$avatar,
			$remember_token;

	protected $rules = [
		'name'=>'required',
		'email'=>'required',
		'contact_number'=>'required',
		'email_verified_at'=>'required',
		'password'=>'required',
		'job_title'=>'required',
		'theme'=>'required',
		'is_admin'=>'required',
		'avatar'=>'required',
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
			->when($this->searchTerm, function($q){
				$q->where('first_name', 'like', '%'.$this->searchTerm.'%');
			})
			->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
			->paginate($this->pageSize);

        return view('livewire.users', ['data'=>$data]);
    }

    public function createUsers()
    {
        //$this->reset();
        $this->recordId = null;
		$this->name= '';
		$this->email= '';
		$this->contact_number= '';
		$this->email_verified_at= '';
		$this->password= '';
		$this->job_title= '';
		$this->theme= '';
		$this->is_admin= '';
		$this->avatar= '';
		$this->remember_token= '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalUsers', 'action'=>'show']);
    }

    public function editUsers(User $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
		$this->name= $record->name;
		$this->email= $record->email;
		$this->contact_number= $record->contact_number;
		$this->email_verified_at= $record->email_verified_at;
		$this->password= $record->password;
		$this->job_title= $record->job_title;
		$this->theme= $record->theme;
		$this->is_admin= $record->is_admin;
		$this->avatar= $record->avatar;
		$this->remember_token= $record->remember_token;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalUsers', 'action'=>'show']);
    }

    public function submitUsers()
    {
        $validated = $this->validate();

        if(!is_null($this->recordID))
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