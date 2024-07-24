var SessionTimeout = function () {

    var handlesessionTimeout = function () {
        $.sessionTimeout({
            title: 'صفحه شما قفل خواهد شد.',
            message: 'شما بیشتر از سه دقیفه در سیستم کار نکرده اید.',
            keepAliveUrl: '../demo/timeout-keep-alive.php',
            redirUrl: 'logoutController',
            logoutUrl: 'logoutController',

            warnAfter: 490000, //warn after 5 seconds
            redirAfter: 500000, //redirect after 10 secons,
            countdownMessage: 'بعد از {timer} ثانیه شما خارج میشود.',
            countdownBar: true
        });
    }

    return {
        //main function to initiate the module
        init: function () {
            handlesessionTimeout();
        }
    };

}();

jQuery(document).ready(function() {
   SessionTimeout.init();
});
