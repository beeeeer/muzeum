jQuery(document).ready(function($){

    var pinLogic = function() {
        var button = $('.expanders__relay');

        function setButtons(){
            button.each(function(){
                $(this).on('click',function(){
                    if($(this).attr('pin') == '0'){
                        $(this).removeClass('on');
                    } else {
                        $(this).addClass('on');
                    }
                });
            });
        } 
        function getObject()
        {
            console.log('getObject')
            return $('.expanders > li > a');
        }
        function pins(obj)
        {
            getObject().each(function(index){
                $(this).on('click',function(){
                    var id = $(this).attr('id');
                        console.log(id)
                    $(this).attr('pin', function(index, attr){
                        return attr == 0 ? 1 : 0;
                    });
                    var expander =[];
                    var command = $(this).attr('expander');
                        command2 = getObject().each(function(){
                                        if(command == $(this).attr('expander')) {
                                            expander.push($(this).attr('pin'));
                                        }
                                    });
                    var stringPin = expander.join('');
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
            setButtons();
        } pins();
        //returns
        return {
            setButtons: setButtons,
            pins: pins,
        }
    }();
});