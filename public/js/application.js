/* ========================================================
*
* Indeant.com - admin page
*
* ========================================================
*
* File: application.js;
* Description: General plugins and layout settings.
* Version: 1.0
*
* ======================================================== */
/*invoice angular scripts*/
var app = angular.module('invoice', []);
app.controller('bill', ['$scope', function($scope){
	$scope.tax = 0;
	$scope.subTotal = 0;
	$scope.total = 0;
	$scope.products = [];
	$scope.add = function(){
		var q = $scope.quantity;
		var d = $scope.description;
		var r = $scope.rate;
		$scope.products.push(
			{description: d, quantity: q, rate: r}
		);
		$scope.getTotal();
		$scope.description = '';
		$scope.quantity = '';
		$scope.rate = '';
	}
	$scope.remove = function(index){
		$scope.products.splice(index, 1);
		$scope.getTotal();
	}
	$scope.getTotal = function(){
		$scope.subTotal = 0;
		for (var i = 0; i < $scope.products.length; i++) {
			$scope.subTotal = $scope.subTotal + ($scope.products[i].rate * $scope.products[i].quantity);	
		};
		$scope.total = $scope.subTotal + $scope.subTotal * $scope.tax/100;	
	}
	$scope.$watch('tax', function(){
		$scope.getTotal();
	});
}]);
/*invoice angular scripts*/
	 var products = angular.module('products', []);

	 products.config(['$interpolateProvider', function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
      }]); 
	 products.controller('pro', function($scope, $http){
	 	$('#subcategory').attr('disabled', 'disabled');
	 	$('#category').change(function(){
		 	$('#subcategory').attr('disabled', 'disabled');
	 		var id = $(this).val();
	 		$http.get('/subcat/'+id)
	 		.success(function(data){
	 			$('#subcategory').removeAttr('disabled');
	 			$scope.subcategories = data;
	 		})
	 		.error(function(){
	 			alert('unable to fetch');
	 		})
	 	});
	 });
