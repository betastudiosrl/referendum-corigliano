<?php
    echo '<div class="row">
    <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Classifica Generale Referendum Costituzionale</h4>
                    <p class="text-muted m-b-30">Classifica in tempo reale sul numero dei voti di <strong>tutte le sezioni</strong> sul Referendum Costituzionale.</p>

                    <div class="table-rep-plugin">
                        <div class="table-responsive b-0" data-pattern="priority-columns">
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
                                        <td>'.$obj-> totSi().'</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td>'.$obj-> totNo().'</td>
                                    </tr>
                                    <tr>
                                        <td>Bianche</td>
                                        <td>'.$obj-> totBianche().'</td>
                                    </tr>
                                    <tr>
                                        <td>Nulle</td>
                                        <td>'.$obj-> totNulle().'</td>
                                    </tr>

                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
</div>';