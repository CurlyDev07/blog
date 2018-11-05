==========================================NOTES==========================================

1. Prevent to show the page without permission
	1.1-> on the controller create a 

		public function __construct(){
			$this->middleware('auth')->except(['methods name ex:index', 'methods name ex:create']);
		}

Note: all page in this controller access by the guess except index and create

=============================================================================

2. Controller multi guard access methods
	1.1-> on the controller create this method.
	1.2-> public function __construct(){
			$this->middleware('auth', ['only'=> ['method_name', 'method_name']])
		}

Note: only this page can't access by the unLogged in user

=============================================================================
3. To get the current route name 
	1.1-> request()->path()

Note: this will return the current route name
=============================================================================

4.Session
	1.1-> session::flash('key', 'value');
Note: this static method will make your session removable if the browser is refresh.
		***********************************************
	1.2 session('key', 'value')
Note: this plain session will remain and not removable even you refresh the browser.
=============================================================================
    
5. Seach engine
	1.1 get the cdn of Jquery UI click this link below
		* put this minified v of css to your header
		 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
		* put this minified v of js to your footer
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		* open the documentation of jquery ui auto complete
			* there's click the view <source> code and copy the script code start with a variable sign with a content of array
			* then add the search inpu id to the css selector of js to identify teh right input

	