$(function() {


/* # Data tables*
================================================== */


	//===== Default datatable =====//

	oTable = $('.datatable table').dataTable({
		"bJQueryUI": false,
		"bAutoWidth": false,
		"sPaginationType": "full_numbers",
		"sDom": '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		"oLanguage": {
			"sSearch": "<span>Filter:</span> _INPUT_",
			"sLengthMenu": "<span>Show entries:</span> _MENU_",
			"oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" }
		}
    });


	//===== Table with selectable rows =====//

	oTable = $('.datatable-selectable table').dataTable({
		"bJQueryUI": false,
		"bAutoWidth": false,
		"sPaginationType": "full_numbers",
		"sDom": '<"datatable-header"Tfl><"datatable-scroll"t><"datatable-footer"ip>',
		"oLanguage": {
			"sSearch": "<span>Filter:</span> _INPUT_",
			"sLengthMenu": "<span>Show:</span> _MENU_",
			"oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" }
		},
		"oTableTools": {
			"sRowSelect": "multi",
			"aButtons": 
			[
				{
					"sExtends": "collection",
					"sButtonText": "Tools <span class='caret'></span>",
					"sButtonClass": "btn btn-primary",
					"aButtons":    [ "select_all", "select_none" ]
				}
			]
		}
    });


	//===== Table with media elements =====//

	oTable = $('.datatable-media table').dataTable({
		"bJQueryUI": false,
		"bAutoWidth": false,
		"sPaginationType": "full_numbers",
		"sDom": '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		"oLanguage": {
			"sSearch": "<span>Filter:</span> _INPUT_",
			"sLengthMenu": "<span>Show:</span> _MENU_",
			"oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" }
		},
		"aoColumnDefs": [
	      { "bSortable": false, "aTargets": [ 0, 4 ] }
	    ]
    });


	//===== Table with pager =====//

	oTable = $('.datatable-pager table').dataTable({
		"bJQueryUI": false,
		"bAutoWidth": false,
		"sPaginationType": "two_button",
		"sDom": '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		"oLanguage": {
			"sSearch": "<span>Filter:</span> _INPUT_",
			"sLengthMenu": "<span>Show entries:</span> _MENU_",
			"oPaginate": { "sNext": "Next →", "sPrevious": "← Previous" }
		}
    });


	//===== Table with tools =====//

	oTable = $('.datatable-tools table').dataTable({
		"bJQueryUI": false,
		"bAutoWidth": false,
		"sPaginationType": "full_numbers",
		"sDom": '<"datatable-header"Tfl><"datatable-scroll"t><"datatable-footer"ip>',
		"oLanguage": {
			"sSearch": "<span>Filter:</span> _INPUT_",
			"sLengthMenu": "<span>Show:</span> _MENU_",
			"oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" }
		},
		"oTableTools": {
			"sRowSelect": "single",
			"sSwfPath": "media/swf/copy_csv_xls_pdf.swf",
			"aButtons": [
				{
					"sExtends":    "copy",
					"sButtonText": "Copy",
					"sButtonClass": "btn"
				},
				{
					"sExtends":    "print",
					"sButtonText": "Print",
					"sButtonClass": "btn"
				},
				{
					"sExtends":    "collection",
					"sButtonText": "Save <span class='caret'></span>",
					"sButtonClass": "btn btn-primary",
					"aButtons":    [ "csv", "xls", "pdf" ]
				}
			]
		}
    });


	//===== Table with custom sorting columns =====//

	oTable = $('.datatable-custom-sort table').dataTable({
		"bJQueryUI": false,
		"bAutoWidth": false,
		"sPaginationType": "full_numbers",
		"sDom": '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		"oLanguage": {
			"sSearch": "<span>Filter:</span> _INPUT_",
			"sLengthMenu": "<span>Show:</span> _MENU_",
			"oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" }
		},
		"aoColumnDefs": [
	      { "bSortable": false, "aTargets": [ 0, 1 ] }
	    ]
    });


	//===== Table with invoices =====//

	oTable = $('.datatable-invoices table').dataTable({
		"bJQueryUI": false,
		"bAutoWidth": false,
		"sPaginationType": "full_numbers",
		"sDom": '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		"oLanguage": {
			"sSearch": "<span>Filter:</span> _INPUT_",
			"sLengthMenu": "<span>Show:</span> _MENU_",
			"oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" }
		},
		"aoColumnDefs": [
	      { "bSortable": false, "aTargets": [ 1, 6 ] }
	    ],
	    "aaSorting": [[0,'desc']]    
	});


	//===== Table with tasks =====//

	oTable = $('.datatable-tasks table').dataTable({
		"aaSorting": [],
		"bJQueryUI": false,
		"bAutoWidth": false,
		"sPaginationType": "full_numbers",
		"sDom": '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		"oLanguage": {
			"sSearch": "<span>Filter tasks:</span> _INPUT_",
			"sLengthMenu": "<span>Show tasks:</span> _MENU_",
			"oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" }
		},
		"aoColumnDefs": [
	      { "bSortable": false, "aTargets": [ 5 ] }
	    ]
    });


	//===== Datatable with tfoot column filters =====//

	var asInitVals = new Array();
	var oTable = $('.datatable-add-row table').dataTable({
		"bJQueryUI": false,
		"bAutoWidth": false,
		"sPaginationType": "full_numbers",
		"sDom": '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		"oLanguage": {
			"sSearch": "<span>Filter all:</span> _INPUT_",
			"sLengthMenu": "<span>Show entries:</span> _MENU_",
			"oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" }
		}
    });
     
    $(".dataTables_wrapper tfoot input").keyup( function () {
        oTable.fnFilter( this.value, $(".dataTables_wrapper tfoot input").index(this) );
    });
     
     
    //===== Adding placeholder to Datatable filter input field =====//

	$('.dataTables_filter input[type=text]').attr('placeholder','Type to filter...');





