<div class="container mt-5">
        <h2 class="mb-4">Live Search Example</h2>
        <div class="form-group">
            <input type="text" class="form-control" id="search" placeholder="Enter search term...">
            <div id="display"></div>
        </div>
    </div>
	<p>&nbsp;</p>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#search").keyup(function(){
				var searchText = $(this).val();
				if(searchText!=''){
					$.ajax({
						url:'api.php',
						method:'post',
						data:{query:searchText},
						success:function(response){
							$("#display").html(response).show();
						}
					});
				}
				else{
					$("#display").hide();
				}
			});
			$("#display").on("click", "a", function(event){
				event.preventDefault();
				var value = $(this).text();
				$("#search").val(value);
				$("#display").hide();
			});
			$(document).click(function(event) {
				if (!$(event.target).closest('.form-group').length) {
					$("#display").hide();
				}
			});
		});
	</script>
	
	
	
	