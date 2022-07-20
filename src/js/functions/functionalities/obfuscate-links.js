
// Obfuscate links



function obfuscateLinks() {


	// Init ==========

	const obfuscate = document.querySelectorAll( '.obfuscate' )


	// Functions ==========

	function b64_to_utf8( str ) {
		return unescape( decodeURIComponent( window.atob( str ) ) )
	}


	// Actions ==========

	if ( obfuscate ) {

		for ( i = 0; i < obfuscate.length; i++ ) {

			let current = obfuscate[i]

			current.addEventListener( 'click', function ( event ) {

				window.location.href = b64_to_utf8( current.getAttribute( 'data-obfuscate' ) )

			} )

		}

	}

}