/* # Select2 dropdowns 
================================================== */

	
	//===== Datatable select =====//

	$(".dataTables_length select").select2({
		minimumResultsForSearch: "-1"
	});


	//===== Default select =====//

	$(".select").select2({
		minimumResultsForSearch: "-1",
		width: 200
	});


	//===== Liquid select =====//

	$(".select-liquid").select2({
		minimumResultsForSearch: "-1",
		width: "off"
	});


	//===== Full width select =====//

	$(".select-full").select2({
		minimumResultsForSearch: "-1",
		width: "100%"
	});


	//===== Select with filter input =====//

	$(".select-search").select2({
		width: 200
	});


	//===== Multiple select =====//

	$(".select-multiple").select2({
		width: "100%"
	});

	
	//===== Loading data select =====//

	$("#loading-data").select2({
		placeholder: "Enter at least 1 character",
        allowClear: true,
        minimumInputLength: 1,
        query: function (query) {
            var data = {results: []}, i, j, s;
            for (i = 1; i < 5; i++) {
                s = "";
                for (j = 0; j < i; j++) {s = s + query.term;}
                data.results.push({id: query.term + i, text: s});
            }
            query.callback(data);
        }
    });		


	//===== Select with maximum =====//

	$(".maximum-select").select2({ 
		maximumSelectionSize: 3, 
		width: "100%" 
	});		


	//===== Allow clear results select =====//

	$(".clear-results").select2({
	    placeholder: "Select a State",
	    allowClear: true,
	    width: 200
	});


	//===== Select with minimum =====//

	$(".minimum-select").select2({
        minimumInputLength: 2,
        width: 200
    });


	//===== Multiple select with minimum =====//

	$(".minimum-multiple-select").select2({
        minimumInputLength: 2,
        width: "100%" 
    });

	
	//===== Disabled select =====//

	$(".select-disabled").select2(
        "enable", false
    );





/* # Form Validation
================================================== */

	$(".validate").validate({
		errorPlacement: function(error, element) {
			if (element.parent().parent().attr("class") == "checker" || element.parent().parent().attr("class") == "choice" ) {
		      error.appendTo( element.parent().parent().parent().parent().parent() );
		    } 
			else if (element.parent().parent().attr("class") == "checkbox" || element.parent().parent().attr("class") == "radio" ) {
		      error.appendTo( element.parent().parent().parent() );
		    } 
		    else {
		      error.insertAfter(	element);
		    }
		},
		rules: {
			minimum_characters: {
				required: true,
				minlength: 3
			},
			maximum_characters: {
				required: true,
				maxlength: 6
			},
			minimum_number: {
				required: true,
				min: 3
			},
			maximum_number: {
				required: true,
				max: 6
			},
			range: {
				required: true,
				range: [6, 16]
			},
			email_field: {
				required: true,
				email: true
			},
			url_field: {
				required: true,
				url: true
			},
			date_field: {
				required: true,
				date: true
			},
			digits_only: {
				required: true,
				digits: true
			},
			enter_password: {
				required: true,
				minlength: 5
			},
			repeat_password: {
				required: true,
				minlength: 5,
				equalTo: "#enter_password"
			},
			custom_message: "required",
			group_styled: {
				required: true,
				minlength: 2
			},
			group_unstyled: {
				required: true,
				minlength: 2
			},
			agree: "required"
		},
		messages: {
			custom_message: {
				required: "Bazinga! This message is editable",
			},
			agree: "Please accept our policy"
		},
	    success: function(label) {
	    	label.text('Success!').addClass('valid');
	    }
	});




/* # Bootstrap Multiselects
================================================== */

	
	//===== Default multiselect =====//

	$('.multi-select').multiselect({
		buttonClass: 'btn btn-default',
        onChange:function(element, checked){
            $.uniform.update();
        }
	});


	//===== Multiselect with colored button =====//

	$('.multi-select-color').multiselect({
		buttonClass: 'btn btn-info',
        onChange:function(element, checked){
            $.uniform.update();
        }
	});


	//===== Multiselect with "Select All" option =====//

	$('.multi-select-all').multiselect({
		buttonClass: 'btn btn-default',
		includeSelectAllOption: true,
        onChange:function(element, checked){
            $.uniform.update();
        }
	});


	//===== onChange function =====//

	$('.multi-select-onchange').multiselect({
		buttonClass: 'btn btn-default',
        onChange:function(element, checked){
        	$.uniform.update();
			$.jGrowl('Change event invoked!', { header: 'Update', position: 'center', life: 1500 });
        }
	});


	//===== Right aligned multiselect dropdown =====//

	$('.multi-select-right').multiselect({
		buttonClass: 'btn btn-default',
		dropRight: true,
        onChange:function(element, checked){
            $.uniform.update();
        }
	});


	//===== Search field select =====//

	$('.multi-select-search').multiselect({
		buttonClass: 'btn btn-link btn-lg btn-icon',
		dropRight: true,
		buttonText: function(options) {
	        if (options.length == 0) {
	          return '<b class="caret"></b>';
	        }
	        else {
	          return ' <b class="caret"></b>';
	        }
		},
        onChange:function(element, checked){
        	$.uniform.update();
        }
	});





