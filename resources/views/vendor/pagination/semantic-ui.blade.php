@php
$base_url = $_SERVER['REQUEST_URI'];
$base_url = explode('?',$base_url)[0];


$dom = "";
$dom .= '<p class="c-searchResult__count"><strong>' . number_format($paginator->total()) . '件</strong>がヒットしました。';



if ($paginator->hasPages()){

  $maxPage = intval(ceil($paginator->total() / $paginator->perPage()));

  if($paginator->currentPage() !== $maxPage){
    $dom .= '（' . ($paginator->currentPage() * $paginator->perPage() - $paginator->count() + 1) . '〜' . ($paginator->currentPage() * $paginator->perPage()) . '件を表示中）</p>';
  }else{
    $dom .= '（' . number_format($paginator->total() - $paginator->count() + 1) . '〜' . number_format($paginator->total()) . '件を表示中）</p>';
  }

  $dom .= '<div class="c-searchResult__pagination ui pagination menu">';

  if($maxPage <= 5){

    for($i = 1; $i <= $maxPage; $i++){
      if($paginator->currentPage() === $i){
        $dom .= '<a class="active item" href="' . $base_url . '?page=' . $i . '">' . $i . '</a>';
      }else{
        $dom .= '<a class="item" href="' . $base_url . '?page=' . $i . '">' . $i . '</a>';
      }
    }

  }else{

    $current = intval($paginator->currentPage());

    if($current == 1){

      $dom .= '<a class="active item" href="' . $base_url . '?page=1">1</a>';
      $dom .= '<a class="item" href="' . $base_url . '?page=2">2</a>';
      $dom .= '<a class="item" href="' . $base_url . '?page=3">3</a>';
      $dom .= '<div class="disabled item">...</div>';
      $dom .= '<a class="item" href="' . $base_url . '?page=' . $maxPage . '">' . $maxPage . '</a>';

    }else if($current == 2){

      $dom .= '<a class="item" href="' . $base_url . '?page=1">1</a>';
      $dom .= '<a class="active item" href="' . $base_url . '?page=2">2</a>';
      $dom .= '<a class="item" href="' . $base_url . '?page=3">3</a>';
      $dom .= '<div class="disabled item">...</div>';
      $dom .= '<a class="item" href="' . $base_url . '?page=' . $maxPage . '">' . $maxPage . '</a>';

    }else if($current == $maxPage - 1){

      $dom .= '<a class="item" href="' . $base_url . '?page=1">1</a>';
      $dom .= '<div class="disabled item">...</div>';
      $dom .= '<a class="item" href="' . $base_url . '?page=' . strval($maxPage - 2) . '">' . strval($maxPage - 2) . '</a>';
      $dom .= '<a class="active item" href="' . $base_url . '?page=' . strval($maxPage - 1) . '">' . strval($maxPage - 1) . '</a>';
      $dom .= '<a class="item" href="' . $base_url . '?page=' . strval($maxPage) . '">' . strval($maxPage) . '</a>';

    }else if($current == $maxPage){

      $dom .= '<a class="item" href="' . $base_url . '?page=1">1</a>';
      $dom .= '<div class="disabled item">...</div>';
      $dom .= '<a class="item" href="' . $base_url . '?page=' . strval($maxPage - 2) . '">' . strval($maxPage - 2) . '</a>';
      $dom .= '<a class="item" href="' . $base_url . '?page=' . strval($maxPage - 1) . '">' . strval($maxPage - 1) . '</a>';
      $dom .= '<a class="active item" href="' . $base_url . '?page=' . strval($maxPage) . '">' . strval($maxPage) . '</a>';

    }else{

      for($i = $current - 2; $i <= $current + 2; $i++){
        if($i == $current){
          $dom .= '<a class="active item" href="' . $base_url . '?page=' . $i . '">' . $i . '</a>';
        }else{
          $dom .= '<a class="item" href="' . $base_url . '?page=' . $i . '">' . $i . '</a>';
        }
      }

    }

  }

  $dom .= '</div>';
}else{
  $total_count = $paginator->total();
  $dom .= '</p>';
}
@endphp


{!! $dom ? $dom : "" !!}
