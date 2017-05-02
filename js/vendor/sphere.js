/**
 * Draws a particle sphere/spiral on canvas.
 * 
 * @author Hakim El Hattab | http://hakim.se
 */
(function(){
	var d = document,
		canvas = d.body.appendChild( d.createElement( 'canvas' ) ),
		context = canvas.getContext( '2d' ),
		time = 0,
		w = 4,
		h = 4,
		cos = Math.cos,
		sin = Math.sin,
		PI = Math.PI;
	
	function resize() {
		canvas.width = w = innerWidth;
		canvas.height = h = innerHeight;
	}

	// Initial size
	resize();
	
	// The main animation loop
	setInterval( function() {
		context.clearRect( 0, 0, w, h );
		context.fillStyle = 'rgba(23,195,123,.5)';
		context.globalCompositeOperation = 'lighter';
		
		time += .1;
		
		// The number of particles to generate
		i = 6000;
		
		while( i-- ) {
			// The magic
			r = ( ( w + h ) * 0.4 ) * ( cos( ( time + i ) * ( .05 + ( ( sin(time*0.00002) / PI ) * .2 ) ) ) / PI );
			
			context.fillRect( sin(i) * r + (w/2), 
							  cos(i) * r + (h/2), 
							  1, 
							  1 );
		}
	}, 16 );
})()