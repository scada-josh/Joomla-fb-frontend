


function showStandard(){
    $.gritter.add({
        title:	'Unread messages',
        text:	'You have 9 unread messages.',
        image: 	'img/demo/envelope.png',
        sticky: false
    });
}
            
function showSticky(){
                
    //                $.gritter.add({
    //                    // (string | mandatory) the heading of the notification
    //                    title: 'This is a notice with a max of 3 on screen at one time!',
    //                    // (string | mandatory) the text inside the notification
    //                    text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
    //                    // (string | optional) the image to display on the left
    //                    image: 'http://a0.twimg.com/profile_images/59268975/jquery_avatar_bigger.png',
    //                    // (bool | optional) if you want it to fade out on its own or just sit there
    //                    sticky: false,
    //                    // (function) before the gritter notice is opened
    //                    before_open: function(){
    //                        if($('.gritter-item-wrapper').length == 3)
    //                        {
    //                            // Returning false prevents a new gritter from opening
    //                            return false;
    //                        }
    //                    }
    //                });
                
                
                
                
                
                
                
    $.gritter.add({
        title:	'มีสินค้าในตะกร้า',
        text:	'คุณต้องการดูตระกร้าสินค้าไหม? <a>Click!</a>',
        sticky: true,
        before_open: function(){
            if($('.gritter-item-wrapper').length == 3){
                $.gritter.removeAll({
                    before_close: function(e){
                        //alert("I am called before all notifications are closed.  I am passed the jQuery object containing all  of Gritter notifications.\n" + e);
                        alert("แจ้งเตือนก่อนปิด Notification ทั้งหมด.");
                    },
                    after_close: function(){
                        //alert('I am called after everything has been closed.');
                        alert("แจ้งเตือนหลังปิด Notification ทั้งหมด.");
                        
                    }
                });
                // Returning false prevents a new gritter from opening
                return false;
            }
        }
    });
                
//                $.gritter.add({
//                    title:	'มีสินค้าในตะกร้า',
//                    text:	'คุณต้องการดูตระกร้าสินค้าไหม? <a>Click!</a>',
//                    sticky: true
//                });
}
            
function showNotice_with_image(){
    //var imgsrc = $(this).attr('data-image');
    $.gritter.add({
        title:	'Unread messages',
        text:	'You have 9 unread messages.',
        image: 'img/demo/envelope.png',
        sticky: false
    });
}
        