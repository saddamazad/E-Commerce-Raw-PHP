<div id="siteMainContainer" class="fLeft">
<?php
	require_once("includes/_app_utils.php");

	$productSubCategory = $_GET[pdt_subcat];
	$productId = $_GET[pdt];

	if($productSubCategory == "flat") {
		getProductsBySubcatTitle($productSubCategory);
	} elseif($productSubCategory == "heel") {
		getProductsBySubcatTitle($productSubCategory);
	} elseif($productSubCategory == "casual") {
		getProductsBySubcatTitle($productSubCategory);
	} elseif($productSubCategory == "leather") {
		getProductsBySubcatTitle($productSubCategory);
	} elseif($productSubCategory == "fabric") {
		getProductsBySubcatTitle($productSubCategory);
	} elseif($productSubCategory == "polyurethane") {
		getProductsBySubcatTitle($productSubCategory);
	} elseif($productId != "" && $productId > 0) {
		showProductsById($productId);
	}elseif(isset($_POST[sf_submitBtn])) {
		$searchKeyword = $_POST[sf_keywordTxt];
		showProductsByKeyword($searchKeyword);
	} else {
?>
	<div id="banner">
		<script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: true
				});
			}
			window.addEvent('domready',startGallery);
		</script>
		<div class="content">
			<div id="myGallery">
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="#" title="open image" class="open"></a>
					<img src="resources/smoothgallery/images/brugges2006/1.jpg" class="full" />
					<img src="resources/smoothgallery/images/brugges2006/1-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="#" title="open image" class="open"></a>
					<img src="resources/smoothgallery/images/brugges2006/2.jpg" class="full" />
					<img src="resources/smoothgallery/images/brugges2006/2-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="#" title="open image" class="open"></a>
					<img src="resources/smoothgallery/images/brugges2006/3.jpg" class="full" />
					<img src="resources/smoothgallery/images/brugges2006/3-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="#" title="open image" class="open"></a>
					<img src="resources/smoothgallery/images/brugges2006/4.jpg" class="full" />
					<img src="resources/smoothgallery/images/brugges2006/4-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="#" title="open image" class="open"></a>
					<img src="resources/smoothgallery/images/brugges2006/5.jpg" class="full" />
					<img src="resources/smoothgallery/images/brugges2006/5-mini.jpg" class="thumbnail" />
				</div>
			</div>
		</div>
	</div>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum tincidunt metus, vitae luctus erat interdum nec. Quisque fermentum vehicula risus at pharetra. Aenean ac ipsum tellus, at porttitor urna. Cras sed magna in eros posuere sagittis at ut sem. Fusce fermentum semper lectus et tristique. 
	</p>
<?php } ?>
</div>
<div class="cLeft"></div>