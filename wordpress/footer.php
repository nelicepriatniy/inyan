<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inyan
 */

?>

<footer>
  <div class="container">
    <div class="footer-r">
      <div class="top">
        <a href="<?php tof('ssylka_na_telegram') ?>" class="telegram">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 10L11 14L17 20L21 4L3 11L7 13L9 19L12 15" stroke="#000205" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
        <a href="mailto:<?php tof('pochta') ?>" class="mail">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M17 12.0001C17 12.5305 17.2107 13.0392 17.5858 13.4143C17.9609 13.7893 18.4696 14.0001 19 14.0001C19.5304 14.0001 20.0391 13.7893 20.4142 13.4143C20.7893 13.0392 21 12.5305 21 12.0001C20.9999 9.93862 20.2921 7.93971 18.995 6.33751C17.698 4.73532 15.8902 3.62696 13.8739 3.19774C11.8577 2.76853 9.75516 3.04449 7.91797 3.97947C6.08077 4.91445 4.62022 6.45178 3.78052 8.33444C2.94081 10.2171 2.77286 12.3309 3.30472 14.3226C3.83659 16.3142 5.03605 18.0629 6.70254 19.2763C8.36904 20.4896 10.4016 21.0942 12.4603 20.9887C14.519 20.8833 16.4792 20.0743 18.013 18.6971M17 12.0001C17 13.3261 16.4732 14.5979 15.5355 15.5356C14.5979 16.4733 13.3261 17.0001 12 17.0001C10.6739 17.0001 9.40215 16.4733 8.46447 15.5356C7.52678 14.5979 7 13.3261 7 12.0001C7 10.674 7.52678 9.40221 8.46447 8.46453C9.40215 7.52685 10.6739 7.00006 12 7.00006C13.3261 7.00006 14.5979 7.52685 15.5355 8.46453C16.4732 9.40221 17 10.674 17 12.0001ZM11 12.0001C11 12.2653 11.1054 12.5196 11.2929 12.7072C11.4804 12.8947 11.7348 13.0001 12 13.0001C12.2652 13.0001 12.5196 12.8947 12.7071 12.7072C12.8946 12.5196 13 12.2653 13 12.0001C13 11.7348 12.8946 11.4805 12.7071 11.293C12.5196 11.1054 12.2652 11.0001 12 11.0001C11.7348 11.0001 11.4804 11.1054 11.2929 11.293C11.1054 11.4805 11 11.7348 11 12.0001Z"
              stroke="#000205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
      <a href="<?php tof('ssylka_na_politiku_konfidenczialnosti') ?>" class="policy">
        Политика конфиденциальности
      </a>
    </div>
    <a href="/" class="footer-logo">
      <img src="<?php tof('logotip') ?>" alt="">
    </a>
    <div class="footer-l">
      <p class="info"><?php tof('rezhim_raboty') ?></p>
      <a class="info" href="tel:<?php tof('nomer_telefona') ?>"><?php tof('nomer_telefona') ?></a>
    </div>
  </div>
</footer>
<div class="offset"></div>
<div class="btm-menu">
  <a href="/" class="item <?php echo is_front_page() ? 'active' : ''; ?>">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M5 12H3L12 3L21 12H19" stroke="#000205" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
      <path
        d="M5 12V19C5 19.5304 5.21071 20.0391 5.58579 20.4142C5.96086 20.7893 6.46957 21 7 21H17C17.5304 21 18.0391 20.7893 18.4142 20.4142C18.7893 20.0391 19 19.5304 19 19V12"
        stroke="#000205" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      <path d="M10 12H14V16H10V12Z" stroke="#000205" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
    </svg>
  </a>
  <a href="/menyu" class="item <?php echo is_page('menyu') ? 'active' : ''; ?>">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M4 6H20M4 12H20M4 18H20" stroke="#000205" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" />
    </svg>
  </a>
  <a href="/contacts" class="item <?php echo is_page('contacts') ? 'active' : ''; ?>">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M9 11C9 11.7957 9.31607 12.5587 9.87868 13.1213C10.4413 13.6839 11.2044 14 12 14C12.7956 14 13.5587 13.6839 14.1213 13.1213C14.6839 12.5587 15 11.7957 15 11C15 10.2044 14.6839 9.4413 14.1213 8.87869C13.5587 8.31609 12.7956 8.00002 12 8.00002C11.2044 8.00002 10.4413 8.31609 9.87868 8.87869C9.31607 9.4413 9 10.2044 9 11Z"
        stroke="#000205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
      <path
        d="M17.657 16.657L13.414 20.9C13.039 21.2746 12.5306 21.4851 12.0005 21.4851C11.4704 21.4851 10.962 21.2746 10.587 20.9L6.343 16.657C5.22422 15.5382 4.46234 14.1127 4.15369 12.5609C3.84504 11.009 4.00349 9.40053 4.60901 7.93874C5.21452 6.47696 6.2399 5.22755 7.55548 4.34852C8.87107 3.46949 10.4178 3.00031 12 3.00031C13.5822 3.00031 15.1289 3.46949 16.4445 4.34852C17.7601 5.22755 18.7855 6.47696 19.391 7.93874C19.9965 9.40053 20.155 11.009 19.8463 12.5609C19.5377 14.1127 18.7758 15.5382 17.657 16.657Z"
        stroke="#000205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </a>
  <a class="item cart cart-open">
    <div class="cart-num">
      1
    </div>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M8.99998 11V6C8.99998 5.20435 9.31605 4.44129 9.87866 3.87868C10.4413 3.31607 11.2043 3 12 3C12.7956 3 13.5587 3.31607 14.1213 3.87868C14.6839 4.44129 15 5.20435 15 6V11M6.33099 8H17.67C17.9584 7.99997 18.2433 8.06229 18.5053 8.1827C18.7674 8.30311 19.0003 8.47876 19.188 8.6976C19.3758 8.91645 19.5141 9.17331 19.5933 9.45059C19.6725 9.72786 19.6908 10.019 19.647 10.304L18.392 18.456C18.283 19.1644 17.924 19.8105 17.38 20.2771C16.8359 20.7438 16.1428 21.0002 15.426 21H8.57399C7.85739 21 7.16447 20.7434 6.62062 20.2768C6.07677 19.8102 5.71791 19.1643 5.60899 18.456L4.35399 10.304C4.31016 10.019 4.32848 9.72786 4.40769 9.45059C4.48691 9.17331 4.62515 8.91645 4.81293 8.6976C5.00072 8.47876 5.23361 8.30311 5.49563 8.1827C5.75766 8.06229 6.04262 7.99997 6.33099 8Z"
        stroke="#000205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </a>
</div>



<script src="<?php get_child_url() ?>/js/swiper-bundle.min.js"></script>
<script src="<?php get_child_url() ?>/js/app.js"></script>
</body>

</html>
