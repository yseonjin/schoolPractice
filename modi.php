<?include('top.php')?>


<section>
<? 
$sno=$_GET['sno'];
$con=mysqli_connect("localhost","root","world63","majustory");
$query="select * from examtbl where sno='$sno'";
$result= mysqli_query($con,$query);
$data =mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<br><br>
학생 성적 수정
<br><br>
<table border=1 align="center"  width=400 height=100>
<form name="f2" onSubmit="return functionK();" action="modi_ok.php" method="GET" >
    <tr>
        <td> 학 번
        </td>
        <td><input type=text name=sno value=<?=$data['sno']?>>
        </td>
    </tr>
    <tr>
        <td>  이 름
        </td>
        <td><input type=text name=sname value=<?=$data['sname']?>>
        </td>
    </tr>
    <tr>
        <td> 국 어
        </td>
        <td><input type=text name=kor value=<?=$data['kor']?>>
        </td>
    </tr>
    <tr>
        <td> 영 어
        </td>
        <td><input type=text name=eng value=<?=$data['eng']?>>
        </td>
    </tr>
    <tr>
        <td> 수 학
        </td>
        <td><input type=text name=math value=<?=$data['math']?>>
        </td>
    </tr>
    <tr>
        <td> 역 사
        </td>
        <td><input type=text name=hist value=<?=$data['hist']?>>
        </td>
    </tr>
    <tr>
        <td colspan=2>
        <input type="submit" name="submit" value="저장하기" />
        </td>
    </tr>
   

</form>
</table>

</secction>

<?include('bottom.php')?>
