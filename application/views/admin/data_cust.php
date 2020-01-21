<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data User</h1>
		</div>
	</section>
	<div class="container-fluid">
    <div class="row">
      <div class="col-md-8">

      </div>
      <div class="col-md-4 text-right">
        <form action="" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data.." name="keyword" autocomplete="off" autofocus>
            <div class="input-group-append">
              <input type="submit" class="btn btn-primary btn-sm" name="cari">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md">
        <h5>Hasil: <?= $total_rows ?></h5>
      </div>
    </div>
		<table class="table table-bordered table-hover table-sm">
			<thead>
				<tr>
					<th width="50px">#</th>
					<th>Nama User</th>
					<th>E-mail</th>
					<th>Telepon/HP</th>
					<th>Alamat</th>
					<th width="100px">Aksi</th>
				</tr>
			</thead>
			<tbody>
        <?php if (empty($cust)) : ?>
          <tr>
            <td colspan="6" height="50px">
              <div class="alert alert-danger text-center" role="alert">data not found!</div>
            </td>
          </tr>
        <?php endif; ?>
			  <?php foreach ($cust as $c) : ?>
				<tr>
					<th><?php echo ++$start ?></th>
					<td><?php echo $c->nama_user ?></td>
					<td><?php echo $c->email ?></td>
					<td><?php echo $c->telp ?></td>
					<td><?php echo $c->alamat ?></td>
					<td>
						<a href="<?php echo base_url('admin/data_cust/detail_cust/'. $c->id_user) ?>" class="btn btn-sm btn-info"><i
								class="fas fa-eye fa-sm"></i></a>
						<a href="<?php echo base_url('admin/data_cust/detail_cust/'. $c->id_user) ?>"
							class="btn btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
					</td>
				</tr>
			  <?php endforeach; ?>
			</tbody>
		</table>
    <div class="row">
      <div class="col-md-6">
          <?php echo $pagination ?>
      </div>
    </div>
	</div>
</div>
