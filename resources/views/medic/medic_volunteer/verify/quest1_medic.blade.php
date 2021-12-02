<!DOCTYPE html>
<html>
<head>
<style>       

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.modal[data-modal-color] {
  color: #000;
}

.modal .modal-header {
  padding: 23px 26px;
  border-bottom: 1px solid transparent;
}

.modal .modal-content {
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.31);
  border-radius: 3px;
  border: 0;
}

.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid transparent;
}

.modal[data-modal-color] .modal-footer {
  background: rgba(0, 0, 0, 0.1);
}

.modal[data-modal-color] .modal-footer .btn-link {
  font-weight: 400;
}

.modal[data-modal-color] .modal-title, .modal[data-modal-color] .modal-footer .btn-link {
  color: #000;
}

.modal .modal-footer .btn-link {
  font-size: 14px;
  color: #000;
  font-weight: 500;
}

.btn-link {
  color: #797979;
  text-decoration: none;
  border-radius: 2px;
}

.modal[data-modal-color] .modal-footer .btn-link:hover {
  background-color: rgba(0, 0, 0, 0.1);
  text-decoration:none;
}

.modal[data-modal-color] .modal-footer .btn-link {
  font-weight: 400;
}

/* ========== MODAL COLORS ===============================*/
.modal[data-modal-color="blue"] .modal-content {
  background: #2196f3;
}

.modal[data-modal-color="lightblue"] .modal-content {
  background: #03a9f4;
}

.modal[data-modal-color="cyan"] .modal-content {
  background: #00bcd4;
}

.modal[data-modal-color="green"] .modal-content {
  background: #4caf50;
}

.modal[data-modal-color="lightgreen"] .modal-content {
  background: #8bc34a;
}

.modal[data-modal-color="red"] .modal-content {
  background: #f44336;
}

.modal[data-modal-color="amber"] .modal-content {
  background: #ffc107;
}

.modal[data-modal-color="orange"] .modal-content {
  background: #ff9800;
}

.modal[data-modal-color="teal"] .modal-content {
  background: #009688;
}

.modal[data-modal-color="bluegray"] .modal-content {
  background: #607d8b;
}
    
</style>   
</head>
<body>

<form method="POST" action="{{ url('/quest1_medic/' . $users->id ) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
    <input class="form-control d-none" name="user_id" type="integer" id="user_id" value=" {{ $users->id }}">
    <div class="container bootstrap snippets bootdey">
        <div class="btn-demo " id="btn-color-targets">
            <a href="#modalmedic" data-target-color="bluegray" data-toggle="modal" data-dismiss="modal" class="btn btn-success  btn-block">เลือกภาวะอารมณ์</a>
        </div>
        
    </div>
 
    
     
    <div class="modal fade" data-modal-color="" id="modalmedic" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">เลือกภาวะทางอารมณ์</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    @include ('questionnaireone.quest_medic', ['formMode' => 'quest1_medic.blade'])
                </div>
                <div class="modal-footer">
                    <button type="submit" name="emotion_form" class="btn btn-link">บันทึก</button>
                    <button type="submit" class="btn btn-link" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>
   

</form> 




</body>
</html> 

<script>
$(document).ready(function(){
    $('body').on('click', '#btn-color-targets > .btn', function(){
        var color = $(this).data('target-color');
        $('#modalmedic').attr('data-modal-color', color);
    });
});

$('#modalmedic').modal({
   backdrop: 'static',
   keyboard: false
});


     
</script>

