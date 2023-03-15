<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;

class Documents extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public string $sortBy = 'name';
    public string $searchTerm='';
    public bool $sortAsc = true;
    public int $pageSize = 15;
    public int|null $recordId=null;

    public  $company_id,$user_id,$for_user_id,$document_config_id,$extension,$file_name,$file_size,$notes;

    protected $rules = [
		'company_id' => 'required',
		'user_id' => 'required',
		'for_user_id' => 'required',
		'document_config_id' => 'required',
		'extension' => 'required',
		'file_name' => 'required',
		'file_size' => 'required',
		'notes' => 'required',];

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
        return Document::query();
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

        return view('livewire.documents', ['data'=>$data]);
    }

    public function createDocuments()
    {
        //$this->reset();
        
		$this->user_id = '';
		$this->for_user_id = '';
		$this->document_config_id = '';
		$this->extension = '';
		$this->file_name = '';
		$this->file_size = '';
		$this->notes = '';
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalDocuments', 'action'=>'show']);
    }

    public function editDocuments(Document $record)
    {
        $this->resetErrorBag();
        $this->recordId = $record->id;
        
		$this->user_id = $record->user_id;
		$this->for_user_id = $record->for_user_id;
		$this->document_config_id = $record->document_config_id;
		$this->extension = $record->extension;
		$this->file_name = $record->file_name;
		$this->file_size = $record->file_size;
		$this->notes = $record->notes;
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalDocuments', 'action'=>'show']);
    }

    public function submitDocuments()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
            Document::find($this->recordId)->update($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }else{

            Document::create($validated);
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_created')]);
        }
        $this->dispatchBrowserEvent('modal', ['modal'=>'modalDocuments', 'action'=>'hide']);
    }

    public function deleteDocuments($id)
    {
        $this->recordId = $id;
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteDocuments', 'action'=>'show']);
    }

    public function destroyDocuments()
    {
        Document::where('id', $this->recordId)->delete();
        $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_deleted')]);
        $this->dispatchBrowserEvent('modal', ['modal'=>'deleteDocuments', 'action'=>'hide']);
        $this->recordId=null;
    }
}
