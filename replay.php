<?php 
include('header.php');
include('connect.php');
$id = $_GET['id'];
$sql = "SELECT *FROM tb_gameplay WHERE id = $id";
$query = mysqli_query($con,$sql);
$result = mysqli_fetch_assoc($query);
?>
<div class="container">
    <div class="text-center my-2">
        <h4><b>ตารางแบบ <?=$result['r_table']. 'X'. $result['r_table']?></b></h4>
        <button class="btn btn-secondary" id="play">เล่น</button>
        <button class="btn btn-warning" onclick="location.reload()">Refresh</button>
        <a href="index.php" class="btn btn-danger" >ย้อนกลับ</a>
    </div>
    <div class="text-center my-5">
    <?php if($result['r_win'] == 0){ ?>
        <h4><b>Draw</b></h4>
    <?php }elseif($result['r_win'] == 1){?>
        <h4 class="text-success"><b>Player X win</b></h4>
    <?php }else{ ?>
        <h4 class="text-success"><b>Player O win</b></h4>
    <?php } ?>
    </div>
    <div class=" row d-flex justify-content-center col-6 mx-auto my-5">
        <table class="table table-bordered"style='border:solid 5px'>
            <tbody>
                <?php 
                $x = $result['r_table']+1;
                for($r = 1 ; $x > $r ; $r ++){?>
                <tr>
                    <?php for($i = 1; $x > $i ; $i++){?>
                        <td width="100px" height="100px" class="show" data-id="<?=$r?><?=$i?>">
                            <div class="text-center" id="<?=$r?><?=$i?>"></div>
                        </td>
                    <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include('script.php');
?>
<script>
    var point = <?=$result['r_point']?>;
    $('#play').click(function(){
            point.forEach((item,index)=>{
            setTimeout(function(){
                if(index %2==1){
                    $('#'+item).addClass('choose').html('<i class="fa-solid fa-o fa-5x x"></i>')
                }else{
                    $('#'+item).addClass('choose').html('<i class="fas fa-times fa-5x x"></i>')
                }
            },index*1000)
        })
    })
</script>
