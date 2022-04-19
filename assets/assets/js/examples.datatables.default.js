/*
Name: 			Tables / Advanced - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	2.2.0
*/

(function($) {

	'use strict';

	var datatableInit = function() {

		$('#datatable-default').dataTable({
			dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
			scrollY:        '60vh',
			scrollCollapse: true,
			paging:         true,
		});

	};

	$(function() {
		datatableInit();
	});

}).apply(this, [jQuery]);