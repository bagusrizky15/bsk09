<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
    <style>
        label {
            display: none;
            font-family: Montserrat;
            font-size: 18px;
            color: #262626;
        }
    </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <h2 style="font-size: 30px; color: #262626;">Data Administrator</h2>
    <br>
    <table id="example" class="display" cellspacing="0" width="100%" border="0">
        <thead>
            <tr>
                <th>No</th>
                <th>nia</th>
                <th>Nama Admin</th>
                <th>Nomor Telepon</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>nia</th>
                <th>Nama Admin</th>
                <th>Nomor Telepon</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $no = 0;
            $query = mysqli_query($conn, "SELECT * FROM admin ORDER BY nia ASC");
            while ($row = mysqli_fetch_assoc($query)) {
                $no++;
            ?>
                <tr align="center">
                    <td><?php echo "$no" ?></td>
                    <td><?php echo $row['nia'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['telepon'] ?></td>
                    <td><?php echo $row['level'] ?></td>
                    <td>


                        <div class="d-grid gap-2 d-md-block">
                            <a href="admin.php?page=edit-admin-id&id=<?php echo $row['nia']; ?>">
                                <button><i class="fa fa-pencil"></i>Edit</button>
                            </a>
                            <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="../system/function/delete-admin.php?id=<?php echo $row['nia']; ?>">
                                <button type="button" class="btn btn-primary"><i class="fa fa-trash"></i>Hapus</button>
                            </a>
                        </div>



                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>

    <a href="admin.php?page=tambah-data-admin">
        <button><i class="fa fa-plus"></i></button>
    </a>

    <script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
    <script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>