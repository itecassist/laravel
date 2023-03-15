<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DocumentConfig;
use Livewire\WithPagination;

class DocumentConfigs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public string $sortBy = 'name';
    public string $searchTerm='';
    public bool $sortAsc = true;
    public int $pageSize = 15;
    public int|null $recordId=null;

    public  $company_id,$name,$required_immediate,$required_original,$required_document,$use_as_download;

    protected $rules = [
		'company_id' => 'required',
		'name' => 'required',
		'required_immediate' => 'required',
		'required_original' => 'required',
		'required_document' => 'required',
		'use_as_download' => 'required',];

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
        return DocumentConfig::query();
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

        return view('livewire.document-configs', ['data'=>$data]);
    }

    public function createDocumentConfigs()
    {
        //$this->reset();
        
		$this->name = '';
		$this->required_immediate = '';
		$this->required_original = '';
		$this->required_document = '';
		$this->use_as_download = '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalDocumentConfigs', 'action'=>'show']);
    }

    public function editDocumentConfigs(DocumentConfig $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
        
		$this->name = $record->name;
		$this->required_immediate = $record->required_immediate;
		$this->required_original = $record->required_original;
		$this->required_document = $record->required_document;
		$this->use_as_download = $record->use_as_download;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalDocumentConfigs', 'action'=>'show']);
    }

    public function submitDocumentConfigs()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            DocumentConfig::find($this->recordId)->update($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{

            DocumentConfig::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalDocumentConfigs', 'action'=>'hide']);
    }

    public function deleteDocumentConfigs($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteDocumentConfigs', 'action'=>'show']);
    }

    public function destroyDocumentConfigs()
    {
        DocumentConfig::where('id', $this->recordId)->delete();
        $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteDocumentConfigs', 'action'=>'hide']);
        $this->recordId=null;
    }
}
