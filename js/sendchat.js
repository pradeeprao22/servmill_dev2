$(function() {
  $('#servmsg').click(function() {
	document.newMessage.servmsg.value = "";
        });
	$('#servmillbtn').click(function(){
		var username = $('#fromid').val();
		var message = $('#servmsg').val();
		var recipient = $('#toid').val();
		if (message == "" || message == "Enter your message here" || recipient == "" || recipient == "--Send Chat To--"){
    return false;
		}

		var dataString = 'username=' + username + '&message=' + message + '&recipient=' + recipient;

		$.ajax({
      type: "POST",
			url: "send_save_chat.php",
			data: dataString,
			success: function() {
			document.newMessage.servmsg.value = "";
			}
		});
	});
});
