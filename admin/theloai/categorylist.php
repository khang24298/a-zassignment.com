<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body"><h4 class="header-title">Category List</h4>
                    <div class="data-tables datatable-primary table-responsive">
                        <table id="dataTable2" border="2" class="table text-center">
                            <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category</th>
                                <th scope="col">UnsignedCategory</th>
                                <th scope="col">Hide(0)/Show(1)</th>
                                <th scope="col">Order</th>
                                <th scope="col"><i class="fa fa-plus-square"><a style="color: white; padding-left: 5px;"
                                                                                href="?p=theloai&q=themTheLoai">Add</a></i>
                                </th>
                            </tr>
                            </thead>
                            <tbody>                                <?php                                    $tl=DanhSachTheLoai (
                            );                                    while ($row=mysqli_fetch_array ( $tl
                            )) {                                ?>
                            <tr>
                                <th scope="row"><?php echo $row['idTL'] ?></th>
                                <td><?php echo $row['TenTL'] ?></td>
                                <td><?php echo $row['TenTL_KD'] ?></td>
                                <td><?php echo $row['AnHien'] ?></td>
                                <td><?php echo $row['ThuTu']?></td>
                                <td><i class="ti-trash"> <a id="modify"
                                                            href="?p=theloai&q=suaTheLoai&idTL=<?php echo $row['idTL'] ?>">Modify</a>
                                </i> <i class="ti-pencil-alt"> <a id="ease"
                                                                  href="?p=theloai&q=xoaTheLoai&idTL=<?php echo $row['idTL']                                            ?>">Delete</a>
                                </i></td>

                            </tr>
                            <?php                                    }                                ?></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>