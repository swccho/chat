function openOptions() {
    $('.rightSideNav').slideDown();
}
function closeSetting() {
    $('.rightSideNav').slideUp();
}
function showC8List(){
    $('.chat').css('display','none');
    $('.chat_boxs').slideDown();
    $('.sidenav').css('display','block')
}
function showMsg(type){
    if(type == 0){
        $('.chat_boxs').css('display','none')
        $('.chat').css('display','block')
        $('.sidenav').css('display','none')
    }
    if(type == 1){
        $('.chat_boxs').css('display','none')
        $('.chat').css('display','block')
        $('.sidenav').css('display','none')
    }
    if(type == 2){
        $('.chat_boxs').css('display','none')
        $('.chat').css('display','block')
        $('.sidenav').css('display','none')
    }
    if(type == 3){
        $('.chat_boxs').css('display','none')
        $('.chat').css('display','block')
        $('.sidenav').css('display','none')
    }
    if(type == 4){
        $('.chat_boxs').css('display','none')
        $('.chat').css('display','block')
        $('.sidenav').css('display','none')
    }
    if(type == 5){
        $('.chat_boxs').css('display','none')
        $('.chat').css('display','block')
        $('.sidenav').css('display','none')
    }
}
function showleftsidenav() {
    var width = $(window).width();
    if(width < 980){
      $('.nav').slideToggle();
    } else{
        
    }
}
