/*
 * http://www.thefutureoftheweb.com/blog/adddomloadevent
 *
 *
 * To use: call addDOMLoadEvent one or more times with functions, ie:
 *
 *    function something() {
 *       // do something
 *    }
 *    addDOMLoadEvent(something);
 *
 *    addDOMLoadEvent(function() {
 *        // do other stuff
 *    });
 *
 */
 
addDOMLoadEvent = (function(){
    // create event function stack
    var load_events = [],
        load_timer,
        script,
        done,
        exec,
        old_onload,
        init = function () {
            done = true;

            // kill the timer
            clearInterval(load_timer);

            // execute each function in the stack in the order they were added
            while (exec = load_events.shift())
                exec();

            if (script) script.onreadystatechange = '';
        };

    return function (func) {
        // if the init function was already ran, just run this function now and stop
        if (done) return func();

        if (!load_events[0]) {
            // for Mozilla/Opera9
            if (document.addEventListener)
                document.addEventListener("DOMContentLoaded", init, false);

            // for Internet Explorer
            /*@cc_on @*/
            /*@if (@_win32)
                document.write("<script id=__ie_onload defer src=//0><\/scr"+"ipt>");
                script = document.getElementById("__ie_onload");
                script.onreadystatechange = function() {
                    if (this.readyState == "complete")
                        init(); // call the onload handler
                };
            /*@end @*/

            // for Safari
            if (/WebKit/i.test(navigator.userAgent)) { // sniff
                load_timer = setInterval(function() {
                    if (/loaded|complete/.test(document.readyState))
                        init(); // call the onload handler
                }, 10);
            }

            // for other browsers set the window.onload, but also execute the old window.onload
            old_onload = window.onload;
            window.onload = function() {
                init();
                if (old_onload) old_onload();
            };
        }

        load_events.push(func);
    }
})();

function prepareForm() {
    var form = document.getElementById('wpcf7-f20-p10-o1');
    
    var inputs = form.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        var name = inputs[i].getAttribute('name');
        if (name == 'email') {
            inputs[i].setAttribute('type', 'email')
        }
    }    
}
addDOMLoadEvent(prepareForm);

$(document).ready(function ()
{
 $.getJSON("http://twitter.com/statuses/user_timeline/nahuelsotelo.json?callback=?", function(data) {
  $(".tw-txt").html(data[0].text);
 });
});
