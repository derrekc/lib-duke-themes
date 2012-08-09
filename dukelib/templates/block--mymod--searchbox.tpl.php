<?php

//dpm($variables);

?>
<div id="searchTabs">
<ul>
<li class="currentSearchTab" id="allTab" style="visibility: visible !important;"><a href="http://duke.summon.serialssolutions.com" onclick="activateTab(this); return false;" title="New default search - search articles, books, journals &#38; more"><span>ALL</span></a></li>
<li id="catalogTab"><a href="http://library.duke.edu/catalog/" onclick="activateTab(this); return false;"><span>Catalog</span></a></li>
<li id="ejournalsTab"><a href="http://library.duke.edu/metasearch/ej/" onclick="activateTab(this); return false;"><span>eJournal Titles</span></a></li>
<li id="databasesTab"><a href="http://library.duke.edu/metasearch/db/" onclick="activateTab(this); return false;"><span>Databases</span></a></li>
</ul>
</div>

<div id="searchBox">

<div class="searchBoxContent" id="allTabContent" style="display:block">

<div class="tabContentUpper">

<form name="quickSearch" method="get" action="http://duke.summon.serialssolutions.com/search">

<p class="searchOptionsPrimary">
<input type="hidden" id="r_yes" name="keep_r" value="true">
<input class="hasHint styledSearchBox" name="s.q" size="55" title="Search for articles, books, journals &#38; more" type="text" value="" />

<input class="styledSearchButton" alt="Enter a search term and click on 'Search' to get results" onclick="pageTracker._trackEvent('homepageSearchBox', 'allSearch');" title="Enter a search term and click on 'Search' to get results" type="submit" value="Search" />

<input class="styledSearchButton_small" alt="Enter a search term and click on 'Go' to get results" onclick="pageTracker._trackEvent('homepageSearchBox', 'allSearch');" title="Enter a search term and click on 'Go' to get results" type="submit" value="GO" />
</p>
<p class="checkboxes">
<span class="allTabCheckboxes">
<label class="bold">Include in results:</label> &#160;&#160;
<input type="checkbox" id="check_newspaper" value="" /><label for="check_newspaper">Newspaper articles</label> &#160;&#160;
<input type="checkbox" id="check_bookreviews" value="" /><label for="check_bookreviews">Book reviews</label>
<input id="summon_newspaper" name="s.fvf[]" checked="checked" type="checkbox" value="ContentType,Newspaper Article,t" style="display:none;"/>
<input id="summon_bookreviews" name="s.fvf[]" checked="checked" type="checkbox" value="ContentType,Book Review,t" style="display:none;"/>
</span>
<span class="whatSearch"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'whatIsAllSearch');" href="javascript:unhide('whatAll');"><strong>About ALL</strong></a></span></p>
</form>


</div><!-- /tabContentUpper -->
<div class="toggleClosed" id="whatAll">
<p><strong>What am I searching when I use the ALL tab?</strong></p>
<ul>
	<li>Most of the journal articles available through Duke University Libraries</li>
	<li>All the books, films, music, special collections, ebooks, database titles and more from our catalog</li>
	<li><a href="http://library.duke.edu/research/subject/index.html">Research guides</a> to library resources</li>
	<li>Content from Duke authors in the <a href="http://library.duke.edu/dukespace/">open access repository</a></li>
</ul>
<p><strong>Note:</strong> Newspaper articles and book reviews are excluded by default. Click the check boxes to change these search parameters.</p>
<p><a href="http://library.duke.edu/research/tools/all-tab.html">Learn more at the Search Tips page >></a></p>
<div class="closeWhat">
<div class="closeWhatButton"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'closeWhat');" href="javascript:unhide('whatAll');">&#160;Close X&#160;</a></div>
</div>
</div>
<div class="tabContentLower">

<p class="searchOptionsTertiary"><a href="https://duke.qualtrics.com/SE/?SID=SV_4TrJkYnDP8isWPO" target="_blank" onclick="window.open(this.href, this.target,'height=725px,width=550px,status=1,menubar=1,resizable=1,scrollbars=1'); return false" title="Tell us what you think about the All tab"><span style="font-weight: bold; color: red;">Feedback</span></a> &nbsp;|&nbsp; <a onclick="pageTracker._trackEvent('homepageSearchBox', 'allSearchTips');" href="http://library.duke.edu/research/tools/all-tab.html">Search Tips</a> &nbsp;|&nbsp; <a onclick="pageTracker._trackEvent('homepageSearchBox', 'allSearchAdvanced');" href="http://duke.summon.serialssolutions.com/advanced">Advanced Search</a></p>

</div> <!-- /tabContentLower -->

</div> <!-- /allTabContent -->

<div class="searchBoxContent" id="catalogTabContent" style="display:none">
	<div class="tabContentUpper">

