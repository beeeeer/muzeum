//libs

//SHUFFLE:
/**
 * jQuery Shuffle (/web/20120307220753/http://mktgdept.com/jquery-shuffle)
 * A jQuery plugin for shuffling a set of elements
 *
 * v0.0.1 - 13 November 2009
 *
 * Copyright (c) 2009 Chad Smith (/web/20120307220753/http://twitter.com/chadsmith)
 * Dual licensed under the MIT and GPL licenses.
 * /web/20120307220753/http://www.opensource.org/licenses/mit-license.php
 * /web/20120307220753/http://www.opensource.org/licenses/gpl-license.php
 *
 * Shuffle elements using: $(selector).shuffle() or $.shuffle(selector)
 *
 **/
(function (d) {
    d.fn.shuffle = function (c) {
        c = [];
        return this.each(function () {
            c.push(d(this).clone(true))
        }).each(function (a, b) {
            d(b).replaceWith(c[a = Math.floor(Math.random() * c.length)]);
            c.splice(a, 1)
        })
    };
    d.shuffle = function (a) {
        return d(a).shuffle()
    }
})(jQuery);

jQuery(document).ready(function ($) {
    $.fn.randomize = function(selector){
        (selector ? this.find(selector) : this).parent().each(function(){
            $(this).children(selector).sort(function(){
                return Math.random() - 0.5;
            }).detach().appendTo(this);
        });

        return this;
    };

    $('.answers').randomize('li');

    var pinLogic = function () {
        console.log('pin logic');
        var button = $('.expanders__relay');
        button.each(function () {
            if ($(this).attr('audio') == '.mp3') {
                $(this).css('display', 'none');
            } else {
                $(this).css('display', 'block');
            }
        });

        function setButtons() {
            button.each(function () {
                $(this).on('click', function () {
                    if ($(this).attr('pin') == '1') {
                        $(this).removeClass('on');
                    } else {
                        $(this).addClass('on');
                    }
                });
            });
        }

        function getObject() {

            return $('.expanders > li > a');
        }

        function pins(obj) {
            getObject().each(function (index) {
                $(this).on('click', function () {
                    var mp = null;
                    var id = $(this).attr('relayId')
                    text = $(this).next().val()
                    content = $('#custom-text');
                    content.html('');
                    content.html(text);
                    $(this).attr('pin', function (index, attr) {
                        return attr == 1 ? 0 : 1;
                    });
                    var expander = [],
                        pointData = [],
                        command = $(this).attr('expander');
                    command2 = getObject().each(function () {
                        if (command == $(this).attr('expander')) {
                            expander.push($(this).attr('pin'));
                        }
                    });
                    var stringPin = expander.join('');

                    stringProcessPin = stringPin.replace(',', '');
                    pointData[0] = command + stringProcessPin;
                    pointData[1] = $(this).attr('audio');
                    pointData[2] = 'status' + $(this).attr('pin');
                    if($('.container').hasClass('game')){
                        mp = pointData[1];
                        console.log('lets play a game');
                        $('.answers > li > a').on('click',function(e){
                            if(mp === $(this).attr('audio')){
                                console.log(mp + '=?' +  $(this).attr('audio'));
                                console.log('odpowiedz poprawna -> powinien pojsc request')
                            } else {
                                console.log(mp + '=?' +  $(this).attr('audio'));
                                console.log('odpowiedz niepoprawna -> czekam dalej')
                            }
                        });
                    }
                    else {
                        if ($(this).attr('external') == 'true') {
                            console.log('external ajax');
                            $.ajax({
                                type: "GET",
                                url: "send",
                                data: {data: pointData},
                                success: function (response) {
                                    console.log(response);
                                    $.ajax({
                                        type: "POST",
                                        url: "setpoint",
                                        data: {data: pointData},
                                        success: function (response) {
                                            console.log(response)
                                            console.log(pointData)
                                        }, error: function (resp) {
                                            console.log(resp)
                                        }
                                    }, "json");
                                }, error: function (resp) {
                                    console.log(resp)
                                }
                            }, "json");

                        } else {
                            console.log('internal ajax');
                            $.ajax({
                                type: "POST",
                                url: "setpoint",
                                data: {data: pointData},
                                success: function (response) {
                                    console.log(pointData)
                                }, error: function (resp) {
                                    console.log(resp)
                                }
                            }, "json");
                        }

                    }
                });
            });
            setButtons();
        }

        pins();
        //returns
        return {
            setButtons: setButtons,
            pins: pins,
        }
    }();

    var pullLogic = function () {

        function pull() {
            var pull = $('.branch')
            output = $('#output');
            pull.on('click', function () {
                var br = $(this).attr('branch');
                pull.css("display", "none");
                $.ajax({
                    type: "POST",
                    url: "fetchData",
                    data: {data: br},
                    success: function (response) {
                        pull.css("display", "block");
                        console.log(response);
                        output.html();
                        output.html(response);
                    }, error: function (response) {
                        pull.css("display", "block");
                        console.log(response);
                        output.html();
                        output.html(response.responseText);
                    }
                }, "json");
            });
        }

        pull();
        return {
            pull: pull
        }
    }();

    var switchall = function () {
        var switchAllOn = $('#switchAllOn'),
            switchAllOff = $('#switchAllOff');
        console.log(switchAllOff);
        switchAllOn.on('click', function () {
            switchAllOff.removeClass('on');

            $.ajax({
                type: "POST",
                url: "switchAllOn",
                data: {data: 'on'},
                success: function (response) {
                    console.log(response);
                }, error: function (response) {
                    console.log(response);
                }
            }, "json");

        });
        switchAllOff.on('click', function () {
            switchAllOn.removeClass('on');
            console.log(switchAllOn);
            $.ajax({
                type: "POST",
                url: "switchAllOff",
                data: {data: 'off'},
                success: function (response) {
                    console.log(response);
                }, error: function (response) {
                    console.log(response);
                }
            }, "json");
        });

    }();

    var setText = function () {
        var text = $(this).next().val(),
            content = $('#custom-text');
        button = $();

    }();
});

