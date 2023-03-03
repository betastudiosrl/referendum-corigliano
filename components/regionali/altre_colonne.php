<?php
    echo'<div class="row">
            <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Risultati Totali Elezioni Regionali</h4>
                            <p class="text-muted m-b-30">Risultati <strong>definitivi</strong> sul numero dei voti delle <strong>Liste Candidate </strong>alle Elezioni Regionali.</p>

                            <div class="table-rep-plugin">
                                <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                        <tr>
                                            <th>Cand. Lista</th>
                                            <th data-priority="1">Sez. 1</th>
                                            <th data-priority="2">Sez. 2</th>
                                            <th data-priority="3">Sez. 3</th>
                                            <th data-priority="4">Sez. 4</th>
                                            <th data-priority="5">Sez. 5</th>
                                            <th data-priority="6">Tot Voti</th>
                                        </tr>
                                        </thead>
                                        <tbody>';
                                            $n=json_decode($obj-> getTuttoLista(),true);
                                            for ($i=0; $i<count($n['regionali']); ++$i) {
                                                echo '<tr> 
                                                <td>'.$n['regionali'][$i]['nome_lista'].'</td>
                                                <td> '.$n['regionali'][$i]['voti_sezione_1'].'</td>
                                                <td> '.$n['regionali'][$i]['voti_sezione_2'].'</td>
                                                <td> '.$n['regionali'][$i]['voti_sezione_3'].'</td>
                                                <td> '.$n['regionali'][$i]['voti_sezione_4'].'</td>
                                                <td> '.$n['regionali'][$i]['voti_sezione_5'].'</td>
                                                <td> '.$obj->sommaVotiSezioni($n['regionali'][$i]['voti_sezione_1'],$n['regionali'][$i]['voti_sezione_2'],$n['regionali'][$i]['voti_sezione_3'],$n['regionali'][$i]['voti_sezione_4'],$n['regionali'][$i]['voti_sezione_5']).'</td>
                                            </tr>';
                                            }
                                        echo '</tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>';
                    include 'components/regionali/liste.php';
                    echo '<br></br>
                </div> <!-- end col -->
            </div>';