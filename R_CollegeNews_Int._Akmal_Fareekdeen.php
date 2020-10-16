<?php include 'header.php'; ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

#news
{

}
#news .news_details
{
    padding: 60px 0;
}
#news .news_details h2
{
	font-family: 'Abril Fatface', cursive;
    color: #222533;
    margin-bottom: 12px;
}
#news .news_details h2 span
{
	color:#f0ad4e;
}
#news .news_details h5
{
	font-family: 'Pacifico', cursive;
    color: #3c3f4b;
    font-size: 16px;
}

#news .news_details p
{

}

#news .news_details a
{
    padding: 10px 20px;
    background: #f0ad4e;
    color: #ffffff;
    text-transform: uppercase;
    border: none;
    display: inline-block;
    margin-top: 10px;
}

#news .news_details hr {
    margin-top: 16px;
    margin-bottom: 16px;
    border: 0;
    border-top: 1px solid #34374436;
}
</style>

<section id="service">
	<div class="container">
		<div class="row">
            <div class="row flex">
				<h2>COLLEGE NEWS</h2>
			</div>
            <div class="topic_underline"></div>



    <div class="row">
  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

  <section id="about">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="news_details">
					<h2>Int. Akmal Fareekdeen awarded at Interact Choice Awards 2020 </h2>
					<hr>
                    <img src="assets/rukshan/collegeNews/trinity-college-kandy_akmal-fareekdeen-awarded-at-the-interact-choice-awards-2020.jpg" alt="" class="img-responsive">
					<br>
                    <p>A member of the Museaus Interact Club, Int Akmal Fareekdeen was 
                      bestowed with 3 awards for his service and commitment in Interact related activities.</p>
                        <br>

                        <p>The Interact Choice Awards 2020 was organised by the Interact district council of Sri Lanka & Maldives.
                         We congratulate master Akmal Fareekdeen and wish him best for his future in Interact..</p>
                        <br>    

                        <p><h5>“Junior Award” – youngest member but very capable of taking up responsibilities</h5> 
                            <h5>“Adventurist” – Loves to take on the wild and always loves planning trips</h5>
                    </h5>“So You Think You Can Dance” – Has the most unique and craziest dancing moves</h5></P>
                        
                        

					<hr>
					
				</div>
			</div>
</section>


  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-bottom:50px">


  <div class="list-group">

  <a href="R_CollegeNewsDetails.php" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>A Site visit to the College Farm</u></b></h4>
</div>
<p>The Principal, Rev. Fr. Araliya Jayasundara OSB visited the College Farm on Wednesday, 7th October and met with the 
                farm manager Mr Chandra Amunugama...</p>
  </a>
  <a href="R_CollegeNews_Int._Akmal_Fareekdeen.php" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>Int. Akmal Fareekdeen awarded at Interact Choice Awards 2020</u></b></h4>
</div>
<p>A member of the Trinity Interact Club, Int Akmal Fareekdeen was bestowed with 3 awards for his 
                service and commitment in Interact related activities. The awards...</p>
  </a>
  <a href="R_CollegeNews_A_Gift_To_Museaus.php" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>A gift to Trinity: the Battle Map of the Dutch invasion of Kandy, 1765. </u></b></h4>
</div>
<p>In September last year, we did a review on Chamikara Pilapitiya’s book titled ‘Maha Nuwara Yugaye Apprakata Viththi’.
                 Mr Pilapitiya visited the College again with...</p>
  </a>

  <a href="R_CollegeNews_OSB_Instalation.php" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>The Installation Service of Rev. Fr. Araliya Jayasundara OSB </u></b></h4>
</div>
<p>The Installation Service of Rev. Fr. Araliya Jayasundara OSB BPh, BTh, MSc, MA, MPhil as Principal will be held on Friday,
                 September 25, 2020 at 8.30 am in the College Chapel...</p>
  </a>


  <a href="R_CollegeNews_Principal_Instalation.php" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>Installation Service of the Principal, Rev. Fr. Araliya Jayasundara OSB</u></b></h4>
</div>
<p>In 1924, when Rev. J. Mcleod Campbell was installed as the Principal of Trinity, there was a ceremonial 
                procession around the Kandy town. Such is the importance of the Installation...</p>
  </a>

  <a href="R_CollegeNews_Google_Earth.php" class="list-group-item list-group-item-action list-group-item-warning flex-column align-items-start">
    <div style="margin-bottom:10px">
      <h4><b><u>Google Earth presentations done by Grade 5 students! </u></b></h4>
</div>
<p>Among our 800+ classes on Microsoft Teams, we always find teachers using new methods of lesson delivery 
                which makes learning both fun and educational for boys! Something...</p>
  </a>
  

</div>


  </div>
</div>




<div class="clearfix"></div>

</div>
</section>


<script>

$('#myList a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('#myList a[href="#profile"]').tab('show') // Select tab by name
$('#myList a:first-child').tab('show') // Select first tab
$('#myList a:last-child').tab('show') // Select last tab
$('#myList a:nth-child(3)').tab('show') // Select third tab

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "None";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>

<?php include 'footer.php'; ?>