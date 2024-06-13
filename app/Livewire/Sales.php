<?php

namespace App\Livewire;

use Livewire\Component;

class Sales extends Component
{
    public $selectYear = '2024';
    public $selectMonth = '6';
    public function render()
    {
        return view('livewire.sales');
    }
}
