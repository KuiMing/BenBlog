<?php
/**
 * @author      Ben <benjamin0901@gmail.com>
 * @copyright   Copyright (c) 2016 Ben
 */

/* 網站上、右、下方的資訊內容 */

  /* 網頁上方的導航 bar */
  $_nav_items = array (
    'facebook' => array (
      'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><path d="M16.45 1.4h-12.9c-1.182 0-2.15 0.968-2.15 2.15v12.9c0 1.183 0.968 2.149 2.149 2.149h6.524v-6.167h-2.060v-2.686h2.060v-1.346c0-2.075 1.532-3.7 3.488-3.7h1.898v3.034h-1.699c-0.444 0-0.574 0.255-0.574 0.607v1.404h2.273v2.687h-2.273v6.168h3.263c1.183 0 2.149-0.967 2.149-2.149v-12.901c0.002-1.182-0.965-2.15-2.148-2.15z" fill="#000000"></path></svg>',
      'href' => 'https://www.facebook.com/profile.php?id=523887614',
      'title' => "Ben's facebook",
      'target' => '_blank'
    ),
    'github' => array (
      'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="415px" height="414.996px" viewBox="0 0 415 414.996" enable-background="new 0 0 415 414.996" xml:space="preserve"><path d="M331.312,86.24c-33.747-33.745-74.246-50.62-122.165-50.62c-47.922,0-88.421,16.875-122.17,50.62 c-33.748,33.749-50.622,74.247-50.622,122.172c0,47.921,16.874,88.419,50.622,122.168c33.749,33.744,74.248,50.621,122.17,50.621 c47.919,0,88.418-16.877,122.165-50.621c33.746-33.749,50.624-74.247,50.624-122.168C381.937,160.487,365.059,119.989,331.312,86.24 z M265.842,342.053c-4.749,1.965-8.775,3.377-13.5,4.727v-25.65c0-13.499-4.725-23.625-14.171-30.375 c37.119-2.7,77.618-17.55,77.618-81.67c0-17.549-5.399-32.398-16.874-44.547c4.725-13.5,4.05-28.35-2.024-43.872l-4.05-0.677 c-5.369-0.893-22.275,4.727-41.174,17.549c-13.496-4.05-27.674-6.073-41.845-6.073c-14.174,0-28.349,2.023-41.174,6.073 c-33.072-20.922-45.222-17.549-45.897-16.872c-6.074,15.522-6.749,30.372-2.024,43.872c-11.476,12.149-16.874,26.999-16.874,44.547 c0,64.12,40.497,78.97,77.621,81.67c-8.775,6.076-13.5,16.199-13.5,30.375v26.323c-5.399-1.35-10.775-3.435-15.523-5.399 c-34.402-14.234-62.441-42.662-76.946-76.947c-15.194-35.912-15.194-77.479,0-113.391c14.505-34.285,42.66-62.441,76.946-76.947 c35.914-15.193,77.478-15.193,113.392,0c34.286,14.506,62.441,42.662,76.946,76.947c15.193,35.912,15.193,77.479,0,113.391 C328.283,299.391,300.24,327.818,265.842,342.053z"/></svg>',
      'href' => 'https://github.com/KuiMing',
      'title' => "ben's github",
      'target' => '_blank'
    )
  );

  /* 網頁右方的 widget */
  $_pins = array (
    'owner_info' => array (
      'avatar' => 'https://scontent.xx.fbcdn.net/v/t1.0-0/s130x130/10002958_10204708170761300_1819003725744740100_n.jpg?oh=5478548dd0a1228e20a6b2060f9cb4e6&oe=582C0C0D',
      'name'   => '陳奎銘(Ben)',
      'href'   => 'https://github.com/KuiMing',
      'info_1' => 'benjamin0901@gmail.com',
      'info_2' => '職業: R User',
      'info_3' => '生日: 1984/09/01'
    ),
    'tree' => array (
      'title'   => "Ben's Date Tree"
    ),
    'tags' => array (
      'title'   => "Ben's Tags"
    )
    // 'facebook' => array (
    //   'title'   => "Ben's Facebook",
    //   'content' => '<a href="https://www.facebook.com/comdan66" title="&#x5433;&#x653f;&#x8ce2;" target="_TOP"><img class="img" src="https://badge.facebook.com/badge/100000100541088.2769.32453715.png" style="border: 0px;" alt="" /></a>'
    // )
  );

  /* 網頁下方的資訊 */
  $_footer = array (
    "title" => "Ben's Blog © 2016",
    'content' => "如有 <u>相關問題</u> 歡迎來信 <b>benjamin0901@gmail.com</b><br>
    本作品授權採用 姓名標示-非商業性 2.0 台灣 (CC BY-NC 2.0 TW) 授權</br>
    <br>Original source code: https://github.com/comdan66/blog</br>"
  );

  /* 手機檢視 網頁上方的導航 bar */
  $_navbar_mobile = array (
    'title' => "Ben's blog",
    'avatar' => 'https://scontent.xx.fbcdn.net/v/t1.0-0/s130x130/10002958_10204708170761300_1819003725744740100_n.jpg?oh=5478548dd0a1228e20a6b2060f9cb4e6&oe=582C0C0D',
  );

  /* 手機檢視 右邊選單 */
  $_mobile_right_slides = array (
    'info' =>  array (
      'title' => "Ben's Info",
      'items' => array (
        array ('value' => 'benjamin0901@gmail.com', 'class' => 'shimmer', 'link' => array ()),
        array ('value' => '職業: R User', 'class' => 'shimmer', 'link' => array ()),
        array ('value' => '生日: 1984/09/01', 'class' => 'shimmer', 'link' => array ())
      )
    ),
    'other' => array (
      'tags' => array (
        'title' => "Ben's Tags",
      )
    ),
    'link' => array (
      'title' => "Ben's Link",
      'items' => array (
        array (
          'value' => 'Facebook',
          'class' => '',
          'link' => array (
            'href' => 'https://www.facebook.com/profile.php?id=523887614',
            'title' => "ben's facebook",
            'target' => '_blank'
        )),
        array (
          'value' => 'GitHub',
          'class' => '',
          'link' => array (
            'href' => 'https://github.com/KuiMing',
            'title' => "ben's github",
            'target' => '_blank'
        ))
      )
    )
  );
