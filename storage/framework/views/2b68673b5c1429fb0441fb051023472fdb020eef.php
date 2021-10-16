


<?php $__env->startSection('content'); ?>
<div class="card">
<div class="card-header">ประวัติส่วนตัว</div>
<br>
<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    
    <div class="row">
        <div class="col-md-3">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
            <ul title="Ratings" class="list-inline ratings text-center">
                <!-- <li><a href="#"><span class="fab fa-google fa-fw"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li> -->
            </ul>
            <div style="text-align: center" > 
            <a href="#" title="Back"><button class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>แก้ไขรูป</button></a>
            </div>
        </div>
        <div class="col-md-7">
            
            <div class="table-responsive">
            <form method="POST" action="<?php echo e(url('/volunteer_per/' . $User->id)); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        <?php echo e(method_field('PATCH')); ?>

                        <?php echo e(csrf_field()); ?>



                        <div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">

                            <label for="username" class="control-label"><?php echo e('ชื่อ'); ?></label>
                            <input class="form-control" name="username" type="text" id="username" value="<?php echo e(isset($User->username) ? $User->username : ''); ?>">
                            <?php echo $errors->first('username', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('surname') ? 'has-error' : ''); ?>">
                            <label for="surname" class="control-label"><?php echo e('นามสกุล'); ?></label>
                            <input class="form-control" rows="5" name="surname" type="text" id="surname" value="<?php echo e(isset($User->surname) ? $User->surname : ''); ?>">
                            <?php echo $errors->first('surname', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('sex') ? 'has-error' : ''); ?>">
                            <label for="sex" class="control-label"><?php echo e('เพศ'); ?></label>
                            <select name="sex" class="form-control" id="sex">
                                <?php $__currentLoopData = json_decode('{"ชาย":"ชาย","หญิง":"หญิง"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($User->sex) && $User->sex == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('sex', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('age') ? 'has-error' : ''); ?>">
                            <label for="age" class="control-label"><?php echo e('อายุ'); ?></label>
                            <input class="form-control" name="age" type="number" id="age" value="<?php echo e(isset($User->age) ? $User->age : ''); ?>">
                            <?php echo $errors->first('age', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                            <label for="phone" class="control-label"><?php echo e('เบอร์โทรศัพท์'); ?></label>
                            <input class="form-control" name="phone" type="text" id="phone" value="<?php echo e(isset($User->phone) ? $User->phone : ''); ?>">
                            <?php echo $errors->first('phone', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">

                            <label for="address" class="control-label"><?php echo e('ที่อยู่'); ?></label>
                            <input class="form-control" name="address" type="text" id="address" value="<?php echo e(isset($User->address) ? $User->address : ''); ?>">
                            <?php echo $errors->first('address', '<p class="help-block">:message</p>'); ?>

                        </div>
                        <div>
                        <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">จังหวัด</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="input_province" onchange="showAmphoes()">

                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">อำเภอ</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="input_amphoe" onchange="showDistricts()">

                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">ตำบล</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="input_district" onchange="showZipcode()">

                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">รหัสไปรษณีย์</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="input_zipcode" placeholder="รหัสไปรษณีย์" />
                        </div>
                      </div>

                        <div class="form-group <?php echo e($errors->has('race') ? 'has-error' : ''); ?>">
                            <label for="race" class="control-label"><?php echo e('เชื้อชาติ'); ?></label>
                            <input class="form-control" name="race" type="text" id="race" value="<?php echo e(isset($User->race) ? $User->race : ''); ?>">
                            <?php echo $errors->first('race', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('religion') ? 'has-error' : ''); ?>">
                            <label for="religion" class="control-label"><?php echo e('ศาสนา'); ?></label>
                            <select name="religion" class="form-control" id="religion">
                                <?php $__currentLoopData = json_decode('{"พุทธ":"พุทธ","คริสต์":"คริสต์","อิสลาม":"อิสลาม","ฮินดู":"ฮินดู"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($User->religion) && $User->religion == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('religion', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('relationship') ? 'has-error' : ''); ?>">
                            <label for="relationship" class="control-label"><?php echo e('สถานภาพสมรส'); ?></label>
                            <select name="relationship" class="form-control" id="relationship">
                                <?php $__currentLoopData = json_decode('{"โสด":"โสด","สมรส":"สมรส","หม้าย":"หม้าย","หย่า":"หย่า","แยกกันอยู่":"แยกกันอยู่"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($User->relationship) && $User->relationship == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('relationship', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('occupation') ? 'has-error' : ''); ?>">
                            <label for="occupation" class="control-label"><?php echo e('อาชีพ'); ?></label>
                            <select name="occupation" class="form-control" id="occupation">
                                <?php $__currentLoopData = json_decode('{"ข้าราชการ/รัฐวิสาหกิจ":"ข้าราชการ/รัฐวิสาหกิจ","ค้าขาย/ธุรกิจส่วนตัว/เจ้าของกิจการ":"ค้าขาย/ธุรกิจส่วนตัว/เจ้าของกิจการ","เกษตรกรรม/ประมง":"เกษตรกรรม/ประมง","พนักงานบริษัท":"พนักงานบริษัท","นักเรียน/นักศึกษา":"นักเรียน/นักศึกษา"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($User->occupation) && $User->occupation == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group <?php echo e($errors->has('income') ? 'has-error' : ''); ?>">
                            <label for="income" class="control-label"><?php echo e('รายได้ต่อเดือน'); ?></label>
                            <select name="income" class="form-control" id="income">
                                <?php $__currentLoopData = json_decode('{"ต่ำกว่า 3,000 บาท":"ต่ำกว่า 3,000 บาท","3,000 - 5,000 บาท":"3,000 - 5,000 บาท","5,000 - 10,000 บาท":"5,000 - 10,000 บาท","10,000 - 20,000 บาท":"10,000 - 20,000 บาท","20,000 บาทขึ้นไป":"20,000 บาทขึ้นไป"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($User->income) && $User->income == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('income', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('education') ? 'has-error' : ''); ?>">
                            <label for="education" class="control-label"><?php echo e('ระดับการศึกษา'); ?></label>
                            <select name="education" class="form-control" id="education">
                                <?php $__currentLoopData = json_decode('{"ประถมศึกษา":"ประถมศึกษา","มัธยมศึกษาตอนต้น":"มัธยมศึกษาตอนต้น","มัธยมศึกษาตอนปลาย/ปวช.":"มัธยมศึกษาตอนปลาย/ปวช.","อนุปริญญา/ปวส./ปวท":"อนุปริญญา/ปวส./ปวท","ปริญญาตรี":"ปริญญาตรี","สูงกว่าปริญญาตรี":"สูงกว่าปริญญาตรี"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($User->education) && $User->education == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('education', '<p class="help-block">:message</p>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('relevance') ? 'has-error' : ''); ?>">
                            <label for="relevance" class="control-label"><?php echo e('ความเกี่ยวข้องกับผู้ป่วยที่ดูแล'); ?></label>
                            <select name="relevance" class="form-control" id="relevance">
                                <?php $__currentLoopData = json_decode('{"บิดา":"บิดา","มารดา":"มารดา","บุตร":"บุตร","พี่":"พี่","น้อง":"น้อง","ญาติ":"ญาติ"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($User->relevance) && $User->relevance == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('relevance', '<p class="help-block">:message</p>'); ?>

                        </div>

                <div class="container-fluid">
                    <div class="row">                  
                            <div class="col-md-10">
                                <a href="<?php echo e(url('/volunteer_per')); ?>" title="Back"><button class="btn btn-info" ><i  aria-hidden="true"></i>ย้อนกลับ</button></a>
                            </div>

                            <div class="col-md-2">
                                <input class="btn btn-primary" type="submit" value="บันทึก">
                            </div>
                    </div> 
                </div>       
                    <br> 
                    </form> 
            </div>
        </div>
    </div>
</div>
</div>                         
</div>  

<script>
      $(document).ready(function(){
        console.log("HELLO");
        showProvinces();
        dataTable();
      });
      function dataTable(){
        var url = "<?php echo e(url('/')); ?>/api/district";
        var callback = function(result){
          var dataSet = [];
          result.forEach(function(element,index) {
            var row = [
              element.id,
              element.district,
              element.amphoe,
              element.province,
              element.zipcode,
            ];
            dataSet.push(row);
          }); //END FOREACH
          //console.log(dataSet);
          var table = $('#table-example').DataTable({
            "data": dataSet,
            "deferRender" : true,
            "columns": [
              { title: "id" },
              { title: "ตำบล" },
              { title: "อำเภอ" },
              { title: "จังหวัด" },
              { title: "zipcode" },
            ],
          }); // END DATATABLE
        };
        //CALL AJAX
        ajax(url,callback);
      }
      function showProvinces(){
        //PARAMETERS
        var url = "<?php echo e(url('/')); ?>/api/province";
        var callback = function(result){
          $("#input_province").empty();
          for(var i=0; i<result.length; i++){
            $("#input_province").append(
              $('<option></option>')
                .attr("value", ""+result[i].province_code)
                .html(""+result[i].province)
            );
          }
          showAmphoes();
        };
        //CALL AJAX
        ajax(url,callback);
      }
      function showAmphoes(){
        //INPUT
        var province_code = $("#input_province").val();
        //PARAMETERS
        var url = "<?php echo e(url('/')); ?>/api/province/"+province_code+"/amphoe";
        var callback = function(result){
          //console.log(result);
          $("#input_amphoe").empty();
          for(var i=0; i<result.length; i++){
            $("#input_amphoe").append(
              $('<option></option>')
                .attr("value", ""+result[i].amphoe_code)
                .html(""+result[i].amphoe)
            );
          }
          showDistricts();
        };
        //CALL AJAX
        ajax(url,callback);
      }
      function showDistricts(){
        //INPUT
        var province_code = $("#input_province").val();
        var amphoe_code = $("#input_amphoe").val();
        //PARAMETERS
        var url = "<?php echo e(url('/')); ?>/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district";
        var callback = function(result){
          //console.log(result);
          $("#input_district").empty();
          for(var i=0; i<result.length; i++){
            $("#input_district").append(
              $('<option></option>')
                .attr("value", ""+result[i].district_code)
                .html(""+result[i].district)
            );
          }
          showZipcode();
        };
        //CALL AJAX
        ajax(url,callback);
      }
      function showZipcode(){
        //INPUT
        var province_code = $("#input_province").val();
        var amphoe_code = $("#input_amphoe").val();
        var district_code = $("#input_district").val();
        //PARAMETERS
        var url = "<?php echo e(url('/')); ?>/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district/"+district_code;
        var callback = function(result){
          //console.log(result);
          for(var i=0; i<result.length; i++){
            $("#input_zipcode").val(result[i].zipcode);
          }
        };
        //CALL AJAX
        ajax(url,callback);
      }
      function ajax(url, callback){
        $.ajax({
    			"url" : url,
    			"type" : "GET",
    			"dataType" : "json",
    		})
        .done(callback); //END AJAX
      }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.volunteer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/volunteer/volunteer_personal/volunteer_personal.blade.php ENDPATH**/ ?>