<form action="http://search.library.duke.edu/search" method="get" name="searchCatalog">
	<input type="hidden" name="sugg" id="catalogsuggestions" value="" />
	<input type="hidden" name="source" id="catalogsource" value="duke" />

	<input type="hidden" name="Nty" value="1" />
	<input type="hidden" name="N" value="0" />

	<p class="searchOptionsPrimary">


	<select id="catalogcodeinput" name="Ntk">
	  <option selected="selected" value="Keyword">Keywords</option>
	  <option value="Title">Title</option>
	  <option value="Author">Author</option>
	  <option value="Subject">Subject Heading</option>
	  <option value="ISBN">ISBN/ISSN</option>
	  <option value="Call Number">Call Number</option>
	</select>

	<input class="hasHint styledSearchBox" id="catalogqueryinput" name="Ntt" size="38" title="Search for books, journals, films &#38; more" type="text" value="" />

	<input class="styledSearchButton" alt="Search" onclick="pageTracker._trackEvent('homepageSearchBox', 'catalogSearch');" id="catalogsubmit" title="Enter a search term and click on 'Search' to get catalog results" type="submit" value="Search" />
	<input class="styledSearchButton_small" alt="Search" onclick="pageTracker._trackEvent('homepageSearchBox', 'catalogSearch');" id="catalogsubmit" title="Enter a search term and click on 'Go' to get catalog results" type="submit" value="GO" />
	</p>
	</form>
	<p class="whatSearch"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'whatIsCatalogSearch');" href="javascript:unhide('whatCatalog');"><strong>About Catalog</strong></a></p>
	</div> <!-- /tabContentUpper -->
	<div class="toggleClosed" id="whatCatalog">
	<p><strong>What am I searching when I use the Catalog tab?</strong></p>
	<ul>
		<!-- <li>Searches what was previously called "Catalog"</li> -->
		<li>Includes books, eBooks, journal titles, music and film</li>
		<li>Includes special collections and University Archives materials</li>
	</ul>
	<p><a onclick="pageTracker._trackEvent('homepageSearchBox', 'learnCatalog');" href="http://library.duke.edu/research/help/catalog/index.html">Learn more at the Catalog Help page >></a></p>
	<div class="closeWhat">
	<div class="closeWhatButton"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'closeWhat');" href="javascript:unhide('whatCatalog');">&#160;Close X&#160;</a></div>
	</div>
	</div>
	<div class="tabContentLower">
	<p class="searchOptionsTertiary"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'catalogEbooks');" href="http://getitatduke.library.duke.edu/?L=PM6MT7VG3J&tab=BOOKS">eBooks</a> &nbsp;|&nbsp; <a onclick="pageTracker._trackEvent('homepageSearchBox', 'catalogAdvanced');" href="http://library.duke.edu/catalog/advanced">Advanced Search</a> &nbsp;|&nbsp; <a onclick="pageTracker._trackEvent('homepageSearchBox', 'catalogClassic');" href="http://catalog.library.duke.edu/">Classic Catalog</a> &nbsp;|&nbsp; <a onclick="pageTracker._trackEvent('homepageSearchBox', 'catalogTRLN');" href="http://search.trln.org" title="Search UNC, NCSU, NCCU catalogs. Borrow through Interlibrary Loan.">Search TRLN</a> &nbsp;|&nbsp; <a onclick="pageTracker._trackEvent('homepageSearchBox', 'worldcat');" href="http://library.duke.edu/metasearch/db/id/DUK00852" title="Search WorldCat. Available to Duke community only.">WorldCat</a></p>

  </div> <!-- /tabContentLower -->

</div> <!-- /catalogTabContent -->

<div class="searchBoxContent" id="ejournalsTabContent" style="display:none">
<div class="tabContentUpper">
<form action="http://getitatduke.library.duke.edu/" method="get" name="findjournals">
<input name="V" type="hidden" value="1.0" />
<input name="tab" type="hidden" value="JOURNALS" />
<input name="L" type="hidden" value="PM6MT7VG3J" />

<p class="searchOptionsPrimary">

	<select id="ejournalcodeinput" name="S">
	  <option selected="selected" value="T_W_A">Title</option>
	  <option value="AC_T_B">Title Starts With</option>
	  <option value="AC_T_M">Exact Title</option>
	  <option value="I_M">ISSN</option>
	</select>

	<input class="hasHint styledSearchBox" id="journals-query" name="C" size="38" title="Search for online journals by title" type="text" value="" />
	<input class="styledSearchButton" alt="Enter a search term and click on 'Search' to get journal title results" id="submit" onclick="pageTracker._trackEvent('homepageSearchBox', 'ejournalsSearch');" type="submit" value="Search" />
	<input class="styledSearchButton_small" alt="Enter a search term and click on 'Go' to get journal title results" id="submit" onclick="pageTracker._trackEvent('homepageSearchBox', 'ejournalsSearch');" type="submit" value="GO" />
	</p>

</form>
<p class="whatSearch"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'whatIsEjournalsSearch');" href="javascript:unhide('whatJournals');"><strong>About eJournal Titles</strong></a></p>
</div> <!-- /tabContentUpper -->
<div class="toggleClosed" id="whatJournals">
<p><strong>What am I searching when I use the eJournal Titles tab?</strong></p>
<ul>
	<li>Journal titles available online through Duke University Libraries (e.g., <em>Lancet,</em> <em>Journal of Neuroscience,</em> <em>Child Development</em>)</li>
</ul>
<p><strong>Search tips:</strong></p>
<ul>
	<li>Click the link for the dates you want to get to specific articles</li>
	<li>Start here to connect to online journals, but do NOT use this tab to search for specific articles within the journals</li>
</ul>
<p><a onclick="pageTracker._trackEvent('homepageSearchBox', 'learnejournals');" href="http://library.duke.edu/research/finding/journal.html">Learn more at the How to Find Journals page >></a></p>
<div class="closeWhat">
<div class="closeWhatButton"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'closeWhat');" href="javascript:unhide('whatJournals');">&#160;Close X&#160;</a></div>
</div>
</div>
<div class="tabContentLower">
<p class="searchOptionsTertiary"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'ejournalsAdvanced');" href="http://library.duke.edu/metasearch/ej/">Browse e-journals by title</a></p>
</div> <!-- /tabContentLower -->

</div> <!-- /ejournalsTabContent -->

<div class="searchBoxContent" id="databasesTabContent" style="display:none">
<div class="tabContentUpper">
<!-- DB-Finder interface: -->
<form action="http://db.library.duke.edu/search" method="get" name="findDatabases">
	<input type="hidden" name="Nty" value="1" />
	<input type="hidden" name="N" value="0" />

	<p class="searchOptionsPrimary">

	<select id="databasecodeinput" name="Ntk">
	  <option selected="selected" value="Keyword">Keywords</option>
  	  <option value="Title">Title</option>
	  <option value="Subject">Subject Heading</option>
	</select>

	<input class="hasHint styledSearchBox" name="Ntt" size="38" title="Search for databases by title &amp; subject" type="text" value="" />
	<input class="styledSearchButton" alt="Enter a search term and click on 'Search' to get database results" onclick="pageTracker._trackEvent('homepageSearchBox', 'databasesSearch');" type="submit" value="Search" />
	<input class="styledSearchButton_small" alt="Enter a search term and click on 'Go' to get database results" onclick="pageTracker._trackEvent('homepageSearchBox', 'databasesSearch');" type="submit" value="GO" />
	</p>

</form>
<p class="whatSearch"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'whatIsDatabasesSearch');" href="javascript:unhide('whatDatabases');"><strong>About Databases</strong></a></p>
</div> <!-- /tabContentUpper -->
<div class="toggleClosed" id="whatDatabases">
<p><strong>What am I searching when I use the Databases tab?</strong></p>
<ul>
	<li>Collections of articles or other materials, often in a specific subject area (e.g., <em>Academic Search Premier,</em> <em>Web of Science,</em> <em>JSTOR,</em> <em>PsycInfo</em>)</li>
</ul>
<p><strong>Search tips:</strong></p>
<ul>
	<li>Start here to connect to databases, but do NOT use this tab search for specific articles within the databases</li>
	<li>For help finding an appropriate database, refer to our <a href="http://library.duke.edu/research/subject/index.html">Research Guides</a></li>
</ul>
<p><a onclick="pageTracker._trackEvent('homepageSearchBox', 'learnDatabases');" href="http://library.duke.edu/research/help/databases/">Learn more at the Articles &#038; Databases page >></a></p>
<div class="closeWhat">
<div class="closeWhatButton"><a onclick="pageTracker._trackEvent('homepageSearchBox', 'closeWhat');" href="javascript:unhide('whatDatabases');">&#160;Close X&#160;</a></div>
</div>
</div>
<div class="tabContentLower">

<p class="searchOptionsTertiary">
<a onclick="pageTracker._trackEvent('homepageSearchBox', 'databasesSubject');" href="http://library.duke.edu/metasearch/db/subject/">Find Databases by Subject</a> &nbsp;|&nbsp; <a onclick="pageTracker._trackEvent('homepageSearchBox', 'databasesTrial');" href="http://library.duke.edu/apps/dbtrials/">Trial Databases</a></p>
</div> <!-- /tabContentLower -->

</div> <!-- /databasesTabContent -->

</div> <!-- /searchBox -->

