<header>
    	<div class="collapse bg-dark" id="navbarHeader">
    		<h1 style="color: white">Input Berita</h1>
    		<div class="container">
    			<div class="row">
    				<div class="col-sm-8 col-md-7 py-4">
    				 <h4 class="text-white">About</h4>
    				 <p class="text-muted">Selamat Datang di Input Berita!<br>
    				 Disini Administrator dapat Menginputkan Berita Sesuka Hati :)</p>
    				 
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<body>
	<center> 
	<br>
	<form style="background-color: white" method="post">  
		<table  border="0" width="120"> 
			<tr>
				<div class="control-group">  
	 				<label class="control-label" for="inputJudul">Judul</label>
	 				<br>  
					<input type="text" name="judul" class="text-field" id="judul_id" placeholder="Judul Berita" required >  
					<div class="controls"></div>  
				</div>  
			</tr>
			<br>
			<tr>
				<label>Penulis</label><br>
				<input type="text" name="Penulis" placeholder="Nama Penulis" required><br>
			</tr>
			<br>
			<tr>
				<div class="control-group">  
					<textarea rows="25" cols="50" class="span12" name="isi_berita" placeholder="Isi Berita..." required></textarea>    
					<div class="controls"></div>  
				</div>  
			</tr>
			<br>
			<tr>
				<br>
				<label class="control-label" for="inputGambar">Input Gambar</label>  
					<div class="controls"></div> 
				<br> 
				<input type="file" id="inputGambar" name="gbr_berita" required>  
				
			</tr>
			<br>
			<br>

			<tr> 
				<div class="control-group"> 
					<div class="controls"> 
						<button type="submit" class="btn btn-primary">Reset</button> 
						<button type="submit" class="btn btn-primary">Post</button>  
					</div> 
				</div>
			</tr>

		</table>
		  
	</form>  

	</center>


</body>