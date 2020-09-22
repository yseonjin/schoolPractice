<?include('top.php');?>

<?
$con =mysqli_connect("localhost","root","world63","majustory");
$query ="select * from examtbl";
$result = mysqli_query($con, $query);
?>

<section>
<br><br> 각 합계 클릭 : 기록삭제<br>
         각 번호 클릭 : 기록수정<br><br>
         <br><br>주의@@ 학번수정불가!! <br><br>

    <table border=1 align="center">
        <tr>
            <td>
                학번
            </td>
            <td> 
                이름
            </td>
            <td>
                국어
            </td>
            <td>
                영어
            </td>
            <td>
                수학
            </td>
            <td>
                역사
            </td>
            <td>
                평균
            </td>
            <td>
                합계
            </td>
        </tr>

<?
$cnt=0;
while( $data = mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
    $sum = $data['kor']+ $data['eng']+ $data['math'] +$data['hist'];
    $avg = round($sum/4,2);
    ?>
        <tr>
            <td>
                <a href=./modi.php?sno=<?=$data['sno']?>>
                <?=$data['sno']?></a>
            </td>
            <td> 
                <?=$data['sname']?>
            </td>
            <td>
                <?=$data['kor']?>
            </td>
            <td>
                <?=$data['eng']?>
            </td>
            <td>
                <?=$data['math']?>
            </td>
            <td>
                <?=$data['hist']?>
            </td>
            <td>
                <?=$avg?>
            </td>
            <td>
                <a href=./delete.php?sno=<?=$data['sno']?>>
                <?=$sum?></a>
            </td>
        </tr>
        <?$cnt=$cnt+1;?>
<? } ?>

<tr>
<td colspan=8 > 전체학생수 : <?=$cnt?> </td>
</tr>
<?
mysqli_close($con);
?>
    </table>

</section>


<?include('bottom.php');?>
