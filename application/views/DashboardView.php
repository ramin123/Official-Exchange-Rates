<div class="page-container">
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
    <div class="page-content">
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
     
      
      <!-- END DASHBOARD STATS -->
      <div class="clearfix">
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <!-- BEGIN PORTLET-->
           <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i> Официальные курсы валют на заданную дату, устанавливаемые ежедневно

                            </div> 
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title="">
                                </a>
                                <a href="javascript:;" class="reload" data-original-title="" title="">
                                </a>
                                <a href="javascript:;" class="remove" data-original-title="" title="">
                                </a>
                            </div>
                        </div>

                        <div class="portlet-body">
                            

                            <table id="item-list" class="table table-striped table-hover " >
                            <thead>
                            <tr >
                                <th >
                                    Цифр. код
                                </th>
                                <th >
                                     Букв. код
                                </th>
                                
                                <th >
                                    Единиц
                                </th>
                                
                              <th >
                                      Валюта
                                    </th>

                                  <th >
                                    Курс
                                    </th>

                                    
                              </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
          <!-- END PORTLET-->
        </div>
          <a class="btn btn-xs btn-info " data-toggle="modal" href="<?=base_url()?>DashboardController/insert" style="font-size:18px;font-wieght:bolder;color:black;font-family:Calibri;"> Нажмите здесь, чтобы изменить официальный обменный курс на определенную дату</a>
          <br>
          <br>
        <div class="page-info_last-update">Последнее обновление страницы: <?=$dateUpdate;?></div>
        <br>
        <div > <span style="color: green;font-size: 44px">Курс обмена меняется автоматически каждый день</span> </div>
        <br>
      </div>
     
    </div>
  </div>
  <!-- END CONTENT -->
  <!-- BEGIN QUICK SIDEBAR -->
 
  <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<script type="text/javascript">
$(document).ready(function() {
    $('#item-list').DataTable({
        "ajax": {
            url : "<?=base_url()?>DashboardController/listItems"
        },
          processing: true,
                serverSide: true,
                paging: true,
                searching: true,
                ordering: true,
                order: [[0, "DESC"]],
                scrollX: true,
                scroller: true,
                "aLengthMenu": [
                    [5, 10, 25, 500],
                    [5, 10, 25, "All"]
                ],
                "iDisplayLength": 5,
                "language": {
                    "sProcessing": "в процессе...",
                    "sLengthMenu": "Число _MENU_ шоу",
                    "sZeroRecords": "Какой предмет не найден!!",
                    "sInfo": "Из _START_ К _END_ Из коллекции _TOTAL_ шоу",
                    "sInfoEmpty": "показывает 0 إЛи 0 снаружи 0 регистр",
                    "sInfoFiltered": "(Коллекция _MAX_ )",
                    "sInfoPostFix": "",
                    "sSearch": "Поиск:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "следующий",
                        "sPrevious": "До",
                        "sNext": "следующий",
                        "sLast": "До"
                    }
                }
               

    });
});
</script>
<script type="text/javascript">
    var now = new Date();
    var millisTill10 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 10, 0, 0, 0) - now;
    if (millisTill10 < 0) {
         millisTill10 += 86400000; // it's after 10am, try 10am tomorrow.
    }
    setTimeout(function(){
        "ajax": {
            url : "<?=base_url()?>DashboardController/insert"
        }
    }, millisTill10);
</script>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- The template to display files available for download -->
