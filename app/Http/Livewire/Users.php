<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $sortBy = 'name';
    public $searchTerm = '';
    public $sortAsc = true;
    public $pageSize = 10;

    public $state = null;
    public $recordId = null;

    protected $rules= [
            'state.name' => 'required|max:255',
            'state.email' => 'required|email',
            'state.is_admin' => 'boolean',
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
            ->when($this->searchTerm, function ($q) {
                $q->where('name', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('email', 'like', '%' . $this->searchTerm . '%');
            })
            ->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->pageSize);
        return view('livewire.users', ['data' => $data]);
    }
    public function showModal(User $user = null)
    {
        $this->resetErrorBag();
        if ($user != null) {
            $this->state = $user;
            $this->recordId = $user->id;
        }else{
            $this->state['is_admin']=false;
        }
        $this->dispatchBrowserEvent('modal', ['modal' => 'formModal', 'action' => 'show']);
    }

    public function modalSubmit()
    {
        $validate = $this->validate();
        
        if ($this->recordId != null) {
           
            // if ($validate['state']['password']) {
            //     $validate['state']['password'] = bcrypt($validate['state']['password']);
            // } else {
            //     unset($validate['state']['password']);
            // }
            User::where('id', $this->recordId)->update($validate['state']);
            $this->state = null;
            $this->recordId = null;
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => __('global.record_updated')]);
        } else {
           $validate['state']['password'] = bcrypt('passwprd');
            User::create($validate['state']);
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal' => 'formModal', 'action' => 'hide']);
    }

    public function showDestroy($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal' => 'deleteModal', 'action' => 'show']);
    }

    public function destroy()
    {
        User::where('id', $this->recordId)->delete();
        $this->recordId = null;
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => __('global.record_deleted')]);
        $this->dispatchBrowserEvent('modal', ['modal' => 'deleteModal', 'action' => 'hide']);
        $this->searchTerm = '';
        $this->resetPage();
    }
}
