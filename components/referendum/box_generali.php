<?php
    echo '<div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat position-relative">
                    <div class="card-body">
                        <div class="mini-stat-desc">
                            <h6 class="text-uppercase verti-label text-white-50">Voti Si</h6>
                            <div class="text-white">
                                <h6 class="text-uppercase mt-0 text-white-50">Voti Si</h6>
                                <h3 class="mb-3 mt-0">
                                    '.$obj-> totSi().' 
                                </h3>
                                <div class="">
                                    <span class="ml-2">aggiornato il';
                                        $array_liste = json_decode($obj-> dataVotiSi(),true);
                                        echo $array_liste['referendum'][0]['data_format'];
                            echo '</span>
                        </div>
                    </div>
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-account-multiple-outline display-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary mini-stat position-relative">
            <div class="card-body">
                <div class="mini-stat-desc">
                    <h6 class="text-uppercase verti-label text-white-50">Voti No </h6>
                    <div class="text-white">
                        <h6 class="text-uppercase mt-0 text-white-50">Voti No </h6>
                        <h3 class="mb-3 mt-0">
                            '.$obj-> totNo().'
                        </h3>
                        <div class="">
                            <span class="ml-2">aggiornato il';
                                    $array_liste = json_decode($obj-> dataVotiNo(),true);
                                    echo $array_liste['referendum'][0]['data_format'];
                                
                            echo '</span>
                        </div>
                    </div>
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-package display-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary mini-stat position-relative">
            <div class="card-body">
                <div class="mini-stat-desc">
                    <h6 class="text-uppercase verti-label text-white-50">Bianche </h6>
                    <div class="text-white">
                        <h6 class="text-uppercase mt-0 text-white-50">Schede bianche</h6>
                        <h3 class="mb-3 mt-0">
                            '.$obj-> totBianche().'
                        </h3>
                        <div class="">
                            <span class="ml-2">aggiornato il';
                                    $array_liste = json_decode($obj-> dataVotiBianche(),true);
                                    echo $array_liste['referendum'][0]['data_format'];
                            echo '</span>
                        </div>
                    </div>
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-tag-text-outline display-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary mini-stat position-relative">
            <div class="card-body">
                <div class="mini-stat-desc">
                    <h6 class="text-uppercase verti-label text-white-50">Nulle</h6>
                    <div class="text-white">
                        <h6 class="text-uppercase mt-0 text-white-50">Schede nulle</h6>
                        <h3 class="mb-3 mt-0">
                            '.$obj-> totNulle().'
                        </h3>
                        <div class="">
                            <span class="ml-2">aggiornato il';
                                    $array_liste = json_decode($obj-> dataVotiNulle(),true);
                                    echo $array_liste['referendum'][0]['data_format'];
                            echo '</span>
                        </div>
                    </div>
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-briefcase-check display-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';