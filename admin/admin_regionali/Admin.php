<?php 

interface Admin {
    public function insertLista($nome_lista, $id_candidato_presidente, $ordinamento);

    public function getTuttoPresidente();

    public function getTuttoCandidati();

    public function getAllList();

    public function insertCandidatoRegionale($nome, $cognome, $voti_sez1, $voti_sez2, $voti_sez3, $voti_sez4, $voti_sez5, $lista_appartenenza);
}