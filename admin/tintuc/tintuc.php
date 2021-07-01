<div class="main-content-inner">
    <div class="row">
    	<div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Article List</h4>
                    <a class="btn btn-primary float-right mb-2" href="?p=tintuc&q=themTinTuc">
                        <i class="fa fa-lg fa-plus-square"></i>
                    </a>

                    <div class="data-tables datatable-primary table-responsive">
                        <table id="dataTable2" border="2" class="table text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Order</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">UnsingedTitle</th>
                                    <th scope="col">Summary</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">urlImage</th>
                                    <th scope="col">Category Belong</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Views</th>
                                    <th scope="col">Created/Modified</th>
                                    <th scope="col text-left">
                                    </th>
                                </tr>
                            </thead>
                            <tbody >
                            	<?php
									$tintuc = DanhSachTinTuc();
									while ($row = mysqli_fetch_array($tintuc)) {
								?>
                                <tr class="overflow-hidden">
                                    <th scope="row"><div><?php echo  $row['idTin'] ?></div></td>
                                    <td><div><?php echo $row['ThuTu']?></div></td>
									<td><div><?php echo $row['Title']?></div></td>
									<td><div><?php echo $row['Title_KD']?></div></td>
									<td><div><?php echo $row['TomTat']?></div></td>
									<td><div id="content"><?php echo $row['Content']?></div></td>
									<td><div><?php echo $row['urlHinh']?></div></td>
									<td><div><?php echo $row['idTL']?></div></td>
									<td><div><?php echo $row['Author']?></div></td>
									<td><div><?php echo $row['SoLuotXem']?></div></td>
									<td><div><?php echo $row['Created_at']?></div></td>
                                    <td ><div class="row">
	                                    <i class="ti-trash col-6">
	                                        <a id="modify" href="?p=tintuc&q=suaTinTuc&idTin=<?php echo $row['idTin'] ?>">Modify</a>
	                                    </i>
	                                    <i class="ti-pencil-alt col-6">
	                                        <a id="ease" href="?p=tintuc&q=xoaTinTuc&idTin=<?php echo $row['idTin']?>">Delete</a>
	                                    </i>
                                        </div>
	                                </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Primary table end -->
    </div>
</div>
  