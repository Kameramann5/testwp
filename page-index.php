<?php
/*
Template Name: Мой шаблон страницы
*/
?>

<!-- Здесь html/php код шаблона -->
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>К Телеком</title>
  <link rel="icon" type="image/png"  href="<?php  echo get_template_directory_uri()  ?>/assets/img/favicon.png">
  <!-- Bootstrap CSS Files -->
  <link href="<?php  echo get_template_directory_uri()  ?>/assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php  echo get_template_directory_uri()  ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Custom CSS File -->
  <link href="<?php  echo get_template_directory_uri()  ?>/assets/css/style.css" rel="stylesheet">
 <!-- owl File -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css'>
 <!-- fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
</head>
<body>
  <!----------------- header section----------------->
  <header id="header" class="header fixed-top">
		<div class="container-fluid container-lg d-flex align-items-center justify-content-between">
		  <a href="/" class="logo d-flex align-items-center">
			<img src="<?php  echo get_template_directory_uri()  ?>/assets/img/Logo-1.png" alt="Логотип">
		  </a>
		  <nav id="navbar" class="navbar">
			<i class="bi bi-list mobile-nav-toggle"></i>
		  </nav>
		</div>
	  </header>
  <!----------------- header section ends----------------->
  <!----------------- hero section starts----------------->
  <main><article> 
  <section class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
   
          <h1>Экономия нервов и денег
            <br> — интернет К-Телеком
          </h1>
         
          <ul class="heroul">
            <li>5 тарифов для многоквартирных и 4 для частных домов
       
              </li>
            <li>
              безлимит подключенных устройств
            
              </li>
            <li>
              комфортная поддержка 24/7
              </li>
          </ul>
          <div>
            <div class="text-center text-lg-start">
              <a href="#startfree"
                class="btn-get-started  d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Подробнее</span>
              </a>
          
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img">
          <img src="<?php  echo get_template_directory_uri()  ?>/assets/img/308-03.png" class="img_hero" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-----------------hero section ends----------------->
 
    <!-----------------tarif section starts----------------->
    <section class="tarif">
      <div class="container">
          <h2>Тарифные планы</h2>
          <div class="owl-carousel owl-theme">
               <?php
global $post;
$args = array( 'post_type'=>'tarif', 'post_status'=>'publish', 'posts_per_page'=>-1);
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);   ?>
		       <div class="item item-card">
            <p class="tarif_name">
				<?php the_field('name'); ?>
				</p>
            <p class="tarif_name2">Скорость интернета</p>
            <p class="tarif_speed">до 40 Мбит/с</p>
            <p class="tarif_desc">
				<?php the_field('desc'); ?></p>
           <div class=" wpcf7-acceptance">  

            <input type="checkbox" class="tarif_checkbox">
            <p class="tarif_check">ТВ + 100 ₽<br>(пакет “Базовый”)</p>
          </div>
            <span class="tarif_price">	<?php the_field('price'); ?> ₽ </span>
            <span class="tarif_mounth">в месяц</span>
            <p class="tarif_dop">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
            </p>
            <a href="#" class="tarif_button">Выбрать тариф</a>
            </div>
<?php    }    wp_reset_postdata();   ?>
        </div>
      </div>
    </section>
    <!-----------------tarif section ends----------------->
    <!-----------------connect section ends----------------->
    <section class="connect">
      <div class="container">
        <h2>Подключиться просто!</h2>
<div class="connect_service">
  <a href="#">Интернет</a>
  <a href="#">Интернет + ТВ</a>
  <a href="#">Телефония</a>
  <a href="#">Видеонаблюдение</a> </div>
 		<?php //echo do_shortcode('[contact-form-7 id="40" title="Contact form 1"]');  ?>

  <form   method="post" action="" name="contact-me">
    <input type="text" placeholder="Имя" name="name" class="connect_input_name" required>
    <input type="tel" placeholder="Номер телефона"  name="tel" class="connect_input_tel" required>
	      <input type="hidden" name="action" value="send_form" style="display: none; visibility: hidden; opacity: 0;">
    <input type="submit" placeholder="Отправить" class="connect_input_submit">
    <div class=" wpcf7-acceptance">  
      
      <input type="checkbox" class="tarif_checkbox" checked>
      Я соглашаюсь на условия    <a target="_blank" href="/politika-konfidencialnosti/" rell="nofollow" id="consent">обработки данных</a>
    </div>
   
  </form>
<div id="result"></div>


      </div>  </section>
    <!-----------------connect section ends----------------->
  
   
  </article>
  </main>
  
    <!-----------------footer section starts----------------->
    <footer >  
      <div class="container footer-container">   
        <div class="row">
     
       
        <div class="col footer_col_left">   
        <img src="<?php  echo get_template_directory_uri()  ?>/assets/img/Logo-1.png" alt="Логотип">
       
       <p>© 2018–2022 ООО «К-Телеком»</p> </div>

      <div class="col footer_col_right">   
       <img src="<?php  echo get_template_directory_uri()  ?>/assets/img/network/1.svg" alt="Instagram">
       <img src="<?php  echo get_template_directory_uri()  ?>/assets/img/network/2.svg" alt="YouTube">
       <img src="<?php  echo get_template_directory_uri()  ?>/assets/img/network/3.svg" alt="VK"> </div>
     
    </div>
  </div>
  </footer>
    <!-----------------footer section ends----------------->
    <!-- scripts -->
    <!--  js file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php  echo get_template_directory_uri()  ?>/assets/js/main.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js'></script>
    <script src="<?php  echo get_template_directory_uri()  ?>/assets/js/owl.js"></script>
 <script>
	jQuery( 'form[name="contact-me"]' ).on( 'submit', function() {
    var form_data = jQuery( this ).serializeArray();
    //Здесь мы добавляем наш одноразовый номер (тот, который мы создали в нашем functions.php. WordPress нужен этот код, чтобы проверить, исходит ли запрос из действительного источника.
    form_data.push( { "name" : "security", "value"  } );
    // Вот петиция ajax.
    jQuery.ajax({
        url : ajax_url, //Вот наша конечная точка WordPress AJAX.
        type : 'post',
        data : form_data,
        success : function( response ) {
            //Вы можете создать что-то здесь, чтобы обработать возврат сообщения
            alert( response );
        },
        fail : function( err ) {
            //Вы можете создать что-то здесь, чтобы обработать ошибку, если что-то пойдет не так при выполнении запроса AJAX.
            alert( "There was an error: " + err );
        }
    });
    //Этот возврат предотвращает обновление страницы событием отправки.
    return false;
});
	</script>
</body>
</html>

