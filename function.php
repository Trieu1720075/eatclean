<?php

function upload_image($_name, $type)
{
    $targetDir = "uploads/";
    // $fileName = basename($_FILES[$_name]["name"]);

    $nakedName = pathinfo($_FILES[$_name]['name'], PATHINFO_FILENAME);
    $fileType = pathinfo($_FILES[$_name]['name'], PATHINFO_EXTENSION);

    $fileName = $nakedName.'.'.$fileType;
    

    $targetFilePath = $targetDir . $fileName;
    // $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    

    // echo $fileType;
    if ($type == "image") {
        if ($fileType != "jpg" && $fileType != "png") {
            return false; // sai định dạng
        }
    } else if ($fileType != $type) {
        return false; // sai định dạng
    }

    // if (file_exists($path)){

    // }


    if (move_uploaded_file($_FILES[$_name]["tmp_name"], $targetFilePath)) {
        return $targetFilePath;
    } else {
        return false;
    }
}

function check_length_str($length_input, $min, $max)
{
    if ($min != -1) {
        if ($length_input < $min) {
            return false;
        }
    }
    if ($max != -1) {
        if ($length_input > $max) {
            return false;
        }
    }
    return true;
}
function validate_email($emailString)
{
    $format1 = '/\s/';
    $format2 = '/.+@.+\..+/';
    $emailString = trim($emailString);  /*Strip whitespace (or other characters)
                                        from the beginning and end of a string*/
    if (preg_match($format1, $emailString)) {
        return 0;
    }
    if (!preg_match($format2, $emailString)) {
        return 0;
    }
    return 1;
}
/*	code for test
    $str = " ngoccuong0709@gm ail.com    ";
    echo validate_email($str);
*/
function alert_script($str)
{
    ?>
    <script>
        alert('<?php echo $str ?>')
    </script>
<?php
}
function getpageaddrress()
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else
        $link = "http";
    // Here append the common URL characters. 
    $link .= "://";
    // Append the host(domain name, ip) to the URL. 
    $link .= $_SERVER['HTTP_HOST'];
    // Append the requested resource location to the URL 
    $link .= $_SERVER['REQUEST_URI'];
    // Print the link 
    return $link;
}

function gethomeaddrress()
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else
        $link = "http";
    // Here append the common URL characters. 
    $link .= "://";
    // Append the host(domain name, ip) to the URL. 
    $link .= $_SERVER['HTTP_HOST'];
    // Append the requested resource location to the URL 
    return $link;
}
function permission_admin()
{
    if ($_SESSION['admin_active']) {
        return true;
    } else {
        return false;
    }
}
// function permission_user()
// {
//     if ($_SESSION['user']) {
//         return true;
//     } else {
//         return false;
//     }
// }

function get_value_add($name)
{
    if (isset($_GET["$name"])) {
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        return $params["$name"];
    }
    else{
        return "";
    }
}

function permission_user($con, $degree)
{
    // degree: 0 - user, 1: admin, 2: master
    $error = "";
    if (!isset($_SESSION['user'])) {
        $error .= "Bạn chưa đăng nhập";
    }
    else{
        $query = "select * from user where user_login = '{$_SESSION["user"]}' ";
        $result = mysqli_query($con, $query);
        $cater = mysqli_fetch_object($result);
        if ($degree == 1){
            if ($cater->account_type == "normal"){
                $error .= "Cần đăng nhập tài khoản admin để thực hiện chức năng này";
            }
        }
        elseif ($degree == 2){
            if ($cater->account_type != "master"){
                $error .= "Cần đăng nhập tài khoản master để thực hiện chức năng này";
            }
        }
    }

    return $error;
}

function sub_string($str, $len)
{
	$more = ' ...';
	$encode = 'UTF-8';
	if ($str == "" || $str == NULL || is_array($str) || strlen($str) <= $len) {
		return $str;
	}
	$str = mb_substr($str, 0, $len, $encode);
	if ($str != "") {
		if (!substr_count($str, " ")) {
			$str .= $more;
			return $str;
		}
		while (strlen($str) && ($str[strlen($str) - 1] != " ")) {
			$str = mb_substr($str, 0, -1, $encode);
		}
		$str = mb_substr($str, 0, -1, $encode);
		$str .= $more;
	}
	return $str;
}


?>