/* # Bootstrap Plugins
================================================== */

	
	//===== Tooltip =====//

	$('.tip').tooltip();


	//===== Popover =====//

	$("[data-toggle=popover]").popover().click(function(e) {
		e.preventDefault()
	});


	//===== Loading button =====//

	$('.btn-loading').click(function () {
		var btn = $(this)
		btn.button('loading')
		setTimeout(function () {
			btn.button('reset')
		}, 3000)
	});


	//===== Add fadeIn animation to dropdown =====//

	$('.dropdown, .btn-group').on('show.bs.dropdown', function(e){
		$(this).find('.dropdown-menu').first().stop(true, true).fadeIn(100);
	});


	//===== Add fadeOut animation to dropdown =====//

	$('.dropdown, .btn-group').on('hide.bs.dropdown', function(e){
		$(this).find('.dropdown-menu').first().stop(true, true).fadeOut(100);
	});


	//===== Prevent dropdown from closing on click =====//

	$('.popup').click(function (e) {
		e.stopPropagation();
	});





/* # Form Related Plugins
================================================== */


	//===== Pluploader (multiple file uploader) =====//
			
	$(".multiple-uploader").pluploadQueue({
		runtimes : 'html5, html4',
		url : '/products/images',
		chunk_size : '1mb',
		unique_names : true,
		filters : {
			max_file_size : '10mb',
			mime_types: [
				{title : "Image files", extensions : "jpg,gif,png"},
				{title : "Zip files", extensions : "zip"}
			]
		},
		multipart: true,
		multipart_params : {
			product_id: $('#product_id').val(),
		},
		init: {
			FilesAdded: function (up, files) {},
            UploadComplete: function (up, files) {
                $.post('/products/create', 
				{
					title: $('input[name="title"]').val(),
					category_id: $('select[name="category_id"]').val(),
					subcategory_id: $('select[name="subcategory_id"]').val(),
					description: $('#description').val(),
					price: $('input[name="price"]').val(),
					weight: $('input[name="weight"]').val(),
					product_id: $('#product_id').val(),
					model: $('input[name="model"]').val(),
					brand: $('input[name="brand"]').val(),
					moredescription: $('#moredescription').val(),
					details: $('#detail').val(),
				}, 
				function(data, textStatus, xhr) {
					console.log(data);
					window.location.href = "#";
					$('#success').fadeIn('1000');
				});
            }
        },
	});

	//===== WYSIWYG editor =====//

	$('.editor').wysihtml5({
	    stylesheets: "css/wysihtml5/wysiwyg-color.css"
	});


	//===== Elastic textarea =====//
	
	$('.elastic').autosize();

	
	//===== Dual select boxes =====//
	
	$.configureBoxes();


	//===== Input limiter =====//
	
	$('.limited').inputlimiter({
		limit: 100,
		boxId: 'limit-text',
		boxAttach: false
	});


	//===== Tags Input =====//	
		
	$('.tags').tagsInput({width:'100%'});
	$('.tags-autocomplete').tagsInput({
		width:'100%',
		autocomplete_url:'tags_autocomplete.html'
	});


	//===== Form elements styling =====//
	
	$(".styled, .multiselect-container input").uniform({ radioClass: 'choice', selectAutoWidth: false });




