<?
ob_start();
include_once('./functions.php');
$isLogin = $_SESSION['is_login'];
if ($isLogin) :

include_once('pages/header.php');
    include_once('pages/aside.php');
    include_once('components/db.php');
    
    ?>
    <div class="flex flex-col flex-1 w-full">
    <?include_once('pages/nav.php');

    if ($pages[$path]) {
      include_once("pages/$path.php");
    } else {
      include_once("pages/404.php");
    }
    ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script src="./assets/js/init-alpine.js"></script>
  <script src="./assets/js/focus-trap.js"></script>
  <script src="js/search-pupil.js?v=<?= time(); ?>"></script>
  <?if($path=='main'): ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
  <script src="./assets/js/charts-lines.js" defer></script>
  <script src="./assets/js/charts-pie.js" defer></script>
  <?endif;?>
</body>
</html>
<?
else : header("Location: /");
endif;
ob_end_flush();
?>