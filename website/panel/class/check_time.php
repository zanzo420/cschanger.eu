<? 
include "mysql.class.php";

include "panel.class.php";
$p = new panel();
function convertToHoursMins($time, $format = '%02d:%02d') {
    if ($time < 1) {
		return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf($format, $hours, $minutes);
}
if($p->online24h < 1){ echo '0h <small>0m</small>'; }else{ echo convertToHoursMins($p->online24h, '%02dh <small>%02dm</small>');}?>