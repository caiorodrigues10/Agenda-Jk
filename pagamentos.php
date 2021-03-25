<?php 
include_once 'include/conexao.php';

$s = mysqli_query($link, "SELECT * FROM tb_pagamento");

while($a = mysqli_fetch_array($s)){
  $id = $a["id_pagamento"];
  $nome = $a["nome"];
  $valor = $a["valor"];
  $parcelas = $a["parcelas"];
  $pago = $a["pago"];

  $valorparce = $valor / $parcelas;


echo '
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!--Cadastros-->
                <div class="container">
                <form name="frmCadastro" method="post" action="editarHorario.php">
                    <div class="row justify-content-center mr-auto mt-4 mb-5">
                        <div class="col-sm-12 col-md-10 col-lg-8">
                                <div class="form-row">
                                    <div class="form-group col-sm-10">
                                        <span for="inputdata" class="mb-5"><h4><b>Nome da Cliente: </b><b class="text-primary h4">'.$nome.'</b></h4></span>
                                        
                                        <span class="h5" for="inputhorario">Valor: </span><b>&nbsp;'.$valor.',00</b>
                                        <br/>
                                        
                                        <span class="h5" for="inputservico">Parcelas: </span><b>&nbsp;'.$parcelas.'</b>
                                        <br/>
                                        
                                        <span class="h5" for="inputvalor">Valor das parcelas: </span><b>&nbsp;'.$valorparce.',00</b>
                                        <br/>
                                        </div>
                                    ';
                                          if($pago == 0){
                                            echo"
                                            <div class='form-group col-sm-8'>
                                                <div class='toast btn bg-danger' role='alert' aria-live='assertive' aria-atomic='true'>
                                                  <div class='toast-header'>
                                                    <strong class='mr-auto'>Em aberto</strong>
                                                  </div>
                                                </div>
                                            </div>
                                          ";
                                          }
                                          else{
                                              echo"
                                              <div class='form-group col-sm-8'>
                                                <div class='toast btn bg-success' role='alert' aria-live='assertive' aria-atomic='true'>
                                                  <div class='toast-header'>
                                                    <strong class='mr-auto'>Pago</strong>
                                                  </div>
                                                </div>
                                              </div>
                                          ";
                                          }
                                          echo "
                                          <br /><br /><br/>
                                          <div class='form-group col-sm-8'>
                                          <a href='?action=editarPago&id=$id'><input type='button' class='btn btn-outline-primary' style='cursor:pointer' value='Editar Pagamento' /></a>
                                          </div>
                                          <br /><br />
                                          </div>
                                      </div>   
                                </div>                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
}

if(empty($id)){
  echo '<h1 class="display-4 mt-4 text-center">Nenhum Registro Encontrado!</h1>';
}
