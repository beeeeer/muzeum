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
				pointData = command + stringProcessPin;
            	console.log(pointData);

            $.ajax({
                type: "POST",
                url : "setpoint",
                dataType: 'text',
                data : { data: pointData },
                success : function(response){
                    console.log('response')
					console.log(response)
                }
            },"json");

		});
	});
    var buttons = function() {
        var button = $('.expanders__relay');

        button.each(function(){
            $(this).on('click',function(){
                if($(this).attr('pin') == '0'){
                    $(this).removeClass('on');
                } else {
                    $(this).addClass('on');
                }
            });
        });
    }();
});