var ControlView = Backbone.View.extend({
	initialize: function() {
		this.template = _.template($('.control-buttons').html());
	},
	events: {
		'click .start-button': 'start',
		'click .stop-button': 'stop',
	},
    start: function() {
    },
    stop: function() {
    },
    update: function() {

    }
});

$(document).ready(function() {
    var controlView = new ControlView({ el: $('.control-buttons') });

    setInterval(function() {
        controlView.update();
    }, 3000);
})
