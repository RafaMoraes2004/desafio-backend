<?php

namespace App\Livewire\Web;

use App\Models\Film;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
  
    public function render()
    {

       $filme = Film::paginate(4);

       //dd($filme);

        return view('livewire.web.home', [
            'filmes' => $filme
        ]);
    }
}