/* # Interface Related Plugins
================================================== */


	//===== Sparkline charts =====//
	
	$('.bar-danger').sparkline(
		'html', {type: 'bar', barColor: '#D65C4F', height: '35px', barWidth: "5px", barSpacing: "2px", zeroAxis: "false"}
	);
	$('.bar-success').sparkline(
		'html', {type: 'bar', barColor: '#65B688', height: '35px', barWidth: "5px", barSpacing: "2px", zeroAxis: "false"}
	);

	$('.bar-primary').sparkline(
		'html', {type: 'bar', barColor: '#32434D', height: '35px', barWidth: "5px", barSpacing: "2px", zeroAxis: "false"}
	);
	$('.bar-warning').sparkline(
		'html', {type: 'bar', barColor: '#EE8366', height: '35px', barWidth: "5px", barSpacing: "2px", zeroAxis: "false"}
	);
	$('.bar-info').sparkline(
		'html', {type: 'bar', barColor: '#3CA2BB', height: '35px', barWidth: "5px", barSpacing: "2px", zeroAxis: "false"}
	);
	$('.bar-default').sparkline(
		'html', {type: 'bar', barColor: '#ffffff', height: '35px', barWidth: "5px", barSpacing: "2px", zeroAxis: "false"}
	);

	/* Activate hidden Sparkline on tab show */
	$('a[data-toggle="tab"]').on('shown.bs.tab', function () {
		$.sparkline_display_visible();
	});

	/* Activate hidden Sparkline */
	$('.collapse').on('shown.bs.collapse', function () {
	  $.sparkline_display_visible();
	});


	//===== Fancy box (lightbox plugin) =====//

	$(".lightbox").fancybox({
		padding: 1
	});


	//===== DateRangePicker plugin =====// 

	$('#reportrange').daterangepicker(
	{
		startDate: moment().subtract('days', 29),
		endDate: moment(),
		minDate: '01/01/2012',
		maxDate: '12/31/2014',
		dateLimit: { days: 60 },
		ranges: {
		'Today': [moment(), moment()],
		'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
		'Last 7 Days': [moment().subtract('days', 6), moment()],
		'This Month': [moment().startOf('month'), moment().endOf('month')],
		'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
	},
	opens: 'left',
	buttonClasses: ['btn'],
	applyClass: 'btn-small btn-info btn-block',
	cancelClass: 'btn-small btn-default btn-block',
	format: 'MM/DD/YYYY',
	separator: ' to ',
	locale: {
		applyLabel: 'Submit',
		fromLabel: 'From',
		toLabel: 'To',
		customRangeLabel: 'Custom Range',
		daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
		monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
		firstDay: 1
		}
	},
	function(start, end) {
		$.jGrowl('A date range was changed', { header: 'Update', position: 'center', life: 1500 });
		$('#reportrange .date-range').html(start.format('<i>D</i> <b><i>MMM</i> <i>YYYY</i></b>') + '<em> - </em>' + end.format('<i>D</i> <b><i>MMM</i> <i>YYYY</i></b>'));
	}
	);
	
	/* Custom date display layout */
	$('#reportrange .date-range').html(moment().subtract('days', 29).format('<i>D</i> <b><i>MMM</i> <i>YYYY</i></b>') + '<em> - </em>' + moment().format('<i>D</i> <b><i>MMM</i> <i>YYYY</i></b>'));
	$('#reportrange').on('show', function(ev, picker) {
	  $('.range').addClass('range-shown');
	});

	$('#reportrange').on('hide', function(ev, picker) {
	  $('.range').removeClass('range-shown');
	});


	//===== Bootstrap switches =====// 

	$('.switch').bootstrapSwitch();


	//===== Fullcalendar =====//

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();
	var calendar = $('.fullcalendar').fullCalendar({
		header: {
			left: 'prev,next,today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		selectable: true,
		selectHelper: true,
		select: function(start, end, allDay) {
			var title = prompt('Event Title:');
			if (title) {
				calendar.fullCalendar('renderEvent',
					{
						title: title,
						start: start,
						end: end,
						allDay: allDay
					},
					true // make the event "stick"
				);
			}
			calendar.fullCalendar('unselect');
		},
		editable: true,
		events: [
			{
				title: 'All Day Event',
				start: new Date(y, m, 1)
			},
			{
				title: 'Long Event',
				start: new Date(y, m, d-5),
				end: new Date(y, m, d-2)
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: new Date(y, m, d-3, 16, 0),
				allDay: false
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: new Date(y, m, d+4, 16, 0),
				allDay: false
			},
			{
				title: 'Meeting',
				start: new Date(y, m, d, 10, 30),
				allDay: false
			},
			{
				title: 'Lunch',
				start: new Date(y, m, d, 12, 0),
				end: new Date(y, m, d, 14, 0),
				allDay: false
			},
			{
				title: 'Birthday Party',
				start: new Date(y, m, d+1, 19, 0),
				end: new Date(y, m, d+1, 22, 30),
				allDay: false
			}
		]
	});

	/* Render hidden calendar on tab show */
	$('a[data-toggle="tab"]').on('shown.bs.tab', function () {
		$('.fullcalendar').fullCalendar('render');
	});


	//===== Code prettifier =====//

    window.prettyPrint && prettyPrint();


	//===== Time pickers =====//

	$('#defaultValueExample, #time').timepicker({ 'scrollDefaultNow': true });
	
	$('#durationExample').timepicker({
		'minTime': '2:00pm',
		'maxTime': '11:30pm',
		'showDuration': true
	});
	
	$('#onselectExample').timepicker();
	$('#onselectExample').on('changeTime', function() {
		$('#onselectTarget').text($(this).val());
	});
	
	$('#timeformatExample1, #timeformatExample3').timepicker({ 'timeFormat': 'H:i:s' });
	$('#timeformatExample2, #timeformatExample4').timepicker({ 'timeFormat': 'h:i A' });


	//===== Color picker =====//

	$('.color-picker').colorpicker();

	$('.color-picker-hex').colorpicker({
		format: 'hex'
	});
	
	/* Change navbar background color */
	var topStyle = $('.navbar-inverse')[0].style;
	$('.change-navbar-color').colorpicker().on('changeColor', function(ev){
		topStyle.background = ev.color.toHex();
	});


	//===== jGrowl notifications defaults =====//

	$.jGrowl.defaults.closer = false;
	$.jGrowl.defaults.easing = 'easeInOutCirc';


	//===== Collapsible navigation =====//
	
	$('.sidebar-wide li:not(.disabled) .expand, .sidebar-narrow .navigation > li ul .expand').collapsible({
		defaultOpen: 'second-level,third-level',
		cssOpen: 'level-opened',
		cssClose: 'level-closed',
		speed: 150
	});





/* # Default Layout Options
================================================== */


	//===== Panel Options (collapsing, closing) =====//

	/* Collapsing */
	$('[data-panel=collapse]').click(function(e){
	e.preventDefault();
	var $target = $(this).parent().parent().next('div');
	if($target.is(':visible')) 
	{
	$(this).children('i').removeClass('icon-arrow-up9');
	$(this).children('i').addClass('icon-arrow-down9');
	}
	else 
	{
	$(this).children('i').removeClass('icon-arrow-down9');
	$(this).children('i').addClass('icon-arrow-up9');
	}            
	$target.slideToggle(200);
	});

	/* Closing */
	$('[data-panel=close]').click(function(e){
		e.preventDefault();
		var $panelContent = $(this).parent().parent().parent();
		$panelContent.slideUp(200).remove(200);
	});


	//===== Showing spinner animation demo =====//

	$('.run-first').click(function(){
	    $('body').append('<div class="overlay"><div class="opacity"></div><i class="icon-spinner2 spin"></i></div>');
	    $('.overlay').fadeIn(150);
		window.setTimeout(function(){
	        $('.overlay').fadeOut(150, function() {
	        	$(this).remove();
	        });
	    },5000); 
	});

	$('.run-second').click(function(){
	    $('body').append('<div class="overlay"><div class="opacity"></div><i class="icon-spinner3 spin"></i></div>');
	    $('.overlay').fadeIn(150);
		window.setTimeout(function(){
	        $('.overlay').fadeOut(150, function() {
	        	$(this).remove();
	        });
	    },5000); 
	});

	$('.run-third').click(function(){
	    $('body').append('<div class="overlay"><div class="opacity"></div><i class="icon-spinner7 spin"></i></div>');
	    $('.overlay').fadeIn(150);
		window.setTimeout(function(){
	        $('.overlay').fadeOut(150, function() {
	        	$(this).remove();
	        });
	    },5000); 
	});


	//===== Hiding sidebar =====//

	$('.sidebar-toggle').click(function () {
		$('.page-container').toggleClass('sidebar-hidden');
	});


	//===== Disabling main navigation links =====//

	$('.navigation li.disabled a, .navbar-nav > .disabled > a').click(function(e){
		e.preventDefault();
	});


	//===== Toggling active class in accordion groups =====//

	$('.panel-trigger').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
	});


});