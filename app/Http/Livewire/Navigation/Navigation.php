<?php

namespace App\Http\Livewire\Navigation;

use App\Models\NavItem;
use Livewire\Component;

class Navigation extends Component
{
    public $items;
    public function mount(){
        $this->items=NavItem::all();
    }
    public function render()
    {
        return view('livewire.navigation.navigation');
    }

}
