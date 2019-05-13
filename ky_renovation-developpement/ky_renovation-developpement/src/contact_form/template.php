<?php
ob_start();
?>
<html>
	<head>
	</head>
	<body>
		<div><b>Nom</b>: <?php echo $values["name"]; ?></div>
		<div><b>E-mail</b>: <?php echo $values["email"]; ?></div>
		<?php if($values["phone"]!=""):?>
		<div><b>Téléphone</b>: <?php echo $values["phone"]; ?></div>
		<?php endif; ?>
		<div><b>Message</b>: <?php echo nl2br($values["message"]); ?></div>
		<?php if($values["type"]!=""):?>
		<div><b>Type</b>: <?php echo $values["type"]; ?></div>
		<?php endif;
		if($values["square-feet"]!=""):?>
		<div><b>Surface (m²)</b>: <?php echo $values["square-feet"]; ?></div>
		<?php endif;
		if($values["painting-preparation"]!=""):?>
		<div><b>Peinture-préparation</b>: <?php echo $values["painting-preparation"]; ?></div>
		<?php endif;
		if($values["painting-coating"]!=""):?>
		<div><b>Peinture-enduit</b>: <?php echo $values["painting-coating"]; ?></div>
		<?php endif;
		if($values["painting-white"]!=""):?>
		<div><b>Peinture-primaire</b>: <?php echo $values["painting-white"]; ?></div>
		<?php endif;
		if($values["painting-color"]!=""):?>
		<div><b>Peinture-couleurs</b>: <?php echo $values["painting-color"]; ?></div>
		<?php endif;
        if($values["floor-tile-cope"]!=""):?>
            <div><b>Carrelage</b>: <?php echo $values["floor-tile-cope"]; ?></div>
        <?php endif;
        if($values["floor-tile-glued-pose"]!=""):?>
            <div><b>Carrelage</b>: <?php echo $values["floor-tile-glued-pose"]; ?></div>
        <?php endif;
        if($values["floor-tile-swimming-pool"]!=""):?>
            <div><b>Carrelage</b>: <?php echo $values["floor-tile-swimming-pool"]; ?></div>
        <?php endif;
        if($values["placo-glued"]!=""):?>
            <div><b>Placo</b>: <?php echo $values["placo-glued"]; ?></div>
        <?php endif;
        if($values["placo-still"]!=""):?>
            <div><b>Placo</b>: <?php echo $values["placo-still"]; ?></div>
        <?php endif;
        if($values["placo-isolate"]!=""):?>
            <div><b>Placo</b>: <?php echo $values["placo-isolate"]; ?></div>
        <?php endif;
        if($values["parquet-float-laminate"]!=""):?>
            <div><b>Parquet</b>: <?php echo $values["parquet-float-laminate"]; ?></div>
        <?php endif;
        if($values["parquet-wood"]!=""):?>
            <div><b>Parquet</b>: <?php echo $values["parquet-wood"]; ?></div>
        <?php endif;
        if($values["terraces-wood"]!=""):?>
            <div><b>Terrasse</b>: <?php echo $values["terraces-wood"]; ?></div>
        <?php endif;
        if($values["terraces-floor-tile"]!=""):?>
            <div><b>Terrasse</b>: <?php echo $values["terraces-floor-tile"]; ?></div>
        <?php endif;
        if($values["facades-monolayer"]!=""):?>
            <div><b>Façade</b>: <?php echo $values["facades-monolayer"]; ?></div>
        <?php endif;
        if($values["facades-drunk"]!=""):?>
            <div><b>Façade</b>: <?php echo $values["facades-drunk"]; ?></div>
        <?php endif;
		if($values["painting"]!=""):?>
		<div><b>Peinture</b>: <?php echo $values["painting"]; ?></div>
		<?php endif;
		if($values["floors-name"]!=""):?>
		<div><b>Floors</b>: <?php echo $values["floors-name"]; ?></div>
		<?php endif;
		if($values["doors"]!=""):?>
		<div><b>Doors</b>: <?php echo $values["doors"]; ?></div>
		<?php endif;
		if($values["windows"]!=""):?>
		<div><b>Windows</b>: <?php echo $values["windows"]; ?></div>
		<?php endif;
		if($values["total-cost"]!=""):?>
		<div><b>Total estimation</b>: <?php echo $values["total-cost"]; ?></div>
		<?php endif;
		if($values["length"]!=""):?>
		<div><b>Length</b>: <?php echo $values["length"]; ?></div>
		<?php endif;
		if($values["height"]!=""):?>
		<div><b>Height</b>: <?php echo $values["height"]; ?></div>
		<?php endif;
		if($values["panel-name"]!=""):?>
		<div><b>Panel Style</b>: <?php echo $values["panel-name"]; ?></div>
		<?php endif;
		if($values["gate-name"]!=""):?>
		<div><b>Gate Type</b>: <?php echo $values["gate-name"]; ?></div>
		<?php endif;
		if($values["extras-name"]!=""):?>
		<div><b>Additional Extras</b>: <?php echo $values["extras-name"]; ?></div>
		<?php endif;
		if($values["area-width"]!=""):?>
		<div><b>Area Width in Meters</b>: <?php echo $values["area-width"]; ?></div>
		<?php endif;
		if($values["area-length"]!=""):?>
		<div><b>Area Length in Meters</b>: <?php echo $values["area-length"]; ?></div>
		<?php endif;
		if($values["block-paving"]!=""):?>
		<div><b>Block Paving</b>: <?php echo $values["block-paving"]; ?></div>
		<?php endif;
		if($values["surface"]!=""):?>
		<div><b>Surface Preparation</b>: <?php echo $values["surface"]; ?></div>
		<?php endif;
		if($values["stone-walling"]!=""):?>
		<div><b>Stone Walling</b>: <?php echo $values["stone-walling"]; ?></div>
		<?php endif; ?>
	</body>
</html>
<?php
$content = ob_get_contents();
ob_end_clean();
return($content);
?>	