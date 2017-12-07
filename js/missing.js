$(document).ready(function(){
	$("#submitmiss").click(function(){
		var name=$("#name").val();
		console.log(name);
		var age=$("#age").val();
		console.log(age);
		var gender=$("#gender").val();
		console.log(gender);
	if(name != ""){
		$.post("include/fetching.php",
		{
			name : name,
			age : age,
			gender : gender,
			checkvar : 'false'
		},function(data){
			console.log(data);			
		});
	}	
	});
});