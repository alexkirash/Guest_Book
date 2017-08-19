$(function(){
	
		var shoutboxForm2 = $('.shoutbox-form2'),
        form = shoutboxForm2.find('table'),
        closeForm = shoutboxForm2.find('h2 span'),
        ul = $('ul.shoutbox-content');
 
   shoutboxForm2.on('click', 'h2', function(e){
        
        if(form.is(':visible')) {
            formClose();
        }
        else {
            formOpen();
        }
        
    });
	ul.on('click', '.shoutbox-comment-reply', function(e){
        
        var replyName = $(this).data('name');
        
        formOpen();
        messageElement.val('@'+replyName+' ').focus();

    });
 function formOpen(){
        
        if(form.is(':visible')) return;

        form.slideDown();
        closeForm.fadeIn();
    }

    function formClose(){

        if(!form.is(':visible')) return;

        form.slideUp();
        closeForm.fadeOut();
    }
	
});