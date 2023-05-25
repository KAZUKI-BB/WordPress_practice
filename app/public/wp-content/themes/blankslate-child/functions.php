<?php
function theme_name_scripts(){
    wp_enqueue_style( 'style01', get_theme_file_uri( "/css/style.css" ));
}


function display_first_posts() {
  $args = array(
    'post_type' => 'post', // 投稿のみを取得する
    'posts_per_page' => 1, // 最新の3件の投稿を取得する
  );
  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      echo '<h2>' . get_the_title() . '</h2>';

      $image_url = get_field('image');
      if ($image_url) {
        echo '<img src="' . $image_url . '">';
      }

      echo '<div>' . get_the_content() . '</div>';

      $custom_field_value = get_field('day');
      echo '<div>' . $custom_field_value . '</div>';
    }
    wp_reset_postdata();
  } else {
    echo '投稿がありません。';
  }
}

function display_second_posts() {
  $args = array(
    'post_type' => 'post', // 投稿のみを取得する
    'posts_per_page' => 1, // 最新の3件の投稿を取得する
    'offset' => 1 // 1番目の投稿をスキップする
  );
  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      echo '<h2>' . get_the_title() . '</h2>';

      $image_url = get_field('image');
      if ($image_url) {
        echo '<img src="' . $image_url . '">';
      }

      echo '<div>' . get_the_content() . '</div>';

      $custom_field_value = get_field('day');
      echo '<div>' . $custom_field_value . '</div>';
    }
    wp_reset_postdata();
  } else {
    echo '投稿がありません。';
  }
}

function display_third_posts() {
  $args = array(
    'post_type' => 'post', // 投稿のみを取得する
    'posts_per_page' => 1, // 最新の3件の投稿を取得する
    'offset' => 2 // 2番目の投稿をスキップする
  );
  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      echo '<h2>' . get_the_title() . '</h2>';

      $image_url = get_field('image');
      if ($image_url) {
        echo '<img src="' . $image_url . '">';
      }

      echo '<div>' . get_the_content() . '</div>';

      $custom_field_value = get_field('day');
      echo '<div>' . $custom_field_value . '</div>';
    }
    wp_reset_postdata();
  } else {
    echo '投稿がありません。';
  }
}

//上記処理は一つにまとめてフロント側に書いてよし

// add_action('init', function () {
//   register_post_type('news', array(
//     'labels' => array(
//       'name' => 'お知らせ',
//       'singular_name' => 'お知らせ',
//     ),
//     'public' => true,
//     'has_archive' => true,
//     'show_in_rest' => true,
//   ));
// });

add_action('init', function () {
    register_post_type('booth', array(
      'labels' => array(
        'name' => '企業ブース',
        'singular_name' => '企業ブース',
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
    ));
  });

//   add_action('init', function () {
//     register_post_type('information', array(
//       'labels' => array(
//         'name' => '出展情報',
//         'singular_name' => '出展情報',
//       ),
//       'public' => true,
//       'has_archive' => true,
//       'show_in_rest' => true,
//     ));
//   });

add_action( 'wp_enqueue_scripts', 'theme_name_scripts');
