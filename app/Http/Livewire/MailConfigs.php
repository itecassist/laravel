<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MailConfig;
use Livewire\WithPagination;

class MailConfigs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public string $sortBy = 'host';
    public string $searchTerm='';
    public bool $sortAsc = true;
    public int $pageSize = 15;
    public int|null $recordId=null;

    public string $company_id,$host,$port,$encryption,$validate_cert,$username,$password,$authentication;

    protected $rules = [
		'company_id' => 'required',
		'host' => 'required',
		'port' => 'required',
		'encryption' => 'required',
		'validate_cert' => 'required',
		'username' => 'required',
		'password' => 'required',
		'authentication' => 'required',];

    public function mount()
    {
        $this->company_id = session()->get('company')['id'];
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
        return MailConfig::query();
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

        return view('livewire.mail-configs', ['data'=>$data]);
    }

    public function createMailConfigs()
    {
        //$this->reset();

		$this->host = '';
		$this->port = '';
		$this->encryption = '';
		$this->validate_cert = '';
		$this->username = '';
		$this->password = '';
		$this->authentication = '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalMailConfigs', 'action'=>'show']);
    }

    public function editMailConfigs(MailConfig $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;

		$this->company_id = $record->company_id;
		$this->host = $record->host;
		$this->port = $record->port;
		$this->encryption = $record->encryption;
		$this->validate_cert = $record->validate_cert;
		$this->username = $record->username;
		$this->password = $record->password;
		$this->authentication = $record->authentication;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalMailConfigs', 'action'=>'show']);
    }

    public function submitMailConfigs()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            MailConfig::find($this->recordId)->update($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{

            MailConfig::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalMailConfigs', 'action'=>'hide']);
    }

    public function deleteMailConfigs($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteMailConfigs', 'action'=>'show']);
    }

    public function destroyMailConfigs()
    {
        MailConfig::where('id', $this->recordId)->delete();
        $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteMailConfigs', 'action'=>'hide']);
        $this->recordId=null;
    }
}
