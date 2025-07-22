<?php

namespace App\Livewire; // Correct namespace

use Livewire\Component; // Correct use statement

class Features extends Component // Class name matches the component call
{
    public function render()
    {
        // This should point to the correct Blade view file for this component
        return view('livewire.features');
    }
}
