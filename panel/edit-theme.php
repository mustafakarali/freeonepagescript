<?php require "includes/head.php"?>
<?php
    $query = $db->prepare("SELECT * FROM theme");
    $query->execute();
    $fetchAll = $query->fetchAll(PDO::FETCH_OBJ);
?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Temayı Düzenle</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <form action="<?=URL . 'panel/post-theme'?>" method="post" enctype="multipart/form-data" class="form-horizontal style-form">
                            <?php foreach($fetchAll as $item): ?>
                                <div class="form-group">
                                    <label class="control-label col-md-2"><?=$item->field_name?></label>
                                    <div class="col-md-10">
                                        <?php if ($item->type == "image"): ?>
                                            <input type="file" name="<?=$item->name?>" class="form-control" >
                                        <?php else: ?>
                                            <input type="text" name="<?=$item->name?>" value="<?=$item->value?>" class="form-control" required>
                                        <?php endif ?>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                            <div class="form-group">
                                <div class="col-md-12 float-right">
                                    <button class="btn btn-primary col-md-12" name="save">Kaydet</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->



<?php require "includes/foot.php"?>
<?php if (isset($_GET["success"])): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Başarılı',
            text: 'Hepsi Başarıyla Güncellendi'
        })
    </script>
<?php endif; ?>