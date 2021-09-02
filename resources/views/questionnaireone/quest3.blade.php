<table class="table table-bordered">
    <thead>

        <tr>
            
                <h6><b> คำถามต่อไปนี้เป็นคำถามภายหลังการได้รับการวินิจฉัยและให้การบำบัดจากแพทย์/ผู้เชี่ยวชาญ เป็นระยะเวลา 14 วันในการรับประทานน้ำดอกไม้บาค</b></h6>
            
        </tr>

        <!--////////////////////////////// -->

        <tr>
            <div class="form-group {{ $errors->has('ep4_1') ? 'has-error' : ''}}">
                
                    <div class="radio">
                <td>
                    <input name="ep4_1" type="radio" value="0" {{ (isset($_q2_4) && 0 == $_q2_4->ep4_1) ? 'checked' : '' }}> </label>
            </div> 1.ท่านทานตลอดระยะเวลา 14 วัน</td>
            {!! $errors->first('ep4_1', '<p class="help-block">:message</p>') !!}
            </div>
        </tr>

        <!--////////////////////////////// -->

        <tr>
            <div class="radio">
                <td>
                    <input name="ep4_1" type="radio" value="1" {{ (isset($_q2_4) && 0 == $_q2_4->ep4_1) ? 'checked' : '' }}> </label>
            </div> 2.ท่านลืมรับประทานเป็นบางครังตลอดระยะเวลา 14 วัน <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="radio">
                
                    <input name="ep4_1" type="radio" value="1" {{ (isset($_q2_4) && 0 == $_q2_4->ep4_1) ? 'checked' : '' }}> </label>
            </div> 2-1.ลืม 1 ครั้ง <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="radio">
                
                    <input name="ep4_1" type="radio" value="1" {{ (isset($_q2_4) && 0 == $_q2_4->ep4_1) ? 'checked' : '' }}> </label>
            </div> 2-2.ลืม 2 ครั้ง <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="radio">
                
                    <input name="ep4_1" type="radio" value="1" {{ (isset($_q2_4) && 0 == $_q2_4->ep4_1) ? 'checked' : '' }}> </label>
            </div> 2-3.ลืมมากกว่า 2 ครั้ง
            </td>
        </tr>

        <!--////////////////////////////// -->

        <tr>
            <div class="radio">
                <td>
                    <input name="ep4_1" type="radio" value="2" {{ (isset($_q2_4) && 0 == $_q2_4->ep4_1) ? 'checked' : '' }}> </label>
            </div> 3.ท่านไม่ได้ประทานเลยตลอดระยะเวลา 14 วัน</td>
            {!! $errors->first('ep4_1', '<p class="help-block">:message</p>') !!}
            </div>
        </tr>

</table>


</thead>
<div class="form-group d-none{{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'ไอดีผู้ใช้' }}</label>
    <input class="form-control" rows="5" name="content" type="text" id="content" value="{{ $id }}">
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>