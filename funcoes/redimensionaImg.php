<?

/**
 * @return Boleano
 * @param FILE $src informar o $_FILES['arquivo']['tmp_name'], onde arquivo й o name do campo type='file' que envia o arquivo
 * @param FILE $dest caminho de destino da imagem (informar diretуrio do servidor e nome  do arquivo que serб salvo - pode usar o diretуrio + o $_FILES['arquivo']['name'] que й o nome original do arquivo)
 * @param int $x largura da imagem
 * @param int $y altura da imagem
 * @param int $qualidade padrгo 100
 * @param string $assina (opcional)
 * @desc funзгo para redimencionar e assinar imagens baseado no GD
*/
function redimensionaImg($src,$dest,$x=null,$y=null,$qualidade=100,$assina=null,$cores=0,$marca=null){
    set_time_limit(0);

    //pega o tamanho da imagem
    $size=getimagesize($src);
    //verifica se й uma imagem 
    $tipo=explode("/",$size[mime]);
	if(strtolower($tipo[0])!="image")
        return false;
	

    if(empty($x)||empty($y)){
        $x=$size[0];
        $y=$size[1];
    }
    
	//testa o tipo
    if($tipo[1]=="jpeg")
       $src=imagecreatefromjpeg($src);
    elseif ($tipo[1]=="gif")
        $src=imagecreatefromgif($src);
    elseif ($tipo[1]=="png")
        $src=imagecreatefrompng($src);
    else 
        return false;

    //cria nova imagem
    $Xdest= imagecreatetruecolor($x, $y);

    // alterar o fundo da imagem
    //$bgColor = imagecolorallocate($Xdest, 255,255,255);
	//imagefill($Xdest,0,0,$bgColor);

	//hack to keep transparency in gif and png
	if($size[2]==IMAGETYPE_GIF||$size[2]==IMAGETYPE_PNG)
	{
		if($size[2]==IMAGETYPE_PNG)
			imageAntiAlias($Xdest,true);

		imagecolortransparent($Xdest, imagecolorallocatealpha($Xdest, 0, 0, 0,127));
		imagealphablending($Xdest, false);
		imagesavealpha($Xdest, true);
	}

    //redimenciona e verifica cor
    if($cores==1)
    	imagecopyresampled($Xdest,$src, 0, 0, 0, 0, $x, $y, $size[0], $size[1]);
	elseif($cores==0)
	{
		
		imagecopyresampled($Xdest,$src, 0, 0, 0, 0, $x, $y, $size[0], $size[1]);
		
		$dither=1;
		
		   if (!($t = imagecolorstotal($Xdest))) {
			   $t = 256;
			   imagetruecolortopalette($Xdest, $dither, $t);   
		   }
		   for ($c = 0; $c < $t; $c++) {   
			   $col = imagecolorsforindex($Xdest, $c);
			   $min = min($col['red'],$col['green'],$col['blue']);
			   $max = max($col['red'],$col['green'],$col['blue']);
			   $i = ($max+$min)/2;
			   imagecolorset($Xdest, $c, $i, $i, $i);
		   } // fecha for ($c = 0; $c < $t; $c++)
	
		imagejpeg($Xdest, $dest, $qualidade);
		return true;
	}	// fecha elseif($cores==0)

	//assina a nova  imagem
    if(!empty($assina))
    {
        $preto=imagecolorallocate($Xdest, 0, 0, 0);
        $branco=imagecolorallocate($Xdest, 255, 255, 255);
        $xi=($y-16);
    	//imagestring($Xdest, 3, 10, ($xi), $assina, $preto);
        imagestring($Xdest, 3, 6, ($xi+0), $assina, $preto);
        imagestring($Xdest, 3, 5, ($xi+1), $assina, $branco);
    }

	if(!empty($marca))
	{
		$watermark = imagecreatefromgif($marca);
		$watermark_width = imagesx($watermark);
		$watermark_height = imagesy($watermark);

		$dest_x = $x - $watermark_width - 2;
		$dest_y = $y - $watermark_height - 2;

		//echo "xdets".$Xdest." marcadagua". $watermark ."dest x: ".$dest_x." dest y: ".$dest_y ." watermark_width ". $watermark_width . " watermark_height " . $watermark_height ."<br/>";
		imagecopymerge($Xdest, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, 50);
	}

    //grava a nova imagem
    if($tipo[1]=="jpeg")
       imagejpeg($Xdest, $dest, $qualidade);
    elseif ($tipo[1]=="gif")
        imagegif($Xdest,$dest);
    elseif ($tipo[1]=="png")
        imagepng($Xdest,$dest,max(9 - floor($qualidade/10),0));

    imagedestroy($src);
    imagedestroy($Xdest);
    return true;
}
?>