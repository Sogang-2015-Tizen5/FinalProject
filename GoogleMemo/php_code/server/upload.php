<?php
include("config.php");

	if (isset($_FILES['upload']) && !$_FILES['upload']['error']) {
		$imageKind = array ('image/pjpeg', 'image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');
		if (in_array($_FILES['upload']['type'], $imageKind)) {
			$tmp_file = $_FILES['upload']['tmp_name'];
			$file_path = '../uploads/'.$_FILES['upload']['name'];
			if (move_uploaded_file($tmp_file, $file_path)) {
				echo "success";
				exit();
			} //if , move_uploaded_file

		} else { // 3-3.허용된 이미지 타입이 아닌경우
			echo "not";
			exit();
		}//if , inarray

	} //if , isset
	else{
		echo "here";
		exit();
	}
	if ($_FILES['upload']['error'] > 0) {
		echo '<p>파일 업로드 실패 이유: <strong>';

		switch ($_FILES['upload']['error']) {
		case 1:
			echo 'php.ini 파일의 upload_max_filesize 설정값을 초과함(업로드 최대용량 초과)';
			break;
		case 2:
			echo 'Form에서 설정된 MAX_FILE_SIZE 설정값을 초과함(업로드 최대용량 초과)';
			break;
		case 3:
			echo '파일 일부만 업로드 됨';
			break;
		case 4:
			echo '업로드된 파일이 없음';
			break;
		case 6:
			echo '사용가능한 임시폴더가 없음';
			break;
		case 7:
			echo '디스크에 저장할수 없음';
			break;
		case 8:
			echo '파일 업로드가 중지됨';
			break;
		default:
			echo '시스템 오류가 발생';
			break;
		} // switch

		echo '</strong></p>';

	} // if

	if (file_exists ($_FILES['upload']['tmp_name']) && is_file($_FILES['upload']['tmp_name']) ) {
		unlink ($_FILES['upload']['tmp_name']);
	}

exit();
?>	


	</body>
</html>
