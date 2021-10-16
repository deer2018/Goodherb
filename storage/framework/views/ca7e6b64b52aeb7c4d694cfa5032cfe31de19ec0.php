

<?php $__env->startSection('content'); ?>
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบสอบถาม</div>
                    <div class="card-body">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, '13')">แบบสอบถาม 13 ข้อ</button>
  <button class="tablinks" onclick="openCity(event, '5')">แบบสอบถาม 5 ข้อ</button>
  <button class="tablinks" onclick="openCity(event, '26')">แบบสอบถาม 26 ข้อ</button>
</div>

<div style="text-align: right" id="13" class="tabcontent">
    <?php echo $__env->make('questionnaire.quest13', ['formMode' => 'volunteer_questionnaire_sub'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button class="tablinks" onclick="openCity(event, '5')">ถัดไป</button>
</div>

<div style="text-align: right" id="5" class="tabcontent">
    <?php echo $__env->make('questionnaire.quest5', ['formMode' => 'volunteer_questionnaire_sub'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button class="tablinks" onclick="openCity(event, '26')">ถัดไป</button>
</div>

<div style="text-align: right" id="26" class="tabcontent">
    <?php echo $__env->make('questionnaire.quest26', ['formMode' => 'volunteer_questionnaire_sub'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <a href="<?php echo e(url('/volunteer_questionnaire_confirm')); ?>">ยืนยัน<br></a>
</div>

                    </div>
                    </div>
                </div>
            </div>
</div>
<?php $__env->stopSection(); ?>




<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/volunteer/volunteer_questionnaire/volunteer_questionnaire_sub.blade.php ENDPATH**/ ?>