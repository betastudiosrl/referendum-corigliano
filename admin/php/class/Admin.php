<?php 

interface Admin {
    public function insertLista($nome_lista, $id_candidato_presidente, $ordinamento);

    public function getTuttoPresidente();
}