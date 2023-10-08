<!-- <style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.folder-section {
    height: 100px;
    width: 150px;
    float: left;
    margin: 30px 20px;
}

.img-files {
    width: 100px;
    height: 100%;
}

.text-files {
    text-align: center;
}
</style>

<?php 

$allData = scandir(getcwd());


    foreach($allData as $data){
        if("." !=$data && "." !=$data){
            if(is_dir($data)){

            ?>
            <div class="forler-section">
                <img class="img-files" src="assets/img/sagor.jpg"; alt="">
                <p class="text-files"><?php echo $data . "<br/>"; ?></p>
            </div>

            <?php 
            }elseif("php" == pathinfo($data, PATHINFO_EXTENSION)){
            ?>
            <div class="forler-section">
                <img class="img-files" src="assets/img/support.png"; alt="">
                <p class="text-files"><?php echo $data . "<br/>"; ?></p>
            </div>

            <?php   
            }elseif("php" == pathinfo($data, PATHINFO_EXTENSION)){
            ?>
              <div class="forler-section">
                <img class="img-files" src="assets/img/sagor.jpg";  alt="">
                <p class="text-files"><?php echo $data . "<br/>"; ?></p>
            </div>
            <?php
            }else{
            ?>
            <div class="forler-section">
                <img class="img-files" src="assets/img/sagor.jpg"; alt="">
                <p class="text-files"><?php echo $data . "<br/>"; ?></p>
            </div>
<?php
            }
        }
        
    }
?> -->