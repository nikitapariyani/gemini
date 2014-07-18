/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

jQuery( document ).ready( function( $ ) {
    // Site title and description.
    wp.customize( 'blogname', function( value ) {
        value.bind( function( to ) {
            $( '.site-title a' ).text( to );
        } );
    } );
    wp.customize( 'blogdescription', function( value ) {
        value.bind( function( to ) {
            $( '.site-description' ).text( to );
        } );
    } );
    // Header text color.
    wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( to ) {
            if ( 'blank' === to ) {
                $( '.site-title, .site-description' ).css( {
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                } );
            } else {
                $( '.site-title, .site-description' ).css( {
                    'clip': 'auto',
                    'color': to,
                    'position': 'relative'
                } );
            }
        } );
    } );
} );
wp.customize( 'featured-background-image_1', function( value ) {
		value.bind( function( to ) {
			$( '.carousel-inner . item img' ).attr('src', to );
		} );
	} );
        wp.customize( 'featured-background-image_2', function( value ) {
		value.bind( function( to ) {
			$( '.carousel-inner . item img' ).attr('src', to );
		} );
	} );
        wp.customize( 'featured-background-image_3', function( value ) {
		value.bind( function( to ) {
			$( '.carousel-inner . item img' ).attr('src', to );
		} );
	} );
        
        wp.customize( 'slider_caption_1', function( value ) {
		value.bind( function( to ) {
			$( '.carousel-caption h2' ).text( to );
		} );
	} );
        
        wp.customize( 'slider_caption_2', function( value ) {
		value.bind( function( to ) {
			$( '.carousel-caption h2' ).text( to );
		} );
	} );
        
        wp.customize( 'slider_caption_3', function( value ) {
		value.bind( function( to ) {
			$( '.carousel-caption h2' ).text( to );
		} );
	} );
        
         wp.customize( 'home_widget_header', function( value ) {
		value.bind( function( to ) {
			$( '.home-jumbotron h1' ).text( to );
		} );
	} );
        
         wp.customize( 'home_widget_content', function( value ) {
		value.bind( function( to ) {
			$( '.home-jumbotron p' ).text( to );
		} );
	} );
        
        wp.customize( 'home_widget_content', function( value ) {
		value.bind( function( to ) {
			$( '.textwidget h3' ).text( to );
		} );
	} );
        
        wp.customize( 'home_widget_content', function( value ) {
		value.bind( function( to ) {
			$( '.textwidget p' ).text( to );
		} );
	} );
        
        wp.customize( 'home_widget_content', function( value ) {
		value.bind( function( to ) {
			$( '.textwidget h3' ).text( to );
		} );
	} );
        
        wp.customize( 'home_widget_content', function( value ) {
		value.bind( function( to ) {
			$( '.textwidget p' ).text( to );
		} );
	} );
        
        wp.customize( 'home_widget_content', function( value ) {
		value.bind( function( to ) {
			$( '.textwidget h3' ).text( to );
		} );
	} );
        
        wp.customize( 'home_widget_content', function( value ) {
		value.bind( function( to ) {
			$( '.textwidget p' ).text( to );
		} );
	} );
        
        wp.customize( 'home_widget_content', function( value ) {
		value.bind( function( to ) {
			$( '.textwidget h3' ).text( to );
		} );
	} );
        
        wp.customize( 'text_content_4', function( value ) {
		value.bind( function( to ) {
			$( '.textwidget p' ).text( to );
		} );
	} );