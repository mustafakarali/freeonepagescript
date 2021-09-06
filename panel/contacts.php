<?php require "includes/head.php"?>
<?php
    $contacts = $db->prepare("SELECT * FROM contacts");
    $contacts->execute();
    $contacts = $contacts->fetchAll(PDO::FETCH_ASSOC);
?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Gelen İletişim Formları</h3>
        <div class="row">
            <div class="col-lg-12">
                <?php if (count($contacts) > 0): ?>
                    <?php foreach ($contacts as $contact): ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="b-<?=$contact['id']?>">
                            <div class="custom-box">
                                <div class="servicetitle">
                                    <h4><?=$contact["first_name"]?>  <?=$contact["last_name"]?> </h4>
                                    <hr>
                                </div>
                                <div class="icn-main-container">
                                    <p><?=$contact["message"]?></p>
                                </div>

                                <ul class="pricing">
                                    <li><?=$contact["email"]?></li>
                                    <li><?=$contact["date"]?></li>
                                </ul>
                                <button class="btn btn-danger" onclick="removeBlog(<?=$contact['id']?>)">Sil</button>


                            </div>
                            <!-- end custombox -->
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <center style="margin: 200px auto;"><h3>Burada Herhangi Bir Veri Yok</h3></center>
                <?php endif ?>
                <!-- end col-4 -->
            </div>
            <!--  /col-lg-12 -->
        </div>
        <!--  /row -->
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->


<?php require "includes/foot.php"?>

<script type="text/javascript">
    function removeBlog(id){
        $.ajax({
            url : "<?=URL.'panel/ajax'?>",
            type : "POST",
            data : {deleteContact : 1,id : id},
            success : function (res){
                if (res == 1){
                    $("#b-"+id).hide("slow",function(){
                        this.remove();
                    });
                }else{
                    alert("Silinirken Bir Sorun Oluştu!!");
                }
            }
        });
    }

</script>
