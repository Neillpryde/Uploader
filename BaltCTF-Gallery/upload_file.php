<?php
 session_start();
 $sid = session_id();
 $tmpdir = sys_get_temp_dir();
 $tmpfname = tempnam($tmpdir, "web");
 $userdir = "uploads/$sid";
 if (!is_dir($userdir))
 {
     mkdir($userdir);
 }
 $ext = end(explode(".", $_FILES["file"]["name"]));
 $file = $_FILES["file"];
 $name = $file["name"];
 $file_name = substr($name, 0, strrpos($name, "."));

function get_ext($type){
    if ($type == "image/gif")   return "gif";
    if ($type == "image/jpeg")  return "jpeg";
    if ($type == "image/jpg")   return "jpg";
    if ($type == "image/pjpeg") return "jpeg";
    if ($type == "image/x-png") return "png";
    if ($type == "image/png")   return "png";
    return "";
}


function check_ext($ext, $type_ext){
    $allowedExts = array("gif","jpeg", "jpg", "png");
    return ($ext == $type_ext) && in_array($ext, $allowedExts);
}

 $pattern1 = '/.*`(nc .*|python [a-zA-Z0-9]*|bash [a-zA-Z0-9]*|perl [a-zA-Z0-9]*|ruby [a-zA-Z0-9]*)`.*/';
 $type_ext = get_ext($file["type"]);

 if (preg_match($pattern1,$file_name)) { 
 echo "Command prohibited : nc; python; bash; perl; ruby;";
	}
 else { 
 
 if (   ($file["size"] < (1024*1024*3)) 
     && check_ext($ext, $type_ext)) {
      	
		 if ($file["error"] > 0)
    	   {

		echo "Return Code: " . $file["error"] . "<br>";
       }
		else
       {
                $c = strval(count(scandir($userdir))-2);
                move_uploaded_file($file["tmp_name"], $tmpfname);
		shell_exec("mv $tmpfname $userdir/$c-\"\$(echo $file_name | cut -c1-16)\".$ext");
		header('Refresh: 1; URL=main.php');
       }
     
   	  

  	  }
 else
 {
	  echo "$file_name: File corrupt";
    
 }
}
?>


