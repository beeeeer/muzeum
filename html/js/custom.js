jQuery(document).ready(function($){

    var pinLogic = function() {
        var button = $('.expanders__relay');

        function setButtons(){
            button.each(function(){
                $(this).on('click',function(){
                    if($(this).attr('pin') == '1'){
                        $(this).removeClass('on');
                    } else {
                        $(this).addClass('on');
                    }
                });
            });
        } 

        function getObject()
        {

            return $('.expanders > li > a');
        }

        function pins(obj)
        {
            getObject().each(function(index){
                $(this).on('click',function(){
                    var id = $(this).attr('relayId');
                    $(this).attr('pin', function(index, attr){
                        return attr == 1 ? 0 : 1;
                    });
                    var expander = [],
                        pointData = [],
                        command = $(this).attr('expander');
                        command2 = getObject().each(function(){
                                        if(command == $(this).attr('expander')) {
                                            console.log(command);
                                            expander.push($(this).attr('pin'));
                                        }
                                    });
                    var stringPin = expander.join('');
                    
                        stringProcessPin = stringPin.replace(',','');
                        pointData[0] = command + stringProcessPin;
                        pointData[1] = $(this).attr('audio');
                        pointData[2] = 'status' + $(this).attr('pin');
                        console.log(pointData);
                    $.ajax({
                        type: "POST",
                        url : "setpoint",
                        // dataType: 'array',
                        data : { data: pointData },
                        success : function(response){
                            console.log('response')
                            console.log(response)
                        }
                    },"json");

                });
            });
            setButtons();
        } pins();
        //returns
        return {
            setButtons: setButtons,
            pins: pins,
        }
    }();
});
