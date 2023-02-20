<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserSetting;
use Livewire\WithPagination;

class UserSettings extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
	public $sortBy = 'name';
	public $searchTerm='';
	public $sortAsc = true;
	public $pageSize = 13;
    public $recordId=null;
    
    public  $user_id,
			$dark_mode,
			$header_fixed,
			$header_no_border,
			$sidebar_collapsed,
			$sidebar_fixed,
			$sidebar_mini,
			$sidebar_mini_md,
			$sidebar_mini_xs,
			$sidebar_nav_flat,
			$sidebar_nav_legacy,
			$sidebar_nav_compact,
			$sidebar_nav_child_indent,
			$sidebar_nav_child_hide,
			$sidebar_disable_hover,
			$footer_fixed,
			$small_text_body,
			$small_text_navbar,
			$navbar_variants;
    
    public $sidebar_colors = [
        'bg-primary',
        'bg-warning',
        'bg-info',
        'bg-danger',
        'bg-success',
        'bg-indigo',
        'bg-lightblue',
        'bg-navy',
        'bg-purple',
        'bg-fuchsia',
        'bg-pink',
        'bg-maroon',
        'bg-orange',
        'bg-lime',
        'bg-teal',
        'bg-olive'
    ];

	protected $rules = [
		
		'dark_mode'=>'boolean',
		'header_fixed'=>'boolean',
		'header_no_border'=>'boolean',
		'sidebar_collapsed'=>'boolean',
		'sidebar_fixed'=>'boolean',
		'sidebar_mini'=>'boolean',
		'sidebar_mini_md'=>'boolean',
		'sidebar_mini_xs'=>'boolean',
		'sidebar_nav_flat'=>'boolean',
		'sidebar_nav_legacy'=>'boolean',
		'sidebar_nav_compact'=>'boolean',
		'sidebar_nav_child_indent'=>'boolean',
		'sidebar_nav_child_hide'=>'boolean',
		'sidebar_disable_hover'=>'boolean',
		'footer_fixed'=>'boolean',
		'small_text_body'=>'boolean',
		'small_text_navbar'=>'boolean',
		'navbar_variants'=>'nullable',
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
		return UserSetting::query();
	}

	public function render()
	{
        $record = UserSetting::where('user_id', auth()->id())->first();
		$this->recordId = $record->id;
		$this->user_id= $record->user_id;
		$this->dark_mode= $record->dark_mode;
		$this->header_fixed= $record->header_fixed;
		$this->header_no_border= $record->header_no_border;
		$this->sidebar_collapsed= $record->sidebar_collapsed;
		$this->sidebar_fixed= $record->sidebar_fixed;
		$this->sidebar_mini= $record->sidebar_mini;
		$this->sidebar_mini_md= $record->sidebar_mini_md;
		$this->sidebar_mini_xs= $record->sidebar_mini_xs;
		$this->sidebar_nav_flat= $record->sidebar_nav_flat;
		$this->sidebar_nav_legacy= $record->sidebar_nav_legacy;
		$this->sidebar_nav_compact= $record->sidebar_nav_compact;
		$this->sidebar_nav_child_indent= $record->sidebar_nav_child_indent;
		$this->sidebar_nav_child_hide= $record->sidebar_nav_child_hide;
		$this->sidebar_disable_hover= $record->sidebar_disable_hover;
		$this->footer_fixed= $record->footer_fixed;
		$this->small_text_body= $record->small_text_body;
		$this->small_text_navbar= $record->small_text_navbar;
		$this->navbar_variants= $record->navbar_variants;
        $data = $this->query()
            ->where('user_id', auth()->id())->first();

        return view('livewire..user_settings', ['data'=>$data]);
    }

    public function submitUserSettings()
    {
        $validated = $this->validate();

        if(!is_null($this->recordId))
        {
             UserSetting::find($this->recordId)->update($validated);  
            $this->dispatchBrowserEvent('alert', ['type'=>'success', 'message'=> __('global.record_updated')]);
        }
        $settings = UserSetting::where('user_id', auth()->id())->first();
        session()->forget('user_settings');
        session()->put('user_settings', $settings->toArray());
    }

}