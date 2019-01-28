<div id="siteLeftBar" class="fLeft">
	<form action="index.php" id="searchForm" name="searchForm" enctype="multipart/form-data" method="post" onsubmit="javascript: return validateSearchForm();">
		<fieldset>
			<input type="text" id="sf_keywordTxt" name="sf_keywordTxt" value="search ..." onfocus="javascript: onclickChange('sf_keywordTxt')" onblur="javascript: onBlurChange('sf_keywordTxt')" class="inputController fLeft" />
			<input type="submit" id="sf_submitBtn" name="sf_submitBtn" value="" class="searchBtn" />
		</fieldset>
	</form>
	<div id="siteCategories" class="ddsmoothmenu-v">
		<ul>
			<li><a href="#">Footwear</a>
				<ul>
					<li><a href="#">Women</a>
						<ul>
							<li><a href="index.php?pdt_subcat=flat">Flat</a></li>
							<li><a href="index.php?pdt_subcat=heel">Heel</a></li>
						</ul>
					</li>
					<li><a href="#">Men</a>
						<ul>
							<li><a href="index.php?pdt_subcat=casual">Casual</a></li>
							<li><a href="index.php?pdt_subcat=leather">Leather</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#">Accessories</a>
				<ul>
					<li><a href="index.php?pdt_subcat=fabric">Fabric</a></li>
					<li><a href="index.php?pdt_subcat=polyurethane">Polyurethane</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
