<?php

namespace App\Livewire\Web;

use App\Models\Film;
use Livewire\Component;

class ViewFilm extends Component
{

    public $filme;

    public function mount($id)
    {
       $this->filme = Film::findOrFail($id);
    }

    public function render()
    {

        return view('livewire.web.view-film');
    }
}
