<?php
$array = json_decode($obj-> getAllListe(),true);
for($i=0;$i<count($array['all_liste'])-2;++$i) {
    $id_lista=$array['all_liste'][$i]['ID_lista'];
       
    echo '<div class="card m-b-20">
            <div class="card-body">

                <h4 class="mt-0 header-title">Risultati Totali Elezioni Comunali - LISTA N.'.$array['all_liste'][$i]['numero_lista'].' - '.$array['all_liste'][$i]['nome_lista'].'</h4>
                <p class="text-muted m-b-30">Risultati <strong>definitivi</strong> sul numero voti dei <strong>Candidati Consiglieri</strong> delle Elezioni Comunali </p>

                <div class="table-rep-plugin">
                    <div class="table-responsive b-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table  table-striped">
                            <thead>
                            <tr>
                                <th>Cand. Consigliere</th>
                                <th data-priority="1">Sez. 1</th>
                                <th data-priority="2">Sez. 2</th>
                                <th data-priority="3">Sez. 3</th>
                                <th data-priority="4">Sez. 4</th>
                                <th data-priority="5">Sez. 5</th>
                                <th data-priority="6">TOT</th>
                        
                            </tr>
                            </thead>
                            <tbody>';
                            $array_candidati = json_decode($obj-> getCandidati($id_lista),true);
                            for($j=0;$j<count($array_candidati['all_candidati']);++$j) 
                            {
                                    echo'<tr> 
                                            <td>'.$array_candidati['all_candidati'][$j]['cognome_candidato'].' '.$array_candidati['all_candidati'][$j]['nome_candidato'].'</td>
                                            <td> '.$array_candidati['all_candidati'][$j]['voti_sezione_1'].'</td>
                                            <td> '.$array_candidati['all_candidati'][$j]['voti_sezione_2'].'</td>
                                            <td> '.$array_candidati['all_candidati'][$j]['voti_sezione_3'].'</td>
                                            <td> '.$array_candidati['all_candidati'][$j]['voti_sezione_4'].'</td>
                                            <td> '.$array_candidati['all_candidati'][$j]['voti_sezione_5'].'</td>
                                            <td> '.$obj-> sommaVoti($array_candidati['all_candidati'][$j]['voti_sezione_1'],$array_candidati['all_candidati'][$j]['voti_sezione_2'],$array_candidati['all_candidati'][$j]['voti_sezione_3'],$array_candidati['all_candidati'][$j]['voti_sezione_4'],$array_candidati['all_candidati'][$j]['voti_sezione_5'],).'</td>
                                
                                        </tr>';
                            }
                            echo '</tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>';
}