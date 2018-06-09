var ControlView = Backbone.View.extend({
	initialize: function() {
		this.template = _.template($('.control-buttons').html());
	},
	events: {
		'click .start-button': 'start',
		'click .stop-button': 'stop',
	},
    start: function() {
        $.ajax({
            url: '/index.php/api/record',
            type: 'POST',
        });
        set_button_state(true);
    },
    stop: function() {
        $.ajax({
            url: '/index.php/api/record',
            type: 'DELETE',
        });
        set_button_state(false);
    },
    update: function() {
        $.ajax({
            url: '/index.php/api/record',
            type: 'GET',
            success: function(result) {
                console.log("Recording status: " + result);
                if (result == 'on') {
                    set_button_state(true);
                } else {
                    set_button_state(false);
                }
            }
        });
    }
});

var set_button_state = function(state) {
    if (state) {
        $('.start-button').attr("disabled", true);
        $('.stop-button').attr("disabled", false);
    } else {
        $('.start-button').attr("disabled", false);
        $('.stop-button').attr("disabled", true);
    }
}

$(document).ready(function() {
    var controlView = new ControlView({ el: $('.control-buttons') });
    controlView.update();

    setInterval(function() {
        controlView.update();
    }, 1000);
})
