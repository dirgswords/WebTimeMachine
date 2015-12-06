
	skrollr.init({
		easing: {
			sin: function(p) {
				return (Math.sin(p * Math.PI * 2 - Math.PI/2) + 1) / 2;
			},
			cos: function(p) {
				return (Math.cos(p * Math.PI * 2 - Math.PI/2) + 1) / 2;
			},
		},
		render: function(data) {
			//Loop
			if(data.curTop === data.maxTop) {
				this.setScrollTop(0, true);
			}
		}
	});