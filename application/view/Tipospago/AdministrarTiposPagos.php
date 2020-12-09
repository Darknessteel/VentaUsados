<h1>Esta es la vista Administrar Tipos Pagos</h1>
<div class="row">
  <div class="col-md-4">

    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tipos Pagos</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Tipos Pagos</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="Guardar" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-info pull-right">Guardar</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  </div>
  <div class="col-md-8">


      <div class="box box-info">
        <div class="box-header with-border">
    <h3 class="box-title">Tipos Pagos</h3>
        </div>


      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Codigo</th>
            <th>Tipo de Pago</th>
            <th>Opciones</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>Efectivo</td>
            <td>
              <button type="button" class="btn btn-circle btn-xs btn-primary" name="button"> <i class="fa fa-edit"></i> </button>
               <button type="button" class="btn btn-circle btn-xs btn-danger" name="button"> <i class="fa fa-trash"></i> </button>
            </td>
          </tr>
        </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>
