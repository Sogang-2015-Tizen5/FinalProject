<?php
	include('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(function(){
					$("#popbutton").click(function(){
						$('div.modal').modal();
					})
			});

		</script>
		</head>
		<body>
			<button class="btn btn-default" id="popbutton">모달출력버튼</button><br/>
			<div id = "mo" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h4 class="modal-title">메모</h4>
						</div>
						<form name ="memo" method = "GET" action ="http://cspro.sogang.ac.kr/~cse20121562/cgi-bin/prj/memo_save.php"> 
						 <input type="text" name = "user_id" value = "a" >	
						 <div class="modal-body"> 제목
                        <input type="text" name = "memo_title" id = "memo_title">
                        </div>
                        <div class="modal-body"> 내용
                        <textarea name = "memo_context" id = "memo_context" class="form-control" rows="3"></textarea>
<input name="myfile" type="file" >						
</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        					<input id = "submit"type="submit" value = "Save Memo"class="btn btn-primary"></button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</body>
</html>

