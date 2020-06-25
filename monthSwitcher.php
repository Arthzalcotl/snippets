/*
  A language switcher for month names. The code here is for English - Indonesian
*/

public static function monthSwitcher($date, $locale) {
    $temp = '';
    
    if($locale == 'id') {
      switch (true) {
        case strpos($date, 'January') !== false:
          $temp = str_replace('January', 'Januari', $date);
          $date = $temp;
          break;
        case strpos($date, 'February') !== false:
          $temp = str_replace('February', 'Februari', $date);
          $date = $temp;
          break;
        case strpos($date, 'March') !== false:
          $temp = str_replace('March', 'Maret', $date);
          $date = $temp;
          break;
        case strpos($date, 'May') !== false:
          $temp = str_replace('May', 'Mei', $date);
          $date = $temp;
          break;
        case strpos($date, 'June') !== false:
          $temp = str_replace('June', 'Juni', $date);
          $date = $temp;
          break;
        case strpos($date, 'July') !== false:
          $temp = str_replace('July', 'Juli', $date);
          $date = $temp;
          break;
        case strpos($date, 'August') !== false:
          $temp = str_replace('August', 'Agustus', $date);
          $date = $temp;
          break;
        case strpos($date, 'October') !== false:
          $temp = str_replace('October', 'Oktober', $date);
          $date = $temp;
          break;
        case strpos($date, 'December') !== false:
          $temp = str_replace('December', 'Desember', $date);
          $date = $temp;
          break;
      }
    }
    
    return $date;
  }
