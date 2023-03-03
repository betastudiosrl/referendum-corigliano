<?php
    echo '<div class="row">
            <div class="col-12">
                <!-- SEZIONE 1 -->
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Classifica Sezione 1 Referendum Costituzionale</h4>
                        <p class="text-muted m-b-30">Classifica in tempo reale sul numero dei voti della <strong>della sola sezione 1</strong> sul Referendum Costituzionale.</p>

                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                    <tr>
                                        <th>Scelta</th>
                                        <th data-priority="1">Voti totali</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Si</td>
                                        <td>';
                                            $array=$obj->getVoti(1);
                                            echo $array[0];
                                       echo '</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td>';
                                        $array=$obj->getVoti(1);
                                        echo $array[1];
                                    
                                    echo '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bianche</td>
                                        <td>';
                                        $array=$obj->getVoti(1);
                                        echo $array[2];
                                    
                                    echo '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nulle</td>
                                        <td>';
                                        $array=$obj->getVoti(1);
                                        echo $array[3];
                                    
                                    echo '
                                        </td>
                                    </tr>
                                    
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- SEZIONE 2 -->
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Classifica Sezione 2 Referendum Costituzionale</h4>
                        <p class="text-muted m-b-30">Classifica in tempo reale sul numero dei voti della <strong>della sola sezione 2</strong> sul Referendum Costituzionale.</p>

                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                            <table id="tech-companies-1" class="table  table-striped">
                                <thead>
                                <tr>
                                    <th>Scelta</th>
                                    <th data-priority="1">Voti totali</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Si</td>
                                    <td>';
                                        $array=$obj->getVoti(2);
                                        echo $array[0];
                                echo '</td>
                                </tr>
                                <tr>
                                    <td>No</td>
                                    <td>';
                                    $array=$obj->getVoti(2);
                                    echo $array[1];
                                
                                echo '
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bianche</td>
                                    <td>';
                                    $array=$obj->getVoti(2);
                                    echo $array[2];
                                
                                echo '
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nulle</td>
                                    <td>';
                                    $array=$obj->getVoti(2);
                                    echo $array[3];
                                
                                echo '
                                    </td>
                                </tr>
                                
                                </tr>
                                
                                </tbody>
                            </table>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- SEZIONE 3 -->
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Classifica Sezione 3 Referendum Costituzionale</h4>
                        <p class="text-muted m-b-30">Classifica in tempo reale sul numero dei voti della <strong>della sola sezione 3</strong> sul Referendum Costituzionale.</p>

                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                            <table id="tech-companies-1" class="table  table-striped">
                                <thead>
                                <tr>
                                    <th>Scelta</th>
                                    <th data-priority="1">Voti totali</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Si</td>
                                    <td>';
                                        $array=$obj->getVoti(3);
                                        echo $array[0];
                                echo '</td>
                                </tr>
                                <tr>
                                    <td>No</td>
                                    <td>';
                                    $array=$obj->getVoti(3);
                                    echo $array[1];
                                
                                echo '
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bianche</td>
                                    <td>';
                                    $array=$obj->getVoti(3);
                                    echo $array[2];
                                
                                echo '
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nulle</td>
                                    <td>';
                                    $array=$obj->getVoti(3);
                                    echo $array[3];
                                
                                echo '
                                    </td>
                                </tr>
                                
                                </tr>
                                
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SEZIONE 4 -->
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Classifica Sezione 4 Referendum Costituzionale</h4>
                        <p class="text-muted m-b-30">Classifica in tempo reale sul numero dei voti della <strong>della sola sezione 4</strong> sul Referendum Costituzionale.</p>

                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                            <table id="tech-companies-1" class="table  table-striped">
                                <thead>
                                <tr>
                                    <th>Scelta</th>
                                    <th data-priority="1">Voti totali</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Si</td>
                                    <td>';
                                        $array=$obj->getVoti(4);
                                        echo $array[0];
                                echo '</td>
                                </tr>
                                <tr>
                                    <td>No</td>
                                    <td>';
                                    $array=$obj->getVoti(4);
                                    echo $array[1];
                                
                                echo '
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bianche</td>
                                    <td>';
                                    $array=$obj->getVoti(4);
                                    echo $array[2];
                                
                                echo '
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nulle</td>
                                    <td>';
                                    $array=$obj->getVoti(4);
                                    echo $array[3];
                                
                                echo '
                                    </td>
                                </tr>
                                
                                </tr>
                                
                                </tbody>
                            </table>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- SEZIONE 5 -->
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Classifica Sezione 5 Referendum Costituzionale</h4>
                        <p class="text-muted m-b-30">Classifica in tempo reale sul numero dei voti della <strong>della sola sezione 5</strong> sul Referendum Costituzionale.</p>

                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                            <table id="tech-companies-1" class="table  table-striped">
                                <thead>
                                <tr>
                                    <th>Scelta</th>
                                    <th data-priority="1">Voti totali</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Si</td>
                                    <td>';
                                        $array=$obj->getVoti(5);
                                        echo $array[0];
                                echo '</td>
                                </tr>
                                <tr>
                                    <td>No</td>
                                    <td>';
                                    $array=$obj->getVoti(5);
                                    echo $array[1];
                                
                                echo '
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bianche</td>
                                    <td>';
                                    $array=$obj->getVoti(5);
                                    echo $array[2];
                                
                                echo '
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nulle</td>
                                    <td>';
                                    $array=$obj->getVoti(5);
                                    echo $array[3];
                                
                                echo '
                                    </td>
                                </tr>
                                
                                </tr>
                                
                                </tbody>
                            </table>
                            </div>
                        </div>

                    </div>
                </div>
                <br><br>
            </div> <!-- end col -->
        </div>';