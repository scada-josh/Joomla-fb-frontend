<div id="myModal2" class="modal hide fade">

    <div class="modal-header ">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">ข้อมูลสมาชิก</h3>
  </div>
  <div class="modal-body" >

                <!-- <div class="row"> -->
                    <!-- <div class="span3"></div>
                    <div class="span6"> -->
                        <form class="form-horizontal" method="POST" id="form_member_register" onsubmit="return register_new_member();" >
                            <fieldset>
                                <legend><small>ข้อมูลทั่วไป</small></legend>
                                <div class="control-group">
                                    <label class="control-label">ประเภทสมาชิก<span style="color: red">*</span></label>
                                    <div class="controls">
                                        <label class="radio">
                                            <input type="radio" name="memberLevel" id="memberRadios1" value="STANDARD" checked>สมาชิกทั่วไป
                                        </label>
                                        <label class="radio">
                                            <span id="vip_privilege"><input type="radio" name="memberLevel" id="memberRadios2" value="VIP">สมาชิก VIP <small >(350 บาท/ปี)</small></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="memberName">ชื่อ-นามสกุล<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input name="memberName" type="text">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="memberEmail">Email Address<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input type="text" name="memberEmail" id="memberEmail" placeholder="อีเมล์ (Email Address)" autocomplete="off">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="memberTel">เบอร์โทรศัพท์ : </label>
                                    <div class="controls">
                                        <input name="memberTel" type="text" placeholder="08xxxxxxxx">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">เพศ<span style="color: red">*</span></label>
                                    <div class="controls">
                                        <label class="radio inline">
                                            <input type="radio" name="memberSex" id="sexRadios1" value="male" checked>
                                            ชาย
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="memberSex" id="sexRadios2" value="female">หญิง
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="memberAddress">ที่อยู่<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <textarea name="memberAddress" placeholder="ที่อยู่สำหรับจัดส่งสินค้า"></textarea>
                                        <!--                                    <span class="help-block">กรุณากรอกที่อยู่ให้ถูกต้อง</span>-->
                                    </div>
                                </div>
                                <legend><small>เปลี่ยนรหัสผ่าน</small></legend>
                                <div class="control-group">
                                    <label class="control-label" for="password1">รหัสผ่าน<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input id="password1" name="password1" type="password">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="password2">ยืนยันรหัสผ่าน<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input id="password2" name="password2" type="password">
                                    </div>
                                </div>
                                <!-- <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                                    <button type="reset" onclick="myResetForm()" class="btn btn-primary">ยกเลิก</button>
                                </div> -->
                            </fieldset>
                        </form>
                    <!-- </div>
                    <div class="span3"></div> -->
               <!--  </div> -->


  </div>
  <div class="modal-footer">
      <button class="btn btn-primary" data-dismiss="modal">บันทึก</button>
      <button class="btn" data-dismiss="modal">ยกเลิก</button>
  </div>

</div>