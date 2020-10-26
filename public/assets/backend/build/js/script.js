$(function () {
	// AJAX ADMINISTRATOR
	$(".tombolTambahAdmin").on("click", function () {
		$("#judulModal").html("Input Data Administrator");
		$(".modal-footer button[type=submit]").html("Add Data");
		$(".modal-body form").attr("action", "http://localhost:8080/admin/save_admin");
		// alert($('.modal-body form').attr('action'));

		// show form input
		$("#labelPasswordAdmin").show();
		$("#passwordAdmin").show();
		$("#labelEmailAdmin").show();
		$("#emailAdmin").show();

		$("#id").val("");
		$("#nama").val("");
		$("#emailAdmin").val("");
		$("#passwordAdmin").val("");
	});
	// END AJAX OPERATOR
});
