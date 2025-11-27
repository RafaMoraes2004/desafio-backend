<?php

namespace App\Livewire\Web;

use App\Models\Film;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateFilm extends Component
{

use WithFileUploads;

    public $title;  //variaveis publicas para utilizarmos no view, os nomes iguais estao no model/banco, depois de sofrimento de nomes diferentes.
    public $summary;
    public $cover;
   public $filme;


    protected $rules = [
        'title' => 'required|min:3|max:255',
        'summary' => 'required|min:3|max:300',
        'cover' => 'required|image|max:2048'];

    public function render()
    {
        return view('livewire.web.create-film');
    }
    //aqui temos a função de cadastrar o filme, usamos create pois assim que o banco reconhece para executar o comando, depois de sofrer com nome também.
    public function create(){

        $this -> validate(); //aqui é a parte de validação que temos em $rules acima.

        $imagePath = $this->cover->store('movies', 'public'); //aqui temos o caminho onde ira salvar a imagem
        
       $filmeCriado = Film::create([

            'title' => $this->title,
            'summary' => $this->summary,
            'cover' => $imagePath, //aqui passamos o caminho para a variavle acima criada.
        ]);
        //após a criação, essa parte limpa as variaveis.
        $this->title = "";
        $this->summary = "";
        $this->cover = "";


        return redirect()->route('see', $filmeCriado->id); //aqui temos o redirecionamento para a o filme, a partir do momento que pedimos para 
                                                            //variavel filmeCriado armazenar o nosso metodo create, assim conseguimos pegar o ID.
    }
}
