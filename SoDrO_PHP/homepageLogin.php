<?php
 include_once 'header.php';
?>

	<div class="homepageContent">
		<div class="top">
				<h2>Soft Drink Organizer</h2>
				<h3>a sip of ingeniosity.</h3>
				<div class="buttonCSV">
					<button class="generateCSV">Generate CSV</button>
				</div>
		</div>
		<div class="weeklyRankingAndStatistics">
			<div class="weeklyRanking">
				<h4> <i> Try Me! </i> </h4>
				<h5> Weekly Ranking </h5>
				<div class ="image-rating">
					<ul>
						<li> <img src="images/drinks/aquatique.jpg" id="pic" class="pic" alt="pic"> </li>
						<li> Aquatique </li>
					</ul>
					<ul>	
						<li> <img src="images/drinks/borsec.jpg" id="pic" class="pic" alt="pic"> </li>
						<li> Borsec </li>
					</ul>
					<ul>		
						<li> <img src="images/drinks/tusnad.jpg" id="pic" class="pic" alt="pic"> </li>
						<li> Tusnad </li>
					</ul>
				</div>
			</div>
			<div class="statistics">
				<h4> <i> Statistics </i> </h4>
				<ul class="questions">
					<li><a href='statisticPage.php?chart=category'>What type of drinks people prefer?</a> </li>
					<hr/>
					<li><a href='statisticPage.php?chart=price'>What prices attract people the most?</a> </li>
					<hr/>
					<li><a href='statisticPage.php?chart=availability'>Where do people like to buy from?</a> </li>
					<hr/>
					<li><a href='statisticPage.php?chart=restrictions'>What are people allergic to?</a> </li>
				</ul>
			</div>
		</div>
	</div>

<?php
 include_once 'footer.php';
?>