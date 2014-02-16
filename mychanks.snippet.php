<?php
	$output = '';
	$error = '';
	$chank_name = '';
	$options = $modx->fromJSON($params);
	$id = !empty($pageId) ? $pageId : $modx->resource->id;
	$default_chank = !empty($default_chank) ? $default_chank : $error = 'Вы не указали $default_chank!';
	$template_id = $modx->resource->template;
	
	if($options[$template_id]){
		$chank_name = $options[$template_id];
	}else{
		$chank_name = $default_chank;
	}
	$output = $modx->getChunk($chank_name);
	if(!empty($error)) $output = $error;
	
	return $output;
?>