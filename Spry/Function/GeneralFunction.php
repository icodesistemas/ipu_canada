<?php
	

	class SpryFuncions{
		private static $semilla = "bWVyY2Fkb3MgZ3JhdGlzIHR1bWJhcmEgYSBtZXJjYWRvIGxpYnJl";	

		public  function getCrearUrl($str){
			$str = trim(strip_tags(strtolower($str)));
			$str = strtolower($str);
			$str = str_replace("-","_",$str);
			$str = str_replace(" ","-",$str);
			$str = str_replace("/","",$str);
			$str = str_replace("&","",$str);
			$str = str_replace("¬","",$str);
			$str = str_replace("$","",$str);
			$str = str_replace("#","",$str);
			$str = str_replace("¡","",$str);
			$str = str_replace("<","",$str);
			$str = str_replace(">","",$str);
			$str = str_replace("=","",$str);
			$str = str_replace("*","",$str);
			$str = str_replace("%","",$str);
			$str = str_replace('"',"",$str);
			$str = str_replace("'","",$str);
			$str = str_replace("+","",$str);
			$str = str_replace(".","",$str);
			$str = str_replace(",","",$str);
			$str = str_replace(";","",$str);
			$str = str_replace(":","",$str);
			$str = str_replace("ç","",$str);
			$str = str_replace("ñ","n",$str);
			$str = str_replace("á","a",$str);
			$str = str_replace("é","e",$str);
			$str = str_replace("í","i",$str);
			$str = str_replace("ó","o",$str);
			$str = str_replace("ú","u",$str);
			$str = str_replace("Ñ","n",$str);
			$str = str_replace("Á","a",$str);
			$str = str_replace("É","e",$str);
			$str = str_replace("Í","i",$str);
			$str = str_replace("Ó","o",$str);
			$str = str_replace("Ú","u",$str);
			$str = str_replace("(","",$str);
			$str = str_replace(")","",$str);
			$str = str_replace("[","",$str);
			$str = str_replace("[","",$str);
			$str = str_replace("{","",$str);
			$str = str_replace("}","",$str);
			$str = str_replace("!","",$str);
			$str = str_replace("?","",$str);
			$str = str_replace("¿","",$str);
			$str = str_replace("|","",$str);
			$str = str_replace("\\","",$str);
			$str = str_replace("--","-",$str);
			$str = str_replace('”','',$str);
			$str = str_replace('…','',$str);
			$str = str_replace('´','',$str);
			$str = str_replace('ò','o',$str);
			return $str;
		}
		public function encrypt($var){
			return sha1(md5(base64_encode(str_rot13($var))));
		}
		public function getLastSessionStart(){
			$date = new DateTime($_SESSION["ultima-sesion"]);
			echo $date->format('d/m/Y H:i:s');
		}

		public function sinAcentos($str){
			$str = trim(strip_tags(strtolower($str)));

			$str = str_replace("á","a",$str);
			$str = str_replace("ä","a",$str);

			$str = str_replace("é","e",$str);
			$str = str_replace("ë","e",$str);

			$str = str_replace("í","i",$str);
			$str = str_replace("ï","i",$str);

			$str = str_replace("ó","o",$str);
			$str = str_replace("ö","o",$str);

			$str = str_replace("ú","u",$str);
			$str = str_replace("ü","u",$str);

			$str = str_replace("Á","a",$str);
			$str = str_replace("Ä","a",$str);

			$str = str_replace("É","e",$str);
			$str = str_replace("Ë","e",$str);

			$str = str_replace("Í","i",$str);
			$str = str_replace("Ï","i",$str);

			$str = str_replace("Ó","o",$str);
			$str = str_replace("Ö","o",$str);

			$str = str_replace("Ú","u",$str);
			$str = str_replace("Ü","u",$str);

			$str = str_replace('ò','o',$str);

			return $str;
		}
	}
?>