<div class="row">
<div class="col-md-6">
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar entrada</h3>
  </div>
  <form class="form-horizontal" name="form_reloj" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="inputEmail3" style="font-size: 45px;" class="col-sm-3 control-label">Placa &nbsp;&nbsp;</label>
        <div class="col-sm-9">
          <input type="text" style="WIDTH: 50%; HEIGHT: 98px; font-size: 55px; text-transform: uppercase;" class="form-control" id="txtPlaca" name="txtPlaca" onkeyup="validarPalca(event);" onKeyPress="return soloNumeros(event)" placeholder="">
        </div>
      </div>
          <div class="col-md-5">
              <div class="form-group">
              <label for="">Fecha Ingreso</label>
              <br>
              <input type="datetime" name="txtFechaEntrada" class="form-control" value="<?php echo date("Y-m-d");?>"readonly/>
            </div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-5">
              <div class="form-group">
              <label for="">Hora de Ingreso</label>

              <input type="text" name="reloj" id="reloj" class="form-control" value=""readonly/>

            </div>
          </div>

        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Tipo vehiculo</label>
            <div class="col-sm-7">
              <select class="form-control" name="selTipoVehiculoE" required>
                <option selected="selected" value="">Seleccione</option>
                <?php foreach ($tiposVehiculos as $value): ?>
                    <option value="<?= $value['IdTipoVehiculo']; ?>"><?= $value['TipoVehiculo']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
        </div>
        <!-- $tiposVehiculos
        $tiposPagos
        $tiposCobros
        $loquers -->
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Tipo Cobro</label>
            <div class="col-sm-7">
              <select class="form-control" name="txtTipoCobroE" required>
                <option selected="selected" value="">Seleccione</option>
                <?php foreach ($tiposCobros as $value): ?>
                    <option value="<?= $value['IdTipoCobro']; ?>"><?= $value['TipoCobro']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Cantidad Cascos</label>
            <div class="col-sm-7">
                <input type="number" step="1" class="form-control" id="" name="" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Accesorios </label>
            <div class="col-sm-7">
                <input type="checkbox" name="cbxAccesorios" value="1"> SI
            </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Descripción </label>
          <div class="col-sm-7">
              <textarea type="text" name="txtDescripcion" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="" class="col-sm-4 control-label">Posición Locker</label>
                <div class="col-sm-7">
                  <select class="form-control" name="selLocker" required>
                    <option selected="Seleccione" value="">Seleccione</option>
                    <?php foreach ($loquers as $value): ?>
                        <option value="<?= $value['IdLoquer']; ?>"><?= $value['Loquer']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
            </div>
          </div>
          <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Pago</label><br>
                      <?php foreach ($tiposPagos as $value): ?>
                        <label>
                          <?php if ($value['IdTipoPago'] == 1): ?>
                            <input type="radio" name="txtPago" value="<?= $value['IdTipoPago']; ?>" class="flat-red" checked>
                              <?= $value['TipoPago']; ?>
                          <?php else: ?>
                            <input type="radio" name="txtPago" value="<?= $value['IdTipoPago']; ?>" class="flat-red">
                              <?= $value['TipoPago']; ?>
                          <?php endif; ?>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                      <?php endforeach; ?>
               </div>
          </div>
        </div>

        <div class="col-md-11">
          <div class="form-group">
              <button type="submit" class="btn btn-block btn-success" style="WIDTH: 100%; HEIGHT: 98px; font-size: 55px;" name="btnEntrada">INGRESAR</button>
          </div>
        </div>
    <!-- /.box-body -->
    <div class="box-footer">

    </div>
    <!-- /.box-footer -->
  </form>
</div>
</div>
    </div>
<div class="col-md-6">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar Salida</h3>
    </div>
    <form class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" style="font-size: 45px;" class="col-sm-3 control-label">Buscar &nbsp;&nbsp;</label>
          <div class="col-sm-5">
            <input type="text" style="WIDTH: 100%; HEIGHT: 98px; font-size: 55px; text-transform: uppercase;" name="txtPlacaSal" class="form-control" id="inputEmail3" placeholder="Placa">
          </div>
          <div class="col-sm-2">
                <button type="button" class="btn btn-block btn-info" style="WIDTH: 100%; HEIGHT: 98px; font-size: 55px;" name="button"> <i class="fa fa-search"></i> </button>
          </div>
          <div class="col-sm-2">

          </div>
        </div>
            <div class="col-md-5">
              <div class="col-md-6">
                <div class="form-group">
                <label for="">Fecha Entrada</label>
                <input type="text" name="" class="form-control" value="" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <label for="">Hora de Entrada</label>
                <input type="text" name="" class="form-control" value="" readonly>
              </div>
              </div>
            </div>
              <div class="col-md-1">

              </div>
              <div class="col-md-5">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="">Fecha Salida</label>
                  <input type="text" name="" class="form-control" value="" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="">Hora de Salida</label>
                  <input type="text" name="" class="form-control" value="" readonly>
                </div>
                </div>
              </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Tipo vehiculo</label>
                  <div class="col-sm-7">
                      <input type="text"class="form-control" name="" value="" readonly>
                  </div>
              </div>

              <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Cantidad Cascos</label>
                  <div class="col-sm-7">
                      <input type="number" step="1" class="form-control" id="" placeholder="">
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Accesorios </label>
                  <div class="col-sm-7">
                      <span>SI</span>
                  </div>
              </div>

              <div class="form-group">
                  <label for="" class="col-sm-4 control-label">Posición Locker</label>
                  <div class="col-sm-7">
                  <input type="text"class="form-control" name="" value="" readonly>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Cantida Horas</label>
                <div class="input-group">
                  <span class="input-group-addon"> <i class="fa fa-clock-o"></i> </span>
                  <input type="text" class="form-control">
                  <span class="input-group-addon"></span>
                </div>
              </div>
               <div class="form-group">
                 <label for="">Valor a Pagar</label>
                 <div class="input-group">
                   <span class="input-group-addon">$</span>
                   <input type="text" class="form-control">
                   <span class="input-group-addon">.00</span>
                 </div>
               </div>


                 <div class="form-group">
                   <label for="">Tipo de Pago</label><br>
                   <label>
                     <input type="radio" name="r3" class="flat-red" checked>
                     Efectivo
                  </label>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                   <label>
                     <input type="radio" name="r3" class="flat-red">
                     Tarjeta
                   </label>

                 </div>

            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Descripción </label>
                <div class="col-sm-7">
                    <textarea type="text"name="ass" rows="2" class="form-control"></textarea>
                </div>
              </div>
            </div>

          <div class="col-md-11">
            <div class="form-group">
                <button type="button" class="btn btn-block btn-success" style="WIDTH: 100%; HEIGHT: 98px; font-size: 55px;" name="button">SALIDA</button>
            </div>
          </div>
      <!-- /.box-body -->
      <div class="box-footer">

      </div>
      <!-- /.box-footer -->
    </form>
  </div>
  </div>
</div>
</div>

<script>
// var cont=0;
// function validarPalca(e) {
//   var placa = $('#txtPlaca').val();
//   if(soloLetras(e) == false){
//       placa ="";
//       $('#txtPlaca').val(placa);
//   }else{
//     if (placa.length <= 3) {
//         $('#txtPlaca').val(placa);
//     }
//   }
// }
//
// function soloNumeros(e){
// 	var key = window.Event ? e.which : e.keyCode
// 	return (key >= 48 && key <= 57)
// }
</script>

<script>
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){

        return false;
      }
}
</script>
