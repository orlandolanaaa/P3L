        <div class="right_col" role="main">  
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Input Data Supplier </h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="<?php echo site_url('Supplier/insert');?>" method="post">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Supplier</label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="id_supplier">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Supplier</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="nama_supplier">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Supplier</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <textarea id="last-name" class="form-control" name="alamat_supplier"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan Supplier</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="keterangan_supplier">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Sales</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="nama_sales">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telp Sales</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="telp_sales">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="right_col" role="main">          
        