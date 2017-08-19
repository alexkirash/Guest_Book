$(function(){
	
		var refreshButton = $('h1 img'),
        shoutboxForm = $('.shoutbox-form'),
        form = shoutboxForm.find('form'),
        closeForm = shoutboxForm.find('h2 span'),
        nameElement = form.find('#shoutbox-name'),
        messageElement = form.find('#shoutbox-comment'),
        ul = $('ul.shoutbox-content');
 
 
 
   shoutboxForm.on('click', 'h2', function(e){
        
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
	/*
	function publish(name,message){
    
        $.post('add_msg.php', {name: name, message: message}, function(){
            nameElement.val("");
            messageElement.val("");
            load();
        });

    }
    */
	
});