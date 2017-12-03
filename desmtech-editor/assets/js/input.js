(function($){

    var bootstrap_classes = ["active","alert","alert-danger","alert-dismissible","alert-heading","alert-info","alert-link","alert-success","alert-warning","align-baseline","align-bottom","align-content-around","align-content-between","align-content-center","align-content-end","align-content-lg-around","align-content-lg-between","align-content-lg-center","align-content-lg-end","align-content-lg-start","align-content-lg-stretch","align-content-md-around","align-content-md-between","align-content-md-center","align-content-md-end","align-content-md-start","align-content-md-stretch","align-content-sm-around","align-content-sm-between","align-content-sm-center","align-content-sm-end","align-content-sm-start","align-content-sm-stretch","align-content-start","align-content-stretch","align-content-xl-around","align-content-xl-between","align-content-xl-center","align-content-xl-end","align-content-xl-start","align-content-xl-stretch","align-items-baseline","align-items-center","align-items-end","align-items-lg-baseline","align-items-lg-center","align-items-lg-end","align-items-lg-start","align-items-lg-stretch","align-items-md-baseline","align-items-md-center","align-items-md-end","align-items-md-start","align-items-md-stretch","align-items-sm-baseline","align-items-sm-center","align-items-sm-end","align-items-sm-start","align-items-sm-stretch","align-items-start","align-items-stretch","align-items-xl-baseline","align-items-xl-center","align-items-xl-end","align-items-xl-start","align-items-xl-stretch","align-middle","align-self-auto","align-self-baseline","align-self-center","align-self-end","align-self-lg-auto","align-self-lg-baseline","align-self-lg-center","align-self-lg-end","align-self-lg-start","align-self-lg-stretch","align-self-md-auto","align-self-md-baseline","align-self-md-center","align-self-md-end","align-self-md-start","align-self-md-stretch","align-self-sm-auto","align-self-sm-baseline","align-self-sm-center","align-self-sm-end","align-self-sm-start","align-self-sm-stretch","align-self-start","align-self-stretch","align-self-xl-auto","align-self-xl-baseline","align-self-xl-center","align-self-xl-end","align-self-xl-start","align-self-xl-stretch","align-text-bottom","align-text-top","align-top","badge","badge-danger","badge-default","badge-info","badge-pill","badge-primary","badge-success","badge-warning","bg-danger","bg-faded","bg-info","bg-inverse","bg-primary","bg-success","bg-warning","blockquote","blockquote-footer","blockquote-reverse","border-0","border-bottom-0","border-left-0","border-right-0","border-top-0","breadcrumb","breadcrumb-item","bs-tether-element-attached-bottom","bs-tether-element-attached-left","bs-tether-element-attached-right","bs-tether-element-attached-top","btn","btn-block","btn-danger","btn-group","btn-group-lg","btn-group-sm","btn-group-vertical","btn-info","btn-lg","btn-link","btn-outline-danger","btn-outline-info","btn-outline-primary","btn-outline-secondary","btn-outline-success","btn-outline-warning","btn-primary","btn-secondary","btn-sm","btn-success","btn-toolbar","btn-warning","card","card-block","card-blockquote","card-columns","card-danger","card-deck","card-footer","card-group","card-header","card-header-pills","card-header-tabs","card-img","card-img-bottom","card-img-overlay","card-img-top","card-info","card-inverse","card-link","card-outline-danger","card-outline-info","card-outline-primary","card-outline-secondary","card-outline-success","card-outline-warning","card-primary","card-subtitle","card-success","card-text","card-title","card-warning","carousel","carousel-caption","carousel-control-next","carousel-control-next-icon","carousel-control-prev","carousel-control-prev-icon","carousel-indicators","carousel-inner","carousel-item","carousel-item-left","carousel-item-next","carousel-item-prev","carousel-item-right","clearfix","close","col","col-1","col-10","col-11","col-12","col-2","col-3","col-4","col-5","col-6","col-7","col-8","col-9","col-auto","col-form-label","col-form-label-lg","col-form-label-sm","col-form-legend","col-lg","col-lg-1","col-lg-10","col-lg-11","col-lg-12","col-lg-2","col-lg-3","col-lg-4","col-lg-5","col-lg-6","col-lg-7","col-lg-8","col-lg-9","col-lg-auto","col-md","col-md-1","col-md-10","col-md-11","col-md-12","col-md-2","col-md-3","col-md-4","col-md-5","col-md-6","col-md-7","col-md-8","col-md-9","col-md-auto","col-sm","col-sm-1","col-sm-10","col-sm-11","col-sm-12","col-sm-2","col-sm-3","col-sm-4","col-sm-5","col-sm-6","col-sm-7","col-sm-8","col-sm-9","col-sm-auto","col-xl","col-xl-1","col-xl-10","col-xl-11","col-xl-12","col-xl-2","col-xl-3","col-xl-4","col-xl-5","col-xl-6","col-xl-7","col-xl-8","col-xl-9","col-xl-auto","collapse","collapsing","container","container-fluid","custom-checkbox","custom-control","custom-control-description","custom-control-indicator","custom-control-input","custom-controls-stacked","custom-file","custom-file-control","custom-file-input","custom-radio","custom-select","custom-select-sm","d-block","d-flex","d-inline","d-inline-block","d-inline-flex","d-lg-block","d-lg-flex","d-lg-inline","d-lg-inline-block","d-lg-inline-flex","d-lg-none","d-lg-table","d-lg-table-cell","d-md-block","d-md-flex","d-md-inline","d-md-inline-block","d-md-inline-flex","d-md-none","d-md-table","d-md-table-cell","d-none","d-sm-block","d-sm-flex","d-sm-inline","d-sm-inline-block","d-sm-inline-flex","d-sm-none","d-sm-table","d-sm-table-cell","d-table","d-table-cell","d-xl-block","d-xl-flex","d-xl-inline","d-xl-inline-block","d-xl-inline-flex","d-xl-none","d-xl-table","d-xl-table-cell","disabled","display-1","display-2","display-3","display-4","dropdown","dropdown-backdrop","dropdown-divider","dropdown-header","dropdown-item","dropdown-menu","dropdown-menu-left","dropdown-menu-right","dropdown-toggle","dropdown-toggle-split","dropup","embed-responsive","embed-responsive-16by9","embed-responsive-1by1","embed-responsive-21by9","embed-responsive-4by3","embed-responsive-item","fade","figure","figure-caption","figure-img","fixed-bottom","fixed-top","flex-column","flex-column-reverse","flex-first","flex-last","flex-lg-column","flex-lg-column-reverse","flex-lg-first","flex-lg-last","flex-lg-nowrap","flex-lg-row","flex-lg-row-reverse","flex-lg-unordered","flex-lg-wrap","flex-lg-wrap-reverse","flex-md-column","flex-md-column-reverse","flex-md-first","flex-md-last","flex-md-nowrap","flex-md-row","flex-md-row-reverse","flex-md-unordered","flex-md-wrap","flex-md-wrap-reverse","flex-nowrap","flex-row","flex-row-reverse","flex-sm-column","flex-sm-column-reverse","flex-sm-first","flex-sm-last","flex-sm-nowrap","flex-sm-row","flex-sm-row-reverse","flex-sm-unordered","flex-sm-wrap","flex-sm-wrap-reverse","flex-unordered","flex-wrap","flex-wrap-reverse","flex-xl-column","flex-xl-column-reverse","flex-xl-first","flex-xl-last","flex-xl-nowrap","flex-xl-row","flex-xl-row-reverse","flex-xl-unordered","flex-xl-wrap","flex-xl-wrap-reverse","float-left","float-lg-left","float-lg-none","float-lg-right","float-md-left","float-md-none","float-md-right","float-none","float-right","float-sm-left","float-sm-none","float-sm-right","float-xl-left","float-xl-none","float-xl-right","focus","font-italic","font-weight-bold","font-weight-normal","form-check","form-check-inline","form-check-input","form-check-label","form-control","form-control-danger","form-control-feedback","form-control-file","form-control-label","form-control-lg","form-control-range","form-control-sm","form-control-static","form-control-success","form-control-warning","form-group","form-inline","form-text","h-100","h-25","h-50","h-75","h1","h2","h3","h4","h5","h6","has-danger","has-feedback","has-success","has-warning","hidden-lg-down","hidden-lg-up","hidden-md-down","hidden-md-up","hidden-print","hidden-sm-down","hidden-sm-up","hidden-xl-down","hidden-xl-up","hidden-xs-down","hidden-xs-up","img-fluid","img-thumbnail","initialism","input-group","input-group-addon","input-group-btn","input-group-lg","input-group-sm","invisible","jumbotron","jumbotron-fluid","jumbotron-hr","justify-content-around","justify-content-between","justify-content-center","justify-content-end","justify-content-lg-around","justify-content-lg-between","justify-content-lg-center","justify-content-lg-end","justify-content-lg-start","justify-content-md-around","justify-content-md-between","justify-content-md-center","justify-content-md-end","justify-content-md-start","justify-content-sm-around","justify-content-sm-between","justify-content-sm-center","justify-content-sm-end","justify-content-sm-start","justify-content-start","justify-content-xl-around","justify-content-xl-between","justify-content-xl-center","justify-content-xl-end","justify-content-xl-start","lead","list-group","list-group-flush","list-group-item","list-group-item-action","list-group-item-danger","list-group-item-heading","list-group-item-info","list-group-item-success","list-group-item-text","list-group-item-warning","list-inline","list-inline-item","list-unstyled","m-0","m-1","m-2","m-3","m-4","m-5","m-auto","m-lg-0","m-lg-1","m-lg-2","m-lg-3","m-lg-4","m-lg-5","m-lg-auto","m-md-0","m-md-1","m-md-2","m-md-3","m-md-4","m-md-5","m-md-auto","m-sm-0","m-sm-1","m-sm-2","m-sm-3","m-sm-4","m-sm-5","m-sm-auto","m-xl-0","m-xl-1","m-xl-2","m-xl-3","m-xl-4","m-xl-5","m-xl-auto","mark","mb-0","mb-1","mb-2","mb-3","mb-4","mb-5","mb-auto","mb-lg-0","mb-lg-1","mb-lg-2","mb-lg-3","mb-lg-4","mb-lg-5","mb-lg-auto","mb-md-0","mb-md-1","mb-md-2","mb-md-3","mb-md-4","mb-md-5","mb-md-auto","mb-sm-0","mb-sm-1","mb-sm-2","mb-sm-3","mb-sm-4","mb-sm-5","mb-sm-auto","mb-xl-0","mb-xl-1","mb-xl-2","mb-xl-3","mb-xl-4","mb-xl-5","mb-xl-auto","media","media-body","mh-100","ml-0","ml-1","ml-2","ml-3","ml-4","ml-5","ml-auto","ml-lg-0","ml-lg-1","ml-lg-2","ml-lg-3","ml-lg-4","ml-lg-5","ml-lg-auto","ml-md-0","ml-md-1","ml-md-2","ml-md-3","ml-md-4","ml-md-5","ml-md-auto","ml-sm-0","ml-sm-1","ml-sm-2","ml-sm-3","ml-sm-4","ml-sm-5","ml-sm-auto","ml-xl-0","ml-xl-1","ml-xl-2","ml-xl-3","ml-xl-4","ml-xl-5","ml-xl-auto","modal","modal-backdrop","modal-body","modal-content","modal-dialog","modal-footer","modal-header","modal-lg","modal-open","modal-scrollbar-measure","modal-sm","modal-title","mr-0","mr-1","mr-2","mr-3","mr-4","mr-5","mr-auto","mr-lg-0","mr-lg-1","mr-lg-2","mr-lg-3","mr-lg-4","mr-lg-5","mr-lg-auto","mr-md-0","mr-md-1","mr-md-2","mr-md-3","mr-md-4","mr-md-5","mr-md-auto","mr-sm-0","mr-sm-1","mr-sm-2","mr-sm-3","mr-sm-4","mr-sm-5","mr-sm-auto","mr-xl-0","mr-xl-1","mr-xl-2","mr-xl-3","mr-xl-4","mr-xl-5","mr-xl-auto","mt-0","mt-1","mt-2","mt-3","mt-4","mt-5","mt-auto","mt-lg-0","mt-lg-1","mt-lg-2","mt-lg-3","mt-lg-4","mt-lg-5","mt-lg-auto","mt-md-0","mt-md-1","mt-md-2","mt-md-3","mt-md-4","mt-md-5","mt-md-auto","mt-sm-0","mt-sm-1","mt-sm-2","mt-sm-3","mt-sm-4","mt-sm-5","mt-sm-auto","mt-xl-0","mt-xl-1","mt-xl-2","mt-xl-3","mt-xl-4","mt-xl-5","mt-xl-auto","mw-100","mx-0","mx-1","mx-2","mx-3","mx-4","mx-5","mx-auto","mx-lg-0","mx-lg-1","mx-lg-2","mx-lg-3","mx-lg-4","mx-lg-5","mx-lg-auto","mx-md-0","mx-md-1","mx-md-2","mx-md-3","mx-md-4","mx-md-5","mx-md-auto","mx-sm-0","mx-sm-1","mx-sm-2","mx-sm-3","mx-sm-4","mx-sm-5","mx-sm-auto","mx-xl-0","mx-xl-1","mx-xl-2","mx-xl-3","mx-xl-4","mx-xl-5","mx-xl-auto","my-0","my-1","my-2","my-3","my-4","my-5","my-auto","my-lg-0","my-lg-1","my-lg-2","my-lg-3","my-lg-4","my-lg-5","my-lg-auto","my-md-0","my-md-1","my-md-2","my-md-3","my-md-4","my-md-5","my-md-auto","my-sm-0","my-sm-1","my-sm-2","my-sm-3","my-sm-4","my-sm-5","my-sm-auto","my-xl-0","my-xl-1","my-xl-2","my-xl-3","my-xl-4","my-xl-5","my-xl-auto","nav","nav-fill","nav-item","nav-justified","nav-link","nav-pills","nav-tabs","navbar","navbar-brand","navbar-collapse","navbar-inverse","navbar-light","navbar-nav","navbar-text","navbar-toggleable","navbar-toggleable-lg","navbar-toggleable-md","navbar-toggleable-sm","navbar-toggleable-xl","navbar-toggler","navbar-toggler-icon","navbar-toggler-left","navbar-toggler-right","no-gutters","offset-1","offset-10","offset-11","offset-2","offset-3","offset-4","offset-5","offset-6","offset-7","offset-8","offset-9","offset-lg-0","offset-lg-1","offset-lg-10","offset-lg-11","offset-lg-2","offset-lg-3","offset-lg-4","offset-lg-5","offset-lg-6","offset-lg-7","offset-lg-8","offset-lg-9","offset-md-0","offset-md-1","offset-md-10","offset-md-11","offset-md-2","offset-md-3","offset-md-4","offset-md-5","offset-md-6","offset-md-7","offset-md-8","offset-md-9","offset-sm-0","offset-sm-1","offset-sm-10","offset-sm-11","offset-sm-2","offset-sm-3","offset-sm-4","offset-sm-5","offset-sm-6","offset-sm-7","offset-sm-8","offset-sm-9","offset-xl-0","offset-xl-1","offset-xl-10","offset-xl-11","offset-xl-2","offset-xl-3","offset-xl-4","offset-xl-5","offset-xl-6","offset-xl-7","offset-xl-8","offset-xl-9","open","p-0","p-1","p-2","p-3","p-4","p-5","p-lg-0","p-lg-1","p-lg-2","p-lg-3","p-lg-4","p-lg-5","p-md-0","p-md-1","p-md-2","p-md-3","p-md-4","p-md-5","p-sm-0","p-sm-1","p-sm-2","p-sm-3","p-sm-4","p-sm-5","p-xl-0","p-xl-1","p-xl-2","p-xl-3","p-xl-4","p-xl-5","page-item","page-link","pagination","pagination-lg","pagination-sm","pb-0","pb-1","pb-2","pb-3","pb-4","pb-5","pb-lg-0","pb-lg-1","pb-lg-2","pb-lg-3","pb-lg-4","pb-lg-5","pb-md-0","pb-md-1","pb-md-2","pb-md-3","pb-md-4","pb-md-5","pb-sm-0","pb-sm-1","pb-sm-2","pb-sm-3","pb-sm-4","pb-sm-5","pb-xl-0","pb-xl-1","pb-xl-2","pb-xl-3","pb-xl-4","pb-xl-5","pl-0","pl-1","pl-2","pl-3","pl-4","pl-5","pl-lg-0","pl-lg-1","pl-lg-2","pl-lg-3","pl-lg-4","pl-lg-5","pl-md-0","pl-md-1","pl-md-2","pl-md-3","pl-md-4","pl-md-5","pl-sm-0","pl-sm-1","pl-sm-2","pl-sm-3","pl-sm-4","pl-sm-5","pl-xl-0","pl-xl-1","pl-xl-2","pl-xl-3","pl-xl-4","pl-xl-5","popover","popover-bottom","popover-content","popover-left","popover-right","popover-title","popover-top","pr-0","pr-1","pr-2","pr-3","pr-4","pr-5","pr-lg-0","pr-lg-1","pr-lg-2","pr-lg-3","pr-lg-4","pr-lg-5","pr-md-0","pr-md-1","pr-md-2","pr-md-3","pr-md-4","pr-md-5","pr-sm-0","pr-sm-1","pr-sm-2","pr-sm-3","pr-sm-4","pr-sm-5","pr-xl-0","pr-xl-1","pr-xl-2","pr-xl-3","pr-xl-4","pr-xl-5","pre-scrollable","progress","progress-bar","progress-bar-animated","progress-bar-striped","pt-0","pt-1","pt-2","pt-3","pt-4","pt-5","pt-lg-0","pt-lg-1","pt-lg-2","pt-lg-3","pt-lg-4","pt-lg-5","pt-md-0","pt-md-1","pt-md-2","pt-md-3","pt-md-4","pt-md-5","pt-sm-0","pt-sm-1","pt-sm-2","pt-sm-3","pt-sm-4","pt-sm-5","pt-xl-0","pt-xl-1","pt-xl-2","pt-xl-3","pt-xl-4","pt-xl-5","pull-0","pull-1","pull-10","pull-11","pull-12","pull-2","pull-3","pull-4","pull-5","pull-6","pull-7","pull-8","pull-9","pull-lg-0","pull-lg-1","pull-lg-10","pull-lg-11","pull-lg-12","pull-lg-2","pull-lg-3","pull-lg-4","pull-lg-5","pull-lg-6","pull-lg-7","pull-lg-8","pull-lg-9","pull-md-0","pull-md-1","pull-md-10","pull-md-11","pull-md-12","pull-md-2","pull-md-3","pull-md-4","pull-md-5","pull-md-6","pull-md-7","pull-md-8","pull-md-9","pull-sm-0","pull-sm-1","pull-sm-10","pull-sm-11","pull-sm-12","pull-sm-2","pull-sm-3","pull-sm-4","pull-sm-5","pull-sm-6","pull-sm-7","pull-sm-8","pull-sm-9","pull-xl-0","pull-xl-1","pull-xl-10","pull-xl-11","pull-xl-12","pull-xl-2","pull-xl-3","pull-xl-4","pull-xl-5","pull-xl-6","pull-xl-7","pull-xl-8","pull-xl-9","push-0","push-1","push-10","push-11","push-12","push-2","push-3","push-4","push-5","push-6","push-7","push-8","push-9","push-lg-0","push-lg-1","push-lg-10","push-lg-11","push-lg-12","push-lg-2","push-lg-3","push-lg-4","push-lg-5","push-lg-6","push-lg-7","push-lg-8","push-lg-9","push-md-0","push-md-1","push-md-10","push-md-11","push-md-12","push-md-2","push-md-3","push-md-4","push-md-5","push-md-6","push-md-7","push-md-8","push-md-9","push-sm-0","push-sm-1","push-sm-10","push-sm-11","push-sm-12","push-sm-2","push-sm-3","push-sm-4","push-sm-5","push-sm-6","push-sm-7","push-sm-8","push-sm-9","push-xl-0","push-xl-1","push-xl-10","push-xl-11","push-xl-12","push-xl-2","push-xl-3","push-xl-4","push-xl-5","push-xl-6","push-xl-7","push-xl-8","push-xl-9","px-0","px-1","px-2","px-3","px-4","px-5","px-lg-0","px-lg-1","px-lg-2","px-lg-3","px-lg-4","px-lg-5","px-md-0","px-md-1","px-md-2","px-md-3","px-md-4","px-md-5","px-sm-0","px-sm-1","px-sm-2","px-sm-3","px-sm-4","px-sm-5","px-xl-0","px-xl-1","px-xl-2","px-xl-3","px-xl-4","px-xl-5","py-0","py-1","py-2","py-3","py-4","py-5","py-lg-0","py-lg-1","py-lg-2","py-lg-3","py-lg-4","py-lg-5","py-md-0","py-md-1","py-md-2","py-md-3","py-md-4","py-md-5","py-sm-0","py-sm-1","py-sm-2","py-sm-3","py-sm-4","py-sm-5","py-xl-0","py-xl-1","py-xl-2","py-xl-3","py-xl-4","py-xl-5","rounded","rounded-0","rounded-bottom","rounded-circle","rounded-left","rounded-right","rounded-top","row","show","small","sr-only","sr-only-focusable","sticky-top","tab-content","tab-pane","table","table-active","table-bordered","table-danger","table-hover","table-info","table-inverse","table-responsive","table-sm","table-striped","table-success","table-warning","text-capitalize","text-center","text-danger","text-gray-dark","text-hide","text-info","text-justify","text-left","text-lg-center","text-lg-left","text-lg-right","text-lowercase","text-md-center","text-md-left","text-md-right","text-muted","text-nowrap","text-primary","text-right","text-sm-center","text-sm-left","text-sm-right","text-success","text-truncate","text-uppercase","text-warning","text-white","text-xl-center","text-xl-left","text-xl-right","thead-default","thead-inverse","tooltip","tooltip-bottom","tooltip-inner","tooltip-left","tooltip-right","tooltip-top","visible-print-block","visible-print-inline","visible-print-inline-block","w-100","w-25","w-50","w-75"];
	
	function initialize_field( $el ) {

        var source = $el.find('.desm-source').data('source');
        var window = $el.find('.desm-window').data('window');

        var soureEl = $('#'+source);
        var editor = ace.edit(window);
        soureEl.hide();

        var langTools = ace.require("ace/ext/language_tools");

        editor.setTheme("ace/theme/idle_fingers");

        editor.getSession().setMode('ace/mode/php');
        editor.setOption("showPrintMargin", false);
        editor.setOption("fontSize", '14px');
        editor.setOption("maxLines", 500);
        editor.setOption("minLines", 1);
        editor.setOption("displayIndentGuides", true);
        editor.setOption("fontFamily", "Consolas");
        editor.setOption("showInvisibles", true);
        editor.$blockScrolling = Infinity;
        editor.renderer.setScrollMargin(10, 10, 10, 10);

        editor.getSession().setValue(soureEl.val());

        editor.getSession().on('change', function(){
            soureEl.val(editor.getSession().getValue());
        });

        editor.getSession().on("changeAnnotation", function () {
            var annotations = editor.getSession().getAnnotations() || [], i = len = annotations.length;
            while (i--) {
                if (/doctype first\. Expected/.test(annotations[i].text)) {
                    annotations.splice(i, 1);
                }
                else if (/Unexpected End of file\. Expected/.test(annotations[i].text)) {
                    annotations.splice(i, 1);
                }
            }
            if (len > annotations.length) {
                editor.getSession().setAnnotations(annotations);
            }
        });

        var bootstrapCompleter = {
            getCompletions: function(editor, session, pos, prefix, callback) {
                if (prefix.length === 0) { callback(null, []); return }
                callback(null, bootstrap_classes.map(function(ea) {
                    return {name: ea, value: ea, meta: "bootstrap"}
                }));
            }
        };

        editor.setOptions({
            enableBasicAutocompletion: true,
            enableLiveAutocompletion: true
        });

        langTools.addCompleter(bootstrapCompleter);

        /*$(classname).change(function() {
            var mode = getMode(classname.val());
            editor.getSession().setMode(mode);
        });*/
		
	}
	
	
	if( typeof acf.add_action !== 'undefined' ) {
	
		/*
		*  ready append (ACF5)
		*
		*  These are 2 events which are fired during the page load
		*  ready = on page load similar to $(document).ready()
		*  append = on new DOM elements appended via repeater field
		*
		*  @type	event
		*  @date	20/07/13
		*
		*  @param	$el (jQuery selection) the jQuery element which contains the ACF fields
		*  @return	n/a
		*/
		
		acf.add_action('ready append', function( $el ){
			
			// search $el for fields of type 'desmtech_editor'
			acf.get_fields({ type : 'desmtech_editor'}, $el).each(function(){
				
				initialize_field( $(this) );
				
			});
			
		});
		
		
	} else {
		
		
		/*
		*  acf/setup_fields (ACF4)
		*
		*  This event is triggered when ACF adds any new elements to the DOM. 
		*
		*  @type	function
		*  @since	1.0.0
		*  @date	01/01/12
		*
		*  @param	event		e: an event object. This can be ignored
		*  @param	Element		postbox: An element which contains the new HTML
		*
		*  @return	n/a
		*/
		
		$(document).on('acf/setup_fields', function(e, postbox){
			
			$(postbox).find('.field[data-field_type="desmtech_editor"]').each(function(){
				
				//initialize_field( $(this) );
				
			});
		
		});
	
	
	}


})(jQuery);
