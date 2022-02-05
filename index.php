<?php
include_once "header.php";


$Banner[1] = array(
    'source' => "images/ArslanagicaBridge-MinexApartments.jpg",
    'link' => "https://templated.co",
    'text1' => "Trebinje",
    'text2' => "Minex Apartments",
);
$Banner[2] = array(
    'source' => "images/Wine-MinexApartments.jpg",
    'link' => "https://minexapartments.com/",
    'text1' => "Town of wine",
    'text2' => "Make it special",
);
$Banner[3] = array(
    'source' => "images/Cycling-MinexApartments.jpg",
    'link' => "https://minexapartments.com/",
    'text1' => "Cycling",
    'text2' => "Explore area",
);
// $Banner[4] = array(
//       'source' => "images/Trebinje-MinexApartments.jpg",
//       'link' => "https://templated.co",
//       'text1' => "Quite place for relaxion",
//       'text2' => "#Minex Apartments",
// );

//////////////// Banner

          echo '
          <!-- Banner -->
          	<section class="banner full">';
          foreach ($Banner as $key => $Value) {
              // code...
          		echo '<article>
          			<img src="' . $Value['source'] . '" alt="" />
          			<div class="inner">
          				<header>
          					<p>' . $Value['text1'] . '<a href="' . $Value['link'] . '"></a></p>
                    <h2>' . $Value['text2'] . '</h2>
          				</header>
          			</div>
          		</article>
              ';
          }
          echo '</section>';
//////// end banner




/////////////////////////////  Section 1
$Section[1] = array(
    'source' => "images/Bicycles.JPG",
    'link' => "https://minexapartments.com/",
    'text1' => "Rooms & Apartments",
    'text2' => "Minex Apartments",
    'text3' => "Experience calm in this bright, located between hills with awe-inspiring views. Relax on the patio surrounded by organic gardens of fruit, kivi, and figs trees. Enjoy the pool next to the fig trees followed with birds symphony.",
);
$Section[2] = array(
    'source' => "images/MinexGoogleMaps.JPG",
    'link' => "https://minexapartments.com/location.php",
    'text1' => "Maps and directions",
    'text2' => "How to find us",
    'text3' => "Explore area on your own way and enjoy all you what you think for.",
);
//
// $Section[3] = array(
//     'source' => "images/Vine Trebinje.jpg",
//     'link' => "https://templated.co",
//     'text1' => "Malo nargile nije na odmet!",
//     'text2' => "Samo jako uz muziku i pice",
//     'text3' => " Svaki dan jedna nargila organizmu snagu daje, tako da trebalo bi to da se plati a bogami i proba. Aj zdravo!",
// );
// $Section[4] = array(
//     'source' => "images/NenoNargila.jpg",
//     'link' => "https://templated.co",
//     'text1' => "Malo nargile nije na odmet!",
//     'text2' => "Samo jako uz muziku i pice",
//     'text3' => " Svaki dan jedna nargila organizmu snagu daje, tako da trebalo bi to da se plati a bogami i proba. Aj zdravo!",
// );


///////////////////////////////// Section II
echo '
  <!-- Section I -->
  <section id="one" class="wrapper style2">
  <div class="inner">
  <div class="grid-style">
';

foreach ($Section as $key => $value) {
  echo '
			<div>
				<div class="box">
					<div class="image fit">
						<img src="' . $value['source']  . '" alt="" />
					</div>
					<div class="content">
						<header class="align-center">
							<p>' . $value['text1']  . '</p>
							<h2>' . $value['text2']  . '</h2>
						</header>
						  <p>' . $value['text3']  . '</p>
						<footer class="align-center">
							<a href="' . $value['link']  . '" class="button alt">Detaljnije</a>
						</footer>
					</div>
				</div>
			</div>
  ';
};

echo '
					</div>
				</div>
			</section>
';


////////////////////////// Section II
echo'
    <!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Relaxing area</p>
						<h2>Gather in the peaceful backyard to barbeque beneath in shadow of kiwi</h2>
					</header>
				</div>
			</section>
';

////////// End section II


////////////////////////// Section III
$SectionIII[1] = array(
    'source' => "images/Hookah - Minex Apartments 3.jpg",
    'link' => "",
);
$SectionIII[2] = array(
    // 'source' => "https://scontent.ffjr1-1.fna.fbcdn.net/v/t31.0-8/13923457_1098272960265663_7946901985341774032_o.jpg?_nc_fx=ffjr1-1&_nc_cat=0&oh=746fafe46dd3ebcb1b1812fd510d8342&oe=5BC961D4",
    'source' => "images/Vine Trebinje II.jpg",
    'link' => "",
);
$SectionIII[3] = array(
    'source' => "images/Cycling - Minex Apartmnets - Monastery Tvrdos.jpg",
    'link' => "",
);
$SectionIII[4] = array(
    'source' => "images/Rent a Bicycle II.jpg",
    'link' => "",
);


echo '
		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">Apartments & Rooms</p>
						<h2>All in one place</h2>
					</header>
					<div class="gallery">
          ';
          foreach ($SectionIII as $key => $value) {
            echo '
              <div>
                <div class="image fit">
                  <a href="' . $value['link'] . '"><img src="' . $value['source'] . '" alt="" /></a>
                </div>
              </div>
            ';
          };

echo '
					</div>
				</div>
			</section>
';
////////// End Section III

?>

<?PHP
include_once "footer.php";
?>
