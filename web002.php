<!DOCTYPE html>
<html lang="en">
<head>
    <title>UNIUS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">

    <script>
        function doOpenCheck(chk) {
            var obj = document.getElementsByName("cb");
            for(var i=0;i<obj.length;i++){
                if (obj[i] != chk) {
                    obj[i].checked = false;
                }
            }
        }
    </script>

    <script>
        function doOpenCheck(chk) {
            var obj = document.getElementsByName("bb");
            for(var i=0;i<obj.length;i++){
                if (obj[i] != chk) {
                    obj[i].checked = false;
                }
            }
        }
    </script>

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
            width: 35%;
        }

        /* Middle column */
        .column.middle {
            width: 30%;
            text-decoration: none;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column.side, .column.middle {
                width: 100%;
            }
        }


        .button {
            border-radius: 50%;
            background-color: orange;
            border: none;
            color: white;
            text-align: center;
            font-size: 20px;
            padding: 15px;
            width: 100px;
            /*margin: 10px;*/
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-decoration: none;
        }

        /* The grid: Four equal columns that floats next to each other */
        .column1 {
            float: left;
            width: 10%;
            padding: 8px;
            margin: 3px;
        }

        /* Clear floats after the columns */
        .row1:after {
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

        input[type="radio"][id^="cb"] {
            display: none;
        }

        input[type="radio"][id^="bb"] {
            display: none;
        }

        label img {
            height: 40px;
            width: 40px;
            transition-duration: 0.1s;
            transform-origin: 50% 50%;
        }

        :checked + label {
            border-color: #eee;
        }

        :checked + label img {
            transform: scale(1.2);
            box-shadow: 0 0 3px #333;
            z-index: -1;
        }


    </style>
</head>
<body>

<div class="header">

</div>


<div class="row">
    <div class="column side">
    </div>
    <form action="002.php" >
        <div class="column middle">

            <h4><b>아이디</b></h4>

            <input type="text" name="id"  value="<?php echo $_GET["id"]; ?>"  readonly ><br><br>

            <h4><b>아티스트명</b></h4>
            <input type="text" name="name" required>

            <br><br>
            <h4><b>작품명</b></h4>
            <input type="text" name="name1" required>


            <br><br>
            <h4><b>작품 제출</b></h4>
            <h5>디자인 제출(해상도: 최대, 규격(최소) 1,080 X 1,080px)</h5>
            <h5>*자신의 저작권의 창작들만 제출 가능 합니다.</h5>
            <br>

            <div ng-app="DemoApp">
                <div class="container" ng-controller="DemoController">

                        <input name="load" type="file"  value="load" button class="btn"accept="image/png, image/jpg, image/psd, image/pdf"
                               onchange="angular.element(this).scope().loadFile(event)" required></i>

                        <div class="upload-cta text-center text-muted">
                            이미지 첨부 시 이미지
                        </div>

                </div>
            </div>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>

            <script  src="js/index.js"></script>



            <br>

            <h4><b>제품</b></h4>
            <div class="row1">
                <div class="column1">
                    <input name="cb" type="radio" id="cb1" value="cb1" />
                    <label for="cb1"><img src="image/0101.PNG" width="40" height="40"></label>
                </div>
                <div class="column1">
                    <input name="cb" type="radio" id="cb2" value="cb2" />
                    <label for="cb2"><img src="image/옷.PNG" width="40" height="40"></label>
                </div>
                <div class="column1">
                    <input name="cb" type="radio" id="cb3" value="cb3" />
                    <label for="cb3"><img src="image/aaa.PNG" width="40" height="40"></label>
                </div>
                <div class="column1">
                    <input name="cb" type="radio" id="cb4" value="cb4" />
                    <label for="cb4"><img src="image/hd.png" width="40" height="40"></label>
                </div>
                <div class="column1">
                    <input name="cb" type="radio" id="cb5" value="cb5" />
                    <label for="cb5"><img src="image/n.PNG" width="40" height="40"></label>
                </div>
            </div>


            <h4><b>색깔</b></h4>
            <div class="row1">
                <div class="column1">
                    <input name="bb" type="radio" id="bb1" value="bb1" />
                    <label for="bb1"><img src="image/red.PNG" width="40" height="40"></label>
                </div>
                <div class="column1">
                    <input name="bb" type="radio" id="bb2" value="bb2" />
                    <label for="bb2"><img src="image/org.PNG" width="40" height="40"></label>
                </div>
                <div class="column1">
                    <input name="bb" type="radio" id="bb3" value="bb3" />
                    <label for="bb3"><img src="image/yellow.PNG" width="40" height="40"></label>
                </div>
                <div class="column1">
                    <input name="bb" type="radio" id="bb4" value="bb4" />
                    <label for="bb4"><img src="image/green.PNG" width="40" height="40"></label>
                </div>
                <div class="column1">
                    <input name="bb" type="radio" id="bb5" value="bb5" />
                    <label for="bb5"><img src="image/black.PNG" width="40" height="40"></label>
                </div>
            </div>


            <br>


            <h4><b>연락처</b></h4>
            <h6>*가입 된 연락처와 불 일치 시, 등록되지 않습니다.</h6>
            <input type="phone" name="phone1" required> - <input type="phone" name="phone2" required> - <input type="phone" name="phone3" required>



            <br><br>
            <h4><b>동의 후 제출*</b></h4>
            <h6>*반드시 읽은 후 체크 해주시길 바랍니다.</h6>

            <input type="checkbox" name="1" value="1" required>
            아티스트 또는 작품 체택 시, 아티스트님의 연락처를 활용하는 것을 동의합니다.
            <br>
            <input type="checkbox" name="2" value="2"required>
            <a href="http://www.naver.com">법적인 조항</a>에 동의하고 작품 체택 후 판매율 부진 시 판매되지 않을 수 있음을 동의합니다.
            <br>

            <br><br><br>
            <button type="submit" class="button">FINISH</button>

    </form>




</div>



</div>

<div class="column side">
</div>
</div>

</body>
</html>
