
<?php
include "header.php";
include "db.php";

$records_per_page = 10;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $records_per_page;

$sql = "SELECT id, name, username, email,password FROM users LIMIT $offset, $records_per_page";
$result = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Users List</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                         <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                           <a href="adduser.php" class="text-dark">ADD NEW USER</a> 
                       </button>
                   </li>
               </ol>
           </div>
           <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">USERS</a></li>
                <li class="breadcrumb-item active">Users List</li>
            </ol>
        </div>
    </div>
</div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">State</th>
                                <th scope="col">Country</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Hobbies</th>
                                <th scope="col">Languages</th>
                                <th scope="col">File</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["name"] ?></td>
                                    <td><?php echo $row["username"] ?></td>
                                    <td><?php echo $row["email"] ?></td>
                                    <td><?php echo $row["password"] ?></td>

                                    <?php
                                    $meta_sql = "SELECT * FROM user_meta WHERE user_id = " . $row["id"];
                                    $meta_result = mysqli_query($conn, $meta_sql);
                                    $metadata = [];
                                    while ($meta_row = mysqli_fetch_assoc($meta_result)) {
                                        $metadata[$meta_row['meta_key']] = $meta_row['meta_value'];
                                    }
                                    ?>
                                    <td><?php echo $metadata["address"]?></td>
                                    <td><?php echo $metadata["city"]?></td>
                                    <td><?php echo $metadata["state"]?></td>
                                    <td><?php echo $metadata["country"]?></td>
                                    <td><?php echo $metadata["gender"]?></td>
                                    <td><?php echo $metadata["hobbies"]?></td>
                                    <td><?php echo $metadata["language"]?></td>
                                    <td><img src="<?php echo $metadata['file']?>" alt="not image" width="50"></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id'] ?>" style="color: green; padding-right: 10px; margin-right: 10px; height: 24px;"><i class="bi bi-pencil-square" style="font-size: 24px;"></i></a>
                                        <a href="delete.php?ids=<?php echo $row['id'] ?>" style="color: red; padding-right: 10px; height: 24px;"><i class="bi bi-trash" style="font-size: 24px;"></i></a>
                                    </td>


                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="pagination pagination-rounded justify-content-center mt-4">
                            <?php 

                            $total_sql = "SELECT COUNT(*) AS total FROM users";
                            $total_result = mysqli_query($conn, $total_sql);
                            $total_row = mysqli_fetch_assoc($total_result);
                            $total_pages = ceil($total_row['total'] / $records_per_page);

                            if ($page > 1) {
                                echo '<li class="page-item"><a href="?page='.($page - 1).'" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li>';
                            } else {
                                echo '<li class="page-item disabled"><span class="page-link"><i class="mdi mdi-chevron-left"></i></span></li>';
                            }


                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($i == $page) {
                                    echo '<li class="page-item active"><a href="?page='.$i.'" class="page-link">'.$i.'</a></li>';
                                } else {
                                    echo '<li class="page-item"><a href="?page='.$i.'" class="page-link">'.$i.'</a></li>';
                                }
                            }


                            if ($page < $total_pages) {
                                echo '<li class="page-item"><a href="?page='.($page + 1).'" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>';
                            } else {
                                echo '<li class="page-item disabled"><span class="page-link"><i class="mdi mdi-chevron-right"></i></span></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include "footer.php" ?>



