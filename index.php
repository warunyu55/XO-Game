<?php 
include('header.php');
include('connect.php');
include('check.php');
?>
<div class="container" id="page">
    <form action="" method="get">
        <label>จำนวนตาราง</label>
        <input type="number" class="col-6" name="qty" min="3" max="5" placeholder="น้อยสุด 3 มากสุด 5" value="<?=isset($_GET['qty'])&&!empty($_GET['qty']) ?"".$_GET['qty']."":""?>">
        <button>สร้าง</button>
    </form>
    <?php 
    if(isset($_GET['qty'])&&!empty($_GET['qty'])){
    $check = check($_GET['qty']);
    ?>
    <div class="text-center my-2">
        <h4><b>ตารางแบบ <?=$_GET['qty']. 'X'. $_GET['qty']?></b></h4>
    </div>
    <?php } ?>
    <div id="win" class="text-center text-success"></div>
    <div class="row">
        <div class="col-md-10 col-12">
            <div class=" row d-flex justify-content-center col-6 mx-auto my-5">
                <table class="table table-bordered"style='border:solid 5px'>
                    <tbody>
                        <?php 
                        $x = 0;
                        if(isset($_GET['qty'])&&!empty($_GET['qty'])){
                            $x = $_GET['qty']+1;
                        }
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
                <?php if(isset($_GET['qty'])&&!empty($_GET['qty'])){ ?>
                <button class="finish">Save Replay</button>
                <?php } ?>
            </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="text-center">
                <h4><b>Replay</b></h4>
            </div>
            <table class="table text-center">
                <thead>
                    <th>เกมที่</th>
                    <th>ดู Replay</th>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT *FROM tb_gameplay";
                        $query = mysqli_query($con,$sql);
                        $i =1;
                        foreach($query as $row){
                    ?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><a href="replay.php?id=<?=$row['id']?>" class="btn btn-primary">ดู</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include('script.php');
?>
<script>
    var table = <?=isset($_GET['qty'])&&!empty($_GET['qty']) ?"".$_GET['qty']."":"' '"?>;
    $(document).ready(function(){
            var point = [];
            var o = [];
            var ex = [];
            var win = [0];
            var check = <?=$check?>;
            $('.show').click(function(){
                var id = $(this).data('id');
                var choose = $('.choose').length;
                if($('#'+id).html() == ''){
                    if(choose % 2 == 1){
                        $('#'+id).addClass('choose').html('<i class="fa-solid fa-o fa-5x x"></i>')
                        point.push(id);
                        o.push(id);
                        for(i=0;check.length>i;i++){
                            var o_win = {};
                            o_win[i] = [];
                            for(x=0;check[i].length>x;x++){
                                if($.inArray(check[i][x],o) != -1){
                                        o_win[i].push($.inArray(check[i][x],o))
                                }
                            }
                            if(o_win[i].length == table){
                                $('.show').attr('disabled','disabled').off('click');
                                $('#win').html('<h4><b>Player O Win</b></h4>');
                                win.shift()
                                win.push(2)
                            }
                        }
                    }else{
                        $('#'+id).addClass('choose').html('<i class="fas fa-times fa-5x x"></i>')
                        point.push(id);
                        ex.push(id);
                        for(i=0;check.length>i;i++){
                            var ex_win = {};
                            ex_win[i] = [];
                            for(x=0;check[i].length>x;x++){
                                if($.inArray(check[i][x],ex)!= -1){
                                    ex_win[i].push($.inArray(check[i][x],o))
                                }
                            }
                            if(ex_win[i].length == table){
                                $('.show').attr('disabled','disabled').off('click');
                                $('#win').html('<h4><b>Player X Win</b></h4>');
                                win.shift()
                                win.push(1)
                            }
                        }
                    }
                }   
            })
            $('.finish').click(function(){
                    $.post("post.php",
                    {
                        point:point,
                        table:table,
                        win:win
                    },function(data, status){
                        location.reload()
                    });
                })   
    })
</script>
