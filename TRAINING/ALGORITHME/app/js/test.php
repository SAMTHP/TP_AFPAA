<script type="text/javascript" src="edit_area/edit_area_full.js"></script>
<script type="text/javascript" scr="script.js"></script>
<textarea cols="150" rows="15" id="area_id">&lt;?php
	$in  = 'zorglub';
	$out = '';
	for($i=0; $i&lt;strlen($in); $i++){
		$out = $in[$i].$out;
	}
	echo $out;
?&gt;</textarea>