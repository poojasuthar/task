<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/homewp.css">
		<link rel="stylesheet" type="text/css" href="css/home1.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="jquery-3.5.1.min.js"></script>
		
		
    
	<title>
		PHP WORK
	</title>
	<script>
	// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
	$(window).on("load resize ", function() {
	  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
	  $('.tbl-header').css({'padding-right':scrollWidth});
	}).resize();
	
	$(document).ready(function (){
		var btn = $("#button")
		
		$(window).scroll(function (){
			if ($(window).scrollTop() > 100){
				btn.addClass('show')
			} else {
				btn.removeClass('show')
			}
		})
		
		btn.on('click',function (e){
			e.preventDefault()
			$('html body').animate({
				scrollTop: 0
			})
		})
	})
	
	function showLecturework() {
            document.getElementById("lecture_work").style.display = "block";
            document.getElementById("Practicals").style.display = "none";
            document.getElementById("lecturebtn").style.backgroundColor = "#ED6A40";
            document.getElementById("practicalbtn").style.backgroundColor = "#8C6373";

        }
        function showPracticals() {
            document.getElementById("Practicals").style.display = "block";
            document.getElementById("lecture_work").style.display = "none";
            document.getElementById("lecturebtn").style.backgroundColor = "#8C6373";
            document.getElementById("practicalbtn").style.backgroundColor = "#ED6A40";
        }
		
		const countEl = document.getElementById('count');

            updateVisitCount();

            function updateVisitCount() {
                fetch('https://api.countapi.xyz/update/darshan/wep/?amount=1')
                .then(res => res.json())
                .then(res => {
                    countEl.innerHTML = res.value;
                })
            }
	
	</script>
	</head>
	<body>

		
		<h1 id="home" style="display:inline-block;color:bl;margin-left:1%"><img src="image/web.png" style="height:10%;margin-top:3%"> PROGRAMMING WORK</h1>
	
		<div id="" class="n1" style="height:6.5%; width:8%;color:white; float:right;">
			<p style=" text-align:center; font-size:130%;margin-top:12%;"><a href="#work">WORK</a></p>
		</div>	

			<div class="col-sm-12" style="background-image:url('image/p5.jfif');height:84%;padding:auto;margin-top:5px;">	
			<section class="main" id="work">
					<div class="btns"> 
						<button onclick="showLecturework()" id="lecturebtn">Lecture</button>
						<button onclick="showPracticals()" id="practicalbtn">Practicals</button>
					</div>

					<div class="lists" id="lecture_work">
						<table>
							<tr>
								<th> No. </th>
								<th> LECTURE WORK </th>
							</tr>
							<tr>
								<td> 1 </td>
								<td><a href="login.php" target="_blank" > Login form </a></td>
							</tr>
							<tr>
								<td> 2 </td>
								<td><a href="filehandling.php" target="_blank"> File handling </a></td>
							</tr>
							<tr>
								<td> 3 </td>
								<td><a href="register.php" target="_blank"> Registration form </a></td>
							</tr>
							<tr>
								<td> 4 </td>
								<td><a href="Lecture_Work/Tables_Layout/index.html" target="_blank"> Include and require </a></td>
							</tr>
							<tr>
								<td> 5 </td>
								<td><a href="Lecture_Work/JS_Dice_Game/index.html" target="_blank"> Uploding </a></td>
							</tr>
							<tr>
								<td> 6 </td>
								<td><a href="Lecture_Work/Audio_Video_Player/index.html" target="_blank"> Session </a></td>
							</tr>
							<tr>
								<td> 7 </td>
								<td><a href="Lecture_Work/Audio_Video_Player/index.html" target="_blank"> Cookie </a></td>
							</tr>
						</table>
					</div>

					<div class="lists" id="Practicals">
						<table>
							<tr>
								<th> No. </th>
								<th> PRACTICALS </th> </th>
							</tr>
							<tr>
								<td> 5.1 </td>
								<td><a href="Lecture_Work/Traffic_Light_JS/index.html" target="_blank"> php Partten program </a></td>
							</tr>
							<tr>
								<td> 5.2 </td>
								<td><a href="Lecture_Work/Traffic_Light_JS/index.html" target="_blank"> Factorial number </a></td>
							</tr>
							<tr>
								<td> 5.3 </td>
								<td><a href="Lecture_Work/Traffic_Light_JS/index.html" target="_blank"> Armstrong numbers </a></td>
							</tr>
							<tr>
								<td> 5.4 </td>
								<td><a href="Lecture_Work/Traffic_Light_JS/index.html" target="_blank"> Palindrome numbers </a></td>
							</tr>
							<tr>
								<td> 5.5 </td>
								<td><a href="Lecture_Work/Traffic_Light_JS/index.html" target="_blank"> php login authentication </a></td>
							</tr>
							<tr>
								<td> 5.6 </td>
								<td><a href="Lecture_Work/Traffic_Light_JS/index.html" target="_blank"> php login page </a></td>
							</tr>
							<tr>
								<td> 5.7 </td>
								<td><a href="Lecture_Work/Traffic_Light_JS/index.html" target="_blank"> Number of days between to two input dates </a></td>
							</tr>
						</table>
					</div>
				</section>
					</div>
					
					
					
					
					
					<a id="button" i class="arrow up"></a>

					
				</body>
			</html>