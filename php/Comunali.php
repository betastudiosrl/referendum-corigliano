<?php
/* 
*   Copyright 2023 © BetaStudio Software
*   Contatto: info@betastudiosoftware.it
*/

interface Comunali
{
    public function getAllListe();

    public function getCandidati($id_lista_appartenenza);
}