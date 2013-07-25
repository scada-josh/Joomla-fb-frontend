$(document).ready(function() {  
    
    //Form Member Register validation
    $('#form_member_setting').validate(
    {
        rules: {
            memberName: {
                //minlength: 2,
                required: true
            },
            memberEmail: {
                required: true,
                minlength: 2,
                email: true
            },
            memberTel: {
                //required: true,
                //minlength: 10,
                maxlength: 20,
                number: true
            },
            memberAddress: {
                //minlength: 2,
                required: true
            },
            // password1: {
            //     required: true,
            //     minlength: 4
            // },
            // password2: {
            //     required: true,
            //     minlength: 4
            // }
        },
        messages: {
            memberName: "กรุณากรอกชื่อผู้ใช้งาน",
            memberEmail: "กรุณากรอก email address",
            memberTel:{
                //required: "กรุณากรอกเบอร์โทรศัพท์",
                //minlength: "กรุณากรอกเบอร์โทรศัพท์ให้ครบ 10 หลัก",
                maxlength: "เบอร์โทรศัพท์ไม่ถูกต้อง",
                number: "กรุณาใส่เฉพาะตัวเลขเท่านั้น"
            },
            memberAddress: "กรุณากรอกที่อยู่เพื่อใช้ในการติดต่อ",
            // password1: {
            //     required: "กรุณาใส่รหัสผ่าน",
            //     minlength: "กรุณาใส่รหัสผ่านอย่างน้อย 4 หลัก"
            // },
            // password2: {
            //     required: "กรุณายืนยันรหัสผ่าน",
            //     minlength: "กรุณาใส่รหัสผ่านอย่างน้อย 4 หลัก"
            // }
        },
        highlight: function(label) {
            $(label).closest('.control-group');
        //    .addClass('error');
        },
        success: function(label) {
            label
            .text('OK!')
            .addClass('valid')
            .closest('.control-group');
        //      .addClass('success');
        }
    });

//Form Member Register validation


});
