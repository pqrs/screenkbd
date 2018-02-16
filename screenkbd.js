function press(key) {

	var obj = document.getElementById("postalcode-display");
	var list = obj.getElementsByClassName('button');
	
	for( f=0; f < list.length; f++ ) {

		if ( list[f].childNodes[0].nodeValue == '_') {

			list[f].childNodes[0].nodeValue = key;
		
			f=5;
		}
	}

}


function backspace() {

	var obj = document.getElementById("postalcode-display");
	var list = obj.getElementsByClassName('button');
	
	for( f=list.length-1; f>=0; f-- ) {

		if ( list[f].childNodes[0].nodeValue != '_') {
		
			list[f].childNodes[0].nodeValue = '_';
		
			if (f==1 && list[0].childNodes[0].nodeValue == '0' ) { 
		
				list[0].childNodes[0].nodeValue = '_';
		
			}
		
			f=0;
		
		}
	
	}

}


function reset() {

	var obj = document.getElementById("postalcode-display");
	var list = obj.getElementsByClassName('button');
	
	for( f=0; f < list.length; f++ ) {

		list[f].childNodes[0].nodeValue = '_';

	}

}

