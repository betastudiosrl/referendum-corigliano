<?php
/* 
*   Copyright 2023 © BetaStudio Software
*   Contatto: info@betastudiosoftware.it
*/

interface Referendum {
    public function totSi();

    public function totNo();

    public function totBianche();

    public function totNulle();

    public function dataVotiSi();

    public function dataVotiNo();

    public function dataVotiBianche();

    public function dataVotiNulle();

    public function getVoti($num_sezione);
}