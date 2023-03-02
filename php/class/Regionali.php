<?php 

interface Regionali {

    public function getTuttoPresidente();

    public function getTuttoLista();

    public function getAllList();

    public function getCandidati($id_lista_appartenenza);

    public function sommaVotiSezioni($voti_sez1, $voti_sez2, $voti_sez3, $voti_sez4, $voti_sez5);

}
?>