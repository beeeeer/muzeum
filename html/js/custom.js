jQuery(document).ready(function($){

	$('.relayexp1').each(function(index){
		$(this).on('click',function(){
            $(this).attr('pin', function(index, attr){
                return attr == 0 ? 1 : 0;
            });
			var expander =[];
            var command = $(this).attr('expander');
				command2 = $('.relayexp1').each(function(){
								if(command == $(this).attr('expander')) {
                                    expander.push($(this).attr('pin'));
                                }
                			});
            var stringPin = expander.join('')
            	stringProcessPin = stringPin.replace(',','')
				data = command + stringProcessPin;
            	console.log(data)

            $.ajax({
                type: "POST",
                url : "setpoint",
                data : data,
                success : function(response){
					console.log(response)
                }
            },"json");

		});
	});
});