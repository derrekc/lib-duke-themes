<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
	<ul class="megamenu">
		<li class="first discover">
			<a href="#">Discover...</a>
			<div class="sub" id="search-box">
				<h6 class="expanded">All</h6>
				<div id="search-summon" class="form formActive">
					<form id="discoverForm-summon" name="quickSearch" method="get" action="http://duke.summon.serialsolutions.com/search">
						<h4>Easily discover the world of library content</h4>
						<input type="hidden" name="keep_r" id="r_yes" value="true" />
						<input type="text" name="s.q" class="needsFocus" size="45" />
						<input type="submit" title="Search" class="btn-summon-search" value="Search" />
						<a href="" title="Advanced Search">Advanced Search</a>
					</form>
				</div>
				<h6 class="collapsed">Catalog</h6>
				<div id="search-catalog" class="form formInactive">
					<form id="discoverForm-trln" action="http://search.library.duke.edu/search" method="get" name="searchCatalog">
						<h4>Search for books, journals, films & more</h4>
						<input type="hidden" name="Nty" value="1" />
						<input type="hidden" name="N" value="0" />
						<select id="catalogcodeinput" name="Ntk">
							<option selected="selected" value="Keyword">Keywords</option>
							<option value="Title">Title</option>
							<option value="Author">Author</option>
							<option value="Subject">Subject Heading</option>
							<option value="ISBN">ISBN/ISSN</option>
							<option value="Call Number">Call Number</option>
						</select>
						<input type="text" name="Ntt" id="catalogqueryinput" class="needsFocus" size="45" />
						<input type="submit" title="Search" id="catalogsubmit" class="btn-summon-search" value="Search" />
						<input type="hidden" name="source" id="catalogsource" value="duke" />
						<input type="hidden" name="sugg" id="catalogsuggestions" value="" />
						<a href="" title="Advanced Search">Advanced Search</a>
					</form>
				</div>
				<h6 class="collapsed">eJournals</h6>
				<div id="search-ejournals" class="form formInactive">
					<form id="discoverForm-ejournals" action="http://getitatduke.library.duke.edu/" method="GET">
						<h4>Search for online journals by title</h4>
						<input type="hidden" name="V" value="1.0" />
						<input type="hidden" name="tab" value="JOURNALS" />
						<input type="hidden" name="L" value="PM6MT7VG3J" />
						<select id="ejournalcodeinput" name="S">
							<option selected="selected" value="T_W_A">Title</option>
							<option value="AC_T_B">Title Starts With</option>
							<option value="AC_T_M">Exact Title</option>
							<option value="I_M">ISSN</option>
						</select>								
						<input type="text" name="C" id="journals-query" class="needsFocus" size="45" />
						<input type="submit" title="Search" class="btn-summon-search" value="Search" />
						<a href="" title="Advanced Search">Advanced Search</a>
					</form>
				</div>
				<h6 class="collapsed">Databases</h6>
				<div id="search-dbfinder" class="form formInactive">
					<form id="discoverForm-dbfinder" action="http://db.library.duke.edu/search" method="GET">
						<h4>Search for database by title & subject</h4>
						<input type="hidden" name="Nty" value="1" />
						<input type="hidden" name="N" value="0" />
						<select id="databasecodeinput" name="Ntk">
							<option selected="selected" value="Keyword">Keywords</option>
							<option value="Title">Title</option>
							<option value="Subject">Subject Heading</option>
						</select>
						<input type="text" name="Ntt" class="needsFocus" size="38" />
						<input type="submit" title="Search" class="btn-summon-search" value="Search" />
						<a href="" title="Advanced Search">Advanced Search</a>
					</form>
				</div>
			</div>
		</li>
		<li>
			<a href="#">Libraries</a> 
			<div class="sub" style="width: 560px;">
				<ul>
					<li><a href="http://library.duke.edu/about/perkins.html">Perkins & Bostock Library</a></li>
					<li><a href="http://library.duke.edu/lilly">Lilly Library</a></li>
					<li><a href="http://library.duke.edu/rubenstein">Rubenstein Library</a></li>
					<li><a href="http://library.duke.edu/music">Music Library</a></li>
					<li><a href="http://library.duke.edu/divinity">Divinity Library</a></li>
				</ul>
				<ul>
					<li><a href="http://library.duke.edu/about/depts/lsc/index.html">Library Service Center</a></li>
					<li><a href="http://www.mclibrary.duke.edu">Medical Center Library</a></li>
					<li><a href="http://library.fuqua.duke.edu">Ford Library</a></li>
					<li><a href="http//www.law.duke.edu/lib">Goodson Law Library</a></li>
					<li><a href="http://library.duke.edu/marine">Marine Lab Library</a></li>
				</ul>
				<ul class="menu-feature">
					<li class="first">
						<a href="http://library.duke.edu" style="text-align: center">
							<img src="http://library.duke.edu/imgs/blue-note/reading-devil.gif" title="Reading Blue Devil" />
						</a>
					</li>
				</ul>
			</div>
		</li>
		<li>
			<a href="#">Services</a>
			<div class="sub" style="width: 600px">
				<ul class="menu" style="width: 200px;">
					<li class="first"><a href="#">Borrow, Renew, Request</a></li>
					<li><a href="#">Ask a Librarian</a></li>
					<li><a href="#">Access My Account</a></li>
					<li><a href="#">Document Delivery / InterLibrary Loan (ILL)</a></li>
				</ul>
				<ul class="menu">
					<li class="first"><a href="#">Research Guides</a></li>
					<li><a href="#">Reserves</a></li>
					<li><a href="#">Library Instruction</a></li>
					<li><a href="#">Log on to Sakai</a></li>
				</ul>
				<ul class="menu-feature">
					<li class="first">
						<a href="#">
							<img src="http://library.duke.edu/imgs/blue-note/ask-us.jpg" alt="Ask a Librarian"/>
						</a>
					</li>
				</ul>
				<div style="clear: both"></div>
			</div>
		</li>
		<li>
			<a href="#">How Do I</a>
			<div class="sub" style="width: 410px;">
				<ul class="menu">
					<li><a href="#">Cite Sources</a></li>
					<li><a href="#">Find Book Locations</a></li>
					<li><a href="#">Conduct Research</a></li>
					<li><a href="#">Find Data &amp; Digital Maps (GIS)</a></li>
				</ul>
				<ul class="menu">
					<li><a href="#">Check out an eReader</a></li>
					<li><a href="#">Publish &amp; Archive</a></li>
					<li><a href="#">Find Images</a></li>
				</ul>
			</div>
		</li>
		<li class="last">
			<a href="#">About</a>
			<div class="sub">
				<ul class="menu">
					<li><a href="http://library.duke.edu/about">About Duke Library</a></li>
					<li><a href="http://library.duke.edu/about/hours">Hours</a></li>
					<li><a href="http://library.duke.edu/about/libraries/index.html">Directions</a></li>
					<li><a href="http://library.duke.edu/about/contact.html">Staff</a></li>
				</ul>
			</div>
		</li>
	</ul>
    <?php print $content; ?>
  </div>
</div>
