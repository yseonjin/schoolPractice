<?include('top.php')?>

<section>

    <br><br>
    <font size="5px" align="center">학생 성적 입력</font>
    <table border="1" align="center" width="350" height="100">
    <form name="f1" onSubmit="return functionK();" action="school_ok.php" method="GET">
            <tr>
            <td align="center" width="80">
                <b>학&emsp;번</b>
            </td>
            <td>
                <input type="text" name="sno"></td>
        </tr>
        <tr>
            <td align="center">
                <b>성&emsp;명</b>
            </td>
            <td>
                <input type="text" name="sname"></td>
        </tr>
        <tr>
            <td align="center">
                <b>국&emsp;어</b>
            </td>
            <td>
                <input type="number" name="kor"></td>
        </tr>
        <tr>
            <td align="center">
                <b>영&emsp;어</b>
            </td>
            <td>
                <input type="number" name="eng"></td>
        </tr>
        <tr>
            <td align="center">
                <b>수&emsp;학</b>
            </td>
            <td>
                <input type="number" name="math"></td>
        </tr>
        <tr>
            <td align="center">
                <b>역&emsp;사</b>
            </td>
            <td>
                <input type="number" name="hist"></td>
        </tr>

        <tr>
            <td align="center" colspan="2">
                <input type="submit" value="성적저장"></td>
        </tr>
    </table>
    </form>
</section>

<?include('bottom.php')?>