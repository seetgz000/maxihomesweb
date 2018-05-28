
<br/>
<div id="user_add_content">
    <div class="mediumBox">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="box box-default">
                    <div class="box-header">
                        <h3 class="box-title">Commission</h3>
                    </div>
                    <div class="box-body">

                        <div class="alert alert-danger hidden user_form_alert" id="form_alert">

                        </div>

                        <form id="ren_form" method="POST" action="<?php echo site_url("Project/add"); ?>">
                            <div class="tab-content">
                                <div class="tab-pane active" id="details">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                                            <label>Selling Price</label>
                                            <input type="number" class="form-control" required name="selling_price" placeholder="Selling Price" >
                                            <label>SPA Price</label>
                                            <input type="number" class="form-control" required name="SPA_price" placeholder="SPA Price" >
                                            <label>NETT Price</label>
                                            <input type="number" onchange="calculateCom(this);" class="form-control" required name="net_price" id="net_price" placeholder="NETT Price" >
                                            <br />
                                            <label>Total Commission</label>
                                            <input type="number" class="pull-right" onchange="calculateCom(this);"  required id="total_commission_percent" value="5">%
                                            <input type="number" class="form-control" onchange="calculateCom(this);" placeholder="total commission" id="total_commission" name="total_commission">
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 well">
                                            <label>REN Commission</label>
                                            <input type="number" class=" pull-right" value="70" id="ren_commission_percent" onchange="calculateCom(this);">%
                                            <input type="number" class="form-control" name="ren_commission"  onchange="calculateCom(this);" placeholder="ren commission" id="ren_commission"> 
                                            <br />
                                            <label>PIC</label>
                                            <input type="number" class="pull-right" value="10" id="pic_commission_percent"  onchange="calculateCom(this);" >%
                                            <input type="number" class="form-control" name="pic" placeholder="pic" id="pic_commission"  onchange="calculateCom(this);"> 
                                            <br />
                                            <label>Company Commission</label>
                                            <input type="number" class="pull-right" value="20" id="company_commission_percent"  onchange="calculateCom(this);" >%
                                            <input type="number" class="form-control" name="company_commission" placeholder="company commission"  onchange="calculateCom(this);" id="company_commission"> 
                                            <br />
                                            <label>Balance</label>
                                             <input type="number" class="form-control" placeholder="balance commission"  onchange="calculateCom(this);" readonly id="balance_commission"> 
                                            
                                           
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
<div id="user_add_content">
    <div class="mediumBox">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="box box-default">
                    <div class="box-header">
                        <h3 class="box-title">REN
                            
                        </h3>
                        <button class="btn btn-info btn-flat pull-right" 
                                data-toggle="modal" data-target="#REN_modal" 
                                >Add</button>
                    </div>
                    <div class="box-body">

                        <div class="alert alert-danger hidden user_form_alert" id="form_alert">

                        </div>

                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Rate</th>
                                    <th>Com share</th>
                                </tr>
                            <thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="REN_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Select REN</h4>
      </div>
      <div class="modal-body">
          <table class="table table-bordered table-hover" >
              <tbody id="REN_select">
                  
              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    
    var added = [];
    function calculateCom(source){
        var net_price = document.getElementById("net_price");
        var total_commission_percent = document.getElementById("total_commission_percent");
        var total_commission = document.getElementById("total_commission");
        var ren_commission = document.getElementById("ren_commission");
        var ren_commission_percent = document.getElementById("ren_commission_percent");
        var pic_commission = document.getElementById("pic_commission");
        var pic_commission_percent = document.getElementById("pic_commission_percent");
        var company_commission = document.getElementById("company_commission");
        var company_commission_percent = document.getElementById("company_commission_percent");
        var balance_commission = document.getElementById("balance_commission");
        switch(source.id){
            case "net_price":
                total_commission.value = net_price.value * total_commission_percent.value / 100;
            break;
            case "total_commission_percent" : 
                total_commission.value = net_price.value * total_commission_percent.value / 100;
                break;
            case "total_commission" : 
                total_commission_percent.value = total_commission.value / net_price.value * 100;
            break;
        case "ren_commission" : 
            ren_commission_percent.value = ren_commission.value / total_commission.value * 100;
            break;
        case "ren_commission_percent" : 
            ren_commission.value = ren_commission_percent.value * total_commission.value / 100;
            break;
        case "pic_commission" :
            pic_commission_percent.value = pic_commission.value / total_commission.value * 100;
            break;
        case "company_commission" : 
            company_commission_percent.value = company_commission.value / total_commission.value * 100;
            break;
        case "company_commission_percent" : 
            company_commission.value = company_commission_percent.value * total_commission.value / 100;
            break;
        }
        
        ren_commission.value = total_commission.value * ren_commission_percent.value / 100;
        pic_commission.value = total_commission.value * pic_commission_percent.value / 100;
        company_commission.value = total_commission.value * company_commission_percent.value / 100;
        balance_commission.value = 100 - ren_commission_percent.value - pic_commission_percent.value - company_commission_percent.value;
        
        if(balance_commission.value < 0){
            $(balance_commission).css("background-color",'red');
        }else if(balance_commission.value > 0){
            $(balance_commission).css("background-color",'#ffc67e');
        }else{
            $(balance_commission).css("background-color",'transparent');
        }
    }
    
    
    $(document).ready(function(){
        $("#REN_modal").on("shown.bs.modal",function(){
            
            $.post("<?php echo site_url("Project/loadRENSelection"); ?>",
            {
                agents : added
            },
            function(response){
                $("#REN_select").html(response);
                
                 $("#REN_select").bootstrapTable();
            });
        });
    });
    
    function selectAgent(user_id){
        added.push(user_id);
        $("#REN_modal").modal("hide");
        $("#REN_select").html("");
    }
</script>