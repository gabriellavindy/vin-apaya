$(function menuToggler(){
    $('header .menu-toggler').click(function(){
        if($('header').offset().left > 0){
            $('header,#wrapper,#pathway').animate({'left':'0px'},400);
            $('#sidebar').animate({'left':'-240px'},600);
        } else {
            $('header,#wrapper,#pathway').animate({'left':'240px'},400);
            $('#sidebar').animate({'left':'0px'},200);
        }
    });
});
$(function sidebarNav(){
    $('#sidebar nav ul li ul').prev('a').append('<i class="arrow fa fa-chevron-right"></i>');
    $('#sidebar nav ul li ul').parent().children('a').click(function(){
        //$('#sidebar nav li').removeClass('active');
        if($(this).next('ul').is(':hidden')){
            $('#sidebar nav li').removeClass('active').children('ul').hide();
            $(this).next('ul').show().parent().addClass('active');
        } else {
            $(this).next('ul').hide().parent().removeClass('active');
        }
    });
    $('#sidebar nav a').each(function(){
        var text    = $(this).text();
        if (text.length > 24){
            $(this).hover(function(){
                $(this).stop().animate({textIndent : - parseInt(text.length)-20},2000);
            },function(){
                $(this).stop().animate({textIndent : '0'});
            });
            /*$(this).tipTip({
                defaultPosition :'right',
                //delay:1500,
                content: text
            });*/
        }
    });
});

$(function(){
    $('.breadcrumb').appendTo('#pathway');
});

$(function(){
    $('.tiptip').tipTip();
    $('.datepicker').datepicker({
        dateFormat:'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        showOn: "button"
    });
});

$(function activeMenu(){

    if($('.breadcrumb li').length == 1){
        var active = $('.breadcrumb .current').text();
    
        $('#sidebar nav a').filter(function() {
            var text = $(this).text(); 
            return text == active;
        }).parent().addClass('active').children('ul').show();

    }
    else if ($('.breadcrumb li').length == 2){
        var active  = $('.breadcrumb li').eq(1).text()
    
        $('#sidebar nav a').filter(function() {
            var text = $(this).text(); 
            return text == active;
        }).parent().addClass('active').children('ul').show();
    }
    else if ($('.breadcrumb li').length > 2){
        var active  = $('.breadcrumb li').eq(1).text(),
            active2 = $('.breadcrumb li').eq(2).text();
    
        $('#sidebar nav a').filter(function() {
            var text = $(this).text(); 
            return text == active;
        }).parent().addClass('active').children('ul').show();

        $('#sidebar nav a').filter(function() {
            var text = $(this).text(); 
            return text == active2;
        }).parent().addClass('active');
    }

    /*if($('.breadcrumb[class!=inactive] li').length == 1){
        var active = $('.breadcrumb .current').text();
        $('#sidebar nav a:contains('+active+')').parent().addClass('active');
    }
    else if($('.breadcrumb[class!=inactive] li').length > 1){
        var active  = $('.breadcrumb li').eq(1).text(),
            active2 = $('.breadcrumb li').eq(2).text() ;
        $('#sidebar nav a:contains('+active+')').parent().addClass('active').children('ul').show();
        $('#sidebar nav a:contains('+active2+')').parent().addClass('active').children('ul').show();
    }*/

});

function noticeSuccess(){
    $('#notification').remove();
    $('body').append(   '<div id="notification">'
                            + '<i class="icon fa fa-check"></i>'
                            + '<strong>SUCCESS</strong>'
                        + '</div>');
    $('#notification').fadeIn(200).delay(400).fadeOut(200);

}
function noticeFailed(){
    $('#notification').remove();
    $('body').append(   '<div id="notification">'
                            + '<i class="icon fa fa-times"></i>'
                            + '<strong>FAILED</strong>'
                        + '</div>');
    $('#notification').fadeIn(200).delay(400).fadeOut(200);

}

$(function fileUpload(){
    $('.fileupload .fileupload_btn').click(function(){
        $(this).parent('.fileupload').find('.fileupload_input').trigger('click');
    });
    $('.fileupload .fileupload_clear').hide().click(function(){
        $(this).parent('.fileupload').find('.fileupload_input').val('');
        $(this).parent('.fileupload').find('.fileupload_text').val('');
        $(this).parent('.fileupload').find('.fileupload_btn').text('Pilih File');
        $(this).hide();
    });
    $('.fileupload_input').change(function(){
        var value = $(this).val().replace(/.+[\\\/]/, "");
        $(this).parent('.fileupload').find('.fileupload_text').val(value);
        if ($(this).val()!=''){
            $(this).parent('.fileupload').find('.fileupload_btn').text('Ganti File');
            $(this).parent('.fileupload').find('.fileupload_clear').show();
        } else {
            $(this).parent('.fileupload').find('.fileupload_btn').text('Pilih File');
            $(this).parent('.fileupload').find('.fileupload_clear').hide();
        }
    });
    $('.fileupload_input').each(function(){
        if ($(this).val()!=''){
            $(this).parent('.fileupload').find('.fileupload_btn').text('Ganti File');
            $(this).parent('.fileupload').find('.fileupload_clear').show();
        } else {
            $(this).parent('.fileupload').find('.fileupload_btn').text('Pilih File');
            $(this).parent('.fileupload').find('.fileupload_clear').hide();
        }
    });
});
$(function pathway(){    
    $('.breadcrumb').prependTo('#pathway');
});
$(fun
$(function scrollMenu(){
	if($('nav ul').find('li').hasClass('active')){
    var pos = $('nav ul li.active').last().offset();
    var navpos = $('nav').offset();
	var nowpos = parseInt($.cookie("activetop"))-parseInt(pos.top);
	
    //$('#sidebar').scrollTop(parseInt(pos.top)-parseInt(navpos.top));
	/*var top = $.cookie("navtop");
	$('#sidebar').scrollTop(top);
	$('#sidebar').scroll(function(){
		$.cookie("navtop",$('nav').offset().top);
		//alert('tes');
	});    */
	$('#sidebar').scrollTop(nowpos*-1);
	$('nav').find('a').click(function(){
		$.cookie("activetop", ($(this).offset().top));				
	});
	}
});