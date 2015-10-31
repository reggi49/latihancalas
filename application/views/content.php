<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Latihan Calas</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>index.php/admin/berita">Berita</a></li>
            <li><a href="#">Manage User</a></li>
			<li><a href="<?php echo base_url();?>index.php/admin/logout">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
<h1>Berita</h1>
<ul>
<li><?php echo anchor('admin/tampil_berita', 'Tampil berita');?></li>
<li><?php echo anchor('admin/tambah_berita', 'Tambah berita');?></li>
</ul>
</body>
</html>
