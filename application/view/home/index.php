<br>
<br>

<div class="container-fluid">
		<div class="row" id="row1">
			<div class="col-4">
				<div class="btn-group btn-group-justified selection" id="responsive" role="group" aria-label="Justified button group with nested dropdown">
					<div class="btn-group" role="group">
						<!-- can use a foreach function from php to make the list according to the database. Lists will be as large as database entries for that section (artworks, artists, museums)-->
					    <button type="button" class="btn btn-sm dropdown-toggle dropdown_button" id="artworks" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					    	Art Works
					    	<span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu" id="artworks">
					    	<li>
					    		<button type="button" class="dropdown-item" id="artwork-item" value="oldspanish" name="artwork">The Old Spanish</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="artwork-item" value="kiterunner" name="artwork">The Kite Runner</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="artwork-item" value="starrynight" name="artwork">The Starry Night</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="artwork-item" value="garnettewalk" name="artwork">Garnette Walking</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="artwork-item" value="amgothic" name="artwork">American Gothic</button>
					    	</li>
					    </ul>
					  </div>
				    <div class="btn-group" role="group">
					    <button type="button" class="btn btn-sm dropdown-toggle dropdown_button" id="artists" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					    	Artists
					    	<span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu" id="artists">
					    	<li>
					    		<button type="button" class="dropdown-item" id="artist-item" value="entyre" name="">Eduardo Mac Entyre</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="artist-item" value="wach" name="">Aloys Wach</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="artist-item" value="fadel" name="">Deena Fadel</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="artist-item" value="nadeau" name="">Nicole Nadeau</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="artist-item" value="vangogh" name="">Vincent van Gogh</button>
					    	</li>
					    </ul>
					  </div>
					   <div class="btn-group" role="group">
					    <button type="button" class="btn btn-sm dropdown-toggle dropdown_button" id="museums" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					    	Museums
					    	<span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu" id="museums">
					    	<li>
					    		<button type="button" class="dropdown-item" id="museum-item" value="okeeffe" name="">Georgia O'Keeffe Museum</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="museum-item" value="rom" name="">Royal Ontario Museum</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="museum-item" value="newhaven" name="">New Haven Museum</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="museum-item" value="moma" name=""> Museum of Modern Art</button>
					    	</li>
					    	<li>
					    		<button type="button" class="dropdown-item" id="museum-item" value="museo" name="">Museo Correr</button>
					    	</li>
					    </ul>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="display-container">
					<img id="display-frame" src="" alt="">
				</div>
				<!-- The Modal -->
				<div id="myModal" class="modal">
				  <span class="close">&times;</span>
				  <img class="modal-content" id="img01">
				  <div id="caption"></div>
				</div>
			</div>
			<div class="col-4">
				<h4>Description</h4>
				<div class="hidden is-artwork">
					<ul class="list-group">
 						<li class="list-group-item" id="dob">
 							Cras justo odio
 						</li>
  						<li class="list-group-item" id="death">
  							Dapibus ac facilisis in
  						</li>
  						<li class="list-group-item" id="residence">
  							Morbi leo risus
  						</li>
  						<li class="list-group-item" id="genre">
  							Porta ac consectetur ac
  						</li>
  						<li class="list-group-item" id="works">
  							Vestibulum at eros
  						</li>
					</ul>	
				</div>

    			<div class="hidden is-artist">
    				<ul class="list-group">
 						<li class="list-group-item" id="date_created">
 							Cras justo odio
 						</li>
  						<li class="list-group-item" id="type">
  							Dapibus ac facilisis in
  						</li>
  						<li class="list-group-item" id="dim">
  							Morbi leo risus
  						</li>
  						<li class="list-group-item" id="location">
  							Porta ac consectetur ac
  						</li>
  						<li class="list-group-item" id="artist">
  							Vestibulum at eros
  						</li>
  						<li class="list-group-item" id="price">
  							Vestibulum at eros
  						</li>
  						<li class="list-group-item" id="genre">
  							Vestibulum at eros
  						</li>
					</ul>
    			</div>

    			<div class="hidden is-museum">
    				<ul class="list-group">
 						<li class="list-group-item" id="opening_day">
 							Cras justo odio
 						</li>
  						<li class="list-group-item" id="location">
  							Dapibus ac facilisis in
  						</li>
  						<li class="list-group-item" id="address">
  							Morbi leo risus
  						</li>
  						<li class="list-group-item" id="history">
  							Porta ac consectetur ac
  						</li>
  						<li class="list-group-item" id="reviews">
  							Vestibulum at eros
  						</li>
					</ul>
    			</div>
			</div>
		</div>