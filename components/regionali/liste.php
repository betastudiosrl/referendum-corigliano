<?php
    $n=json_decode($obj-> getAllList(),true);
    for ($i=0; $i<count($n['liste']); ++$i) {
        $id_lista=$n['liste'][$i]['ID_lista'];
        echo '<div class="card m-b-20">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Risultati Totali Elezioni Regionali della Lista <strong>'.$n['liste'][$i]['nome_partito_regione'].'</strong></h4>
                    <p class="text-muted m-b-30">Risultati <strong>definitivi </strong>sul numero dei voti per sezione dei <strong>Candidati Consiglieri</strong> alle Elezioni Regionali.</p>
                    <div class="table-rep-plugin">
                        <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                            <table id="tech-companies-1" class="table  table-striped">
                                <thead>
                                <tr>
                                    <th>Cand. Consigliere</th>

                                    <th data-priority="1">Sez. 1</th>
                                    <th data-priority="2">Sez. 2</th>
                                    <th data-priority="3">Sez. 3</th>
                                    <th data-priority="4">Sez. 4</th>
                                    <th data-priority="5">Sez. 5</th>
                                    <th data-priority="6">Tot Voti</th>
                                </tr>
                                </thead>
                                <tbody>';
                                $candidati=json_decode($obj-> getCandidati($id_lista),true);
                                for($j=0;$j<count($candidati['candidati_per_lista']);++$j) {
                                    echo'<tr> 
                                            <td>'.$candidati['candidati_per_lista'][$j]['cognome_candidato'].' '.$candidati['candidati_per_lista'][$j]['nome_candidato'].'</td>
                                            <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_1'].'</td>
                                            <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_2'].'</td>
                                            <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_3'].'</td>
                                            <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_4'].'</td>
                                            <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_5'].'</td>
                                            <td> '.$obj->sommaVotiSezioni($candidati['candidati_per_lista'][$j]['voti_sezione_1'],$candidati['candidati_per_lista'][$j]['voti_sezione_2'],$candidati['candidati_per_lista'][$j]['voti_sezione_3'],$candidati['candidati_per_lista'][$j]['voti_sezione_4'],$candidati['candidati_per_lista'][$j]['voti_sezione_5']).'</td>
                                        </tr>';
                                }
                                echo '</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>';     
    }
?>