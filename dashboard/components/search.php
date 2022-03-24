<?php
include_once('db.php');
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$sql = mysqli_query($conn, "SELECT * FROM `users` WHERE (name LIKE '%{$searchTerm}%' OR surname LIKE '%{$searchTerm}%' OR phone LIKE '%{$searchTerm}%' OR passport LIKE '%{$searchTerm}%' OR address LIKE '%{$searchTerm}%' OR dev_type LIKE '%{$searchTerm}%')");
$output = '';

if (mysqli_num_rows($sql) > 0) {
    while ($results = mysqli_fetch_assoc($sql)) {        
        $output .= '<a href="?page=pupil-info&id='. $results['id'] .'" class="search_results flex items-center justify-between px-2 py-1 w-full"> <div class="text-sm"> <p class="font-semibold">'. $results['name'] .' '. $results['surname'] .'</p><p class="text-xs text-gray-600 dark:text-gray-400">'. $results['dev_type'] .'</p></div><div class="text-sm"> <p class="font-semibold search_phone text-gray-600 dark:text-gray-300">'. $results['phone'] .'</p></div></a>';
    }
} else {
    $output .= "O'quvchilar topilmadi";
}
echo $output;
?>