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


<div class="container bootstrap snippets bootdey">
    <div class="btn-demo " id="btn-color-targets">
        <a href="#modalmedic_5" data-target-color="bluegray" data-toggle="modal" data-dismiss="modal" class="btn btn-primary btn-user btn-block"><i class="fas fa-file fa-1x text-gray-300"> แบบสอบถาม</i></a>
    </div>
    
</div>

<div class="modal fade" data-modal-color="" id="modalmedic_5" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">แบบประเมินความเครียด</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <?php echo $__env->make('medic.medic_questionnaire.quest5', ['formMode' => 'medic_quest1_5.blade'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>






</body>
</html> 

<script>
$(document).ready(function(){
    $('body').on('click', '#btn-color-targets > .btn', function(){
        var color = $(this).data('target-color');
        $('#modalmedic_5').attr('data-modal-color', color);
    });
});

$('#modalmedic_5').modal({
   backdrop: 'static',
   keyboard: false
});


     
</script>

<?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/quest1/medic_quest1_5.blade.php ENDPATH**/ ?>