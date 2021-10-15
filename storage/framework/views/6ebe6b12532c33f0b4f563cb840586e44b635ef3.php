<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
     
      <th scope="col">ชื่อดอกไม้</th>
      <th></th>
      <th scope="col">จำนวน</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
      <td> Agrimony</td>
      <div class="form-group <?php echo e($errors->has('ep1_1') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_1" type="checkbox" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_1) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
        <?php echo $errors->first('ep1_1', '<p class="help-block">:message</p>'); ?>

      </div>
      <td><input type="number"></td>
    </tr>
    <tr>
        <td>2</td>
      <td>Aspen</td>
      <div class="form-group <?php echo e($errors->has('ep1_2') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_2" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_2) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_2', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>3</td>
      <td>Aspen</td>
      <div class="form-group <?php echo e($errors->has('ep1_3') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_3" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_3) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
        
        <?php echo $errors->first('ep1_3', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>4</td>
      <td>Centaury</td>
      <div class="form-group <?php echo e($errors->has('ep1_4') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_4" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_4) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
       
        <?php echo $errors->first('ep1_4', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>5</td>
      <td>Cerato</td>
      <div class="form-group <?php echo e($errors->has('ep1_5') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_5" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_5) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_5', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>6</td>
      <td>Cherry Plum</td>
      <div class="form-group <?php echo e($errors->has('ep1_6') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_6" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_6) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_6', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>7</td>
      <td>Chestnut Bud</td>
      <div class="form-group <?php echo e($errors->has('ep1_7') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_7" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_7) ? 'checked' : ''); ?>> </label>
      </div>
        </td>
      
        <?php echo $errors->first('ep1_7', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>8</td>
      <td>Chicory</td>
      <div class="form-group <?php echo e($errors->has('ep1_8') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_8" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_8) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_8', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>9</td>
      <td>Clematis</td>
      <div class="form-group <?php echo e($errors->has('ep1_9') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_9" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_9) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
       
        <?php echo $errors->first('ep1_9', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
         <td>10</td>
      <td>Crab Apple</td>
      <div class="form-group <?php echo e($errors->has('ep1_10') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_10" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_10) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
       
        <?php echo $errors->first('ep1_10', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
       <td>11</td>
      <td>Elm</td>
      <div class="form-group <?php echo e($errors->has('ep1_11') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_11" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_11) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_11', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>12</td>
      <td>Gentian</td>
      <div class="form-group <?php echo e($errors->has('ep1_12') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_12" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_12) ? 'checked' : ''); ?>> </label>
          </div>
       </td>
      
        <?php echo $errors->first('ep1_12', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>13</td>
      <td>Gorse</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>14</td>
      <td>Heather</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>15</td>
      <td>Holly</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
       
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>16</td>
      <td>Honeysuckle</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>17</td>
      <td>Honeysuckle</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>18</td>
      <td>Impatiens</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
     
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>19</td>
      <td>Larch</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
     
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>20</td>
      <td>Mimulus</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>21</td>
      <td>Mustard</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
   
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>22</td>
      <td>Oak </td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>23</td>
      <td>Olive</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
     
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>24</td>
      <td>Pine</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>25</td>
      <td>Red Chestnut</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
   
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>26</td>
      <td>Rock Rose
      </td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
   
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>27</td>
      <td>Rock Rose
      </td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
     
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>28</td>
      <td>Scleranthus
      </td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
     
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>29</td>
      <td>Star of Bethlehem</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
       
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>30</td>
      <td>Sweet Chestnut</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
     
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>31</td>
      <td>Vervain</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>32</td>
      <td>Vine</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>33</td>
      <td>Walnut</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
      
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>34</td>
      <td>Water Violet </td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
   
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>35</td>
      <td>White Chestnut </td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
     
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>36</td>
      <td>Wild Oat</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>37</td>
      <td> Wild Rose</td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
   
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>38</td>
      <td>Wild Rose </td>
      <div class="form-group <?php echo e($errors->has('ep1_13') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="ep1_13" type="radio" value="1" <?php echo e((isset($_q1_1) && 1 == $_q1_1->ep1_13) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
       
        <?php echo $errors->first('ep1_13', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>

    <!-- ///////////////////////////// -->
  </tbody>
</table>


<?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/questionnaireone/quest_medicine.blade.php ENDPATH**/ ?>