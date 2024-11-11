<?php
class AnimalView
{
    function ExibirTodosAnimais()
    {
        $animalController = new AnimalController();
        $listaTodosAnimais = $animalController->Listar();
        for ($i = 0; $i < count($listaTodosAnimais); $i++) {
            echo "<div class='caixaAnimal'>
                    <a href='atendimento.html'>
                    <img src='images/{$listaTodosAnimais[$i]->Nome}.png'>
                        <div>
                         <h1>{$listaTodosAnimais[$i]->Nome}</h1>
                        <p>{$listaTodosAnimais[$i]->Especie->Nome}</p>
                        </div>
                    </a>
                 </div>";
        }
    }

    function BuscarPeloNome($nome)
    {
        $animalController = new AnimalController();
        $ListaDeAnimaisComEsteNome = $animalController->BuscarPeloNome($nome);
        if (count($ListaDeAnimaisComEsteNome) == 0) {
            echo "<p>Não Existe animais com esse nome em nossos sistemas</p>";
        } else {
            for ($i = 0; $i < count($ListaDeAnimaisComEsteNome); $i++) {
                echo "<div class='caixaAnimal'>
                        <a href='atendimento.html'>
                        <img src='images/{$ListaDeAnimaisComEsteNome[$i]->Nome}.png'>
                            <div>
                             <h1>{$ListaDeAnimaisComEsteNome[$i]->Nome}</h1>
                            <p>{$ListaDeAnimaisComEsteNome[$i]->Especie->Nome}</p>
                            </div>
                        </a>
                     </div>";
            }
        }


    }
}
?>