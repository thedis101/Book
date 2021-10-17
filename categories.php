<?php
include 'layout/include/header.php';
?>
<!-- Start banar  -->
<div class="banar">
    <div class="overlay"></div>
    <div class="lib-info text-center">
        <h4>حمّل عشرات الكتب مجاناً </h4>
        <p>من أجل نشر المعرفة والثقافة، وغرس حب القراءة بين المتحدثين باللغة العربية</p>
    </div>
</div>
<!-- End banar -->

<!-- Start categories -->
<div class="books">
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM categories ORDER BY categoryName DESC";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">
                                <a href="category.php?author=<?php echo $row['bookCat'];?>"> <?php echo $row['categoryName']; ?></a>
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="text-center">لاتوجد أي تصنيفات</div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- End categories -->

<!-- Start Footer -->
<?php
include 'layout/include/footer.php';
?>
