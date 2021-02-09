$(document).ready(function(){

	assign_course();
	function assign_course(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {assign_course:1},
			success : function(data){
				$("#assign_course_list").html(data)
			}
		})
	}
});