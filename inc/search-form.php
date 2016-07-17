 <ul style="width: auto">
      <li> <a href="#" title="Decrease Font Size" class="ui-helper-reset prefix_t0 btn btn-fontsize-dec">
      	<span class="btn-icon"></span>Decrease Font Size</a> 
      </li>
      <li class="alpha"> 
      	<a href="#" title="Increase Font Size" class="ui-helper-reset prefix_t0 btn btn-fontsize-inc">
      		<span class="btn-icon"></span>Increase Font Size
      	</a> 
      	</li>
    </ul>
    
    <form action="/cgi-bin/site-bin/top-search.pl" id="topbar-search" class="ui-form ui-tools-form-search no_uniform" autocomplete="off">
      <input type="text" class="ui-form-text" name="query" placeholder="Search Website" tabindex="6">
      <div class="ui-form-btn ui-form-btn-select">
        <div class="ui-search-options">
          <div class="row clearfix">
            <input id="option-website" name="search_system" value="website" type="radio" tabindex="2" checked="checked">
            <label for="option-website">Website</label>
          </div>
          <div class="row clearfix">
            <input id="option-people" name="search_system" value="people" type="radio" tabindex="3">
            <label for="option-people">People</label>
          </div>
          <div class="row clearfix">
            <input id="option-library" name="search_system" value="library" type="radio" tabindex="4">
            <label for="option-library">Library</label>
          </div>
          <div class="row clearfix">
            <input id="option-degrees" name="search_system" value="degrees" type="radio" tabindex="5">
            <label for="option-degrees">Degrees</label>
          </div>
        </div>
      </div>
      <input type="submit" class="ui-form-btn ui-form-btn-go" value="Search" title="Search" tabindex="7">
    </form>