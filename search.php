<!doctype html>
<html>
<head>
    <title>UNIUS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        /* Style the header */
        .header {
            background-color: black;
            background-image: url("image/0101.PNG");  /* image안에있는 사진이름 */
            background-position: 50% 50%;
            padding: 50px;     /* 숫자가커질수록 이미지넣는부분의 공간이 넓어져용(세로로) */
            text-align: center;
        }


        /* Create three unequal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
        }

        /* Left and right column */
        .column.side {
            width: 20%;
        }

        /* Middle column */
        .column.middle {
            width: 60%;
            text-decoration: none;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        input[type=phone]{
            width: 10%;

            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        #cl-dashboard{
            display: none;
        }


        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: center;
            padding: 9px;
        }

        .btnn {
            border: none;
            background-color: inherit;
            padding: 0px 0px;
            font-size: 14px;
            cursor: pointer;
            display: inline-block;
        }

        .download {color: black;}

    </style>
</head>

    <body>

    <?php
    mysql_connect('localhost','root','dlgkwjd1');
    mysql_select_db('unius');
	

    $day = date("Y-m-d");
    $id = $_GET['id'];
    $aname = $_GET['name'];
    $wname = $_GET['name1'];
    $cloth = $_GET['cloth'];
    $color = $_GET['color'];
    $phone = $_GET['phone1']."-".$_GET['phone2']."-".$_GET['phone3'];
    $image = $_POST['load'];

    mysql_query($sql);
    mysql_close($sql);

    $no = 1;
    while($row = mysql_fetch_array($result)){
        $no++;
    }

    ?>

    <div class="header">

    </div>

    <div class="row">
        <div class="column side">
        </div>
        <form method="get" action="search.php">
            <div class="column middle">

                <select name="WHERE">
                    <option value="all">검색영역</option>
                    <option value="">----------</option>
                    <option value="day">일시</option>
                    <option value="id">아이디</option>
                    <option value="artid">아티스트명</option>
                    <option value="artname">작품명</option>
                    <option value="phone">연락처</option>
                </select>

                <input type="text" name="sh">
                <input type="submit" value="검색">
                <button type="submit" class="button">전체보기</button>

                <br><br>

                <div style="overflow-x:auto;">
                    <table name="uu">
                        <tr>
                            <th>No.</th>
                            <th>일시</th>
                            <th>아이디</th>
                            <th>아티스트명</th>
                            <th>작품명</th>
                            <th>제품</th>
                            <th>제품색깔</th>
                            <th>연락처</th>
                            <th>작품이미지</th>
                            <th>다운로드</th>

                            <?php
							$sh = $_GET['sh'];
							if($_GET['WHERE']=="all"){
								$sql = "SELECT * FROM uni";
							}
							else if($_GET['WHERE']=="day"){
								$sql = "SELECT * FROM uni where day like '%$sh%'";
							}
							else if($_GET['WHERE']=="id"){
								$sql = "SELECT * FROM uni where id like '%$sh%'";
							}
							else if($_GET['WHERE']=="artid"){
								$sql = "SELECT * FROM uni where aname like '%$sh%'";
							}
							else if($_GET['WHERE']=="artname"){
								$sql = "SELECT * FROM uni where wname like '%$sh%'";
							}
							else if($_GET['WHERE']=="phone"){
								$sql = "SELECT * FROM uni where phone like '%$sh%'";
							}
							
								$result = mysql_query($sql);
								while ($row = mysql_fetch_array($result)){
							?>
									<tr>
									<td><??></td>
									<td><?=$row['day']?></td>
									<td><?=$row['id']?></td>
									<td><?=$row['aname']?></td>
									<td><?=$row['wname']?></td>
									<td><img src="<?=$row['cloth']?>" width="40" height="40"></td>
									<td><img src="<?=$row['color']?>" width="40" height="40"></td>
									<td><?=$row['phone']?></td>
									<td><??></td>
									<td><a href="<?php echo $file[$i]['href']; ?>" download button class="btnn download">Download</a></button></td>
									</tr>
								<?php
								}
							?>
                        </tr>
                    </table>
                </div>

            </div>
    </div>

    <?php
    function page_nav($total,$scale,$p_num,$page,$query)
    {
        //$linerPerPage=10;
        //$blockPerScreen=5;
        global $PHP_SELF;

        $total_page = ceil($total/$scale);
        if (!$page) $page = 1;
        $page_list = ceil($page/$p_num)-1;

        // 페이지 리스트의 첫번째가 아닌 경우엔 [1]...[prev] 버튼을 생성한다.
        if ($page_list>0)
        {
            $navigation = "<a href='$PHP_SELF?page=1&$query'>[1]</a> ... ";
            $prev_page = ($page_list-1)*$p_num+1;
            $navigation .= "<a href='$PHP_SELF?page=$prev_page&query'>[prev]</a> ";
        }

        // 페이지 목록 가운데 부분 출력
        $page_end=($page_list+1)*$p_num;
        if ($page_end>$total_page) $page_end=$total_page;

        for ($setpage=$page_list*$p_num+1;$setpage<=$page_end;$setpage++)
        {
            if ($setpage==$page) {
                $navigation .= "<b>[$setpage]</b> ";
            } else {
                $navigation .= "<a href='$PHP_SELF?page=$setpage&$query'>[$setpage]</a> ";
            }
        }

        // 페이지 목록 맨 끝이 $total_page 보다 작을 경우에만, [next]...[$total_page] 버튼을 생성한다.
        if ($page_end<$total_page)
        {
            $next_page = ($page_list+1)*$p_num+1;
            $navigation .= "<a href='$PHP_SELF?page=$next_page&$query'>[next]</a> ";
            $navigation .= "... <a href='$PHP_SELF?page=$total_page&$query'>[$total_page]</a>";
        }

        return $navigation;
    }
    ?>

    <?php
    $total_data=100;
    $num_per_page=10;
    $page_per_list=10;
    $query="id=day";

    $nav=page_nav($total_data,$num_per_page,$page_per_list,$page,$query);

    echo $nav;
    echo ("<form action=$PHP_SELF>
                        페이지 : <input type=text name=page size=4>
                        <input type=submit value='이동'></form>
        ");
    ?>

    <div class="column side">
    </div>
    </div>



    </body>
</html>