<?
$query = mysqli_query($conn, "SELECT * FROM `users`");
$perPage = 5;
$listIndex = isset($_GET['list']) ? $_GET['list'] : false;
$listIndex ? $list = $listIndex : $list = 1;  
$firstList = ($list - 1) * $perPage;
$queryLimit = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `id` DESC LIMIT $firstList,$perPage");
$pages = ceil(mysqli_num_rows($query) / $perPage);
$sort = isset($_GET['sort']) ? $_GET['sort'] : false;
if ($sort == 'id') {
  $querySort = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `id` DESC LIMIT $firstList,$perPage");
} else if ($sort != 'all') {
  $querySort = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `{$sort}` LIMIT $firstList,$perPage");
} else {
  $querySort = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `id` DESC");
}

?>
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <div class="w-full flex justify-between items-center">
      <h2 class="my-6 mr-4 text-2xl font-semibold text-gray-700 dark:text-gray-200">Qo'shilgan barcha O'quvchilar</h2>
      <div class="sorting">
        <div class="dropdown relative">
          <button class="dropdown-toggle px-6 py-2.5 dark:bg-gray-800 dark:text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap" type="button" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">Tartiblash
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
            </svg>
          </button>
          <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none bg-gray-800" aria-labelledby="dropdownMenuButton10">
            <?if($sort):?>
            <li style="max-width: 138px;">
              <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full bg-transparent text-gray-700 hover:bg-gray-100" data-term="no" href="/dashboard/?page=pupils">Ishlatilmasin</a>
            </li>
            <?endif;?>
            <li style="max-width: 138px;">
              <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full bg-transparent text-gray-700 hover:bg-gray-100" data-term="dev_type" href="?page=pupils&sort=dev_type">Kurs turi</a>
            </li>
            <li style="max-width: 138px;">
              <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full bg-transparent text-gray-700 hover:bg-gray-100" data-term="address" href="?page=pupils&sort=address">Manzili</a>
            </li>
            <li  style="max-width: 138px;">
              <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full bg-transparent text-gray-700 hover:bg-gray-100" data-term="app_date" href="?page=pupils&sort=app_date">Yozilgan vaqti</a>
            </li>
            <li  style="max-width: 138px;">
              <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full bg-transparent text-gray-700 hover:bg-gray-100" data-term="all" href="?page=pupils&sort=all">Barchasini ko'rsatish</a>
            </li>
          </ul> 
        </div>
      </div>
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 text-purple-600 dark:bg-gray-800">
              <th class="px-4 py-3">O'quvchi</th>
              <th class="px-4 py-3">Yozilgan vaqt</th>
              <th class="px-4 py-3">Manzil</th>
              <th class="px-4 py-3">Telefon</th>
              <th class="px-4 py-3">Passport</th>
              <th class="px-4 py-3">Boshqarish</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            <? while ($users = mysqli_fetch_assoc(!$sort ? $queryLimit : $querySort)) : ?>
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <a href="?page=pupil-info&id=<?= $users['id'] ?>">
                      <p class="font-semibold"><?= $users['name'] . ' ' . $users['surname'] ?></p>
                      <p class="text-xs text-gray-600 dark:text-gray-400"><?= $users['dev_type'] ?></p>
                    </a>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm"><?= $users['app_date'] ?></td>
                <td class="px-4 py-3 text-xs"><a href="?page=pupil-info&id=<?= $users['id'] ?>" class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"><?= $users['address'] ?></a>
                </td>
                <td class="px-4 py-3 text-sm"><?= $users['phone'] ?></td>
                <td class="px-4 py-3 text-sm"><?= $users['passport'] ?></td>
                <td class="px-4 py-3">
                  <div class="flex items-center space-x-4 text-sm">
                    <a href="pages/pupil.php?id=<?= $users['id'] ?>" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                      </svg>
                    </a>
                    <button @click="openModal" class="deleteBtn flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Delete" value="<?= $users['id'] ?>">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
            <? endwhile ?>
          </tbody>
        </table>
      </div>
      <div class="grid px-4 py-4 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <?if($sort != 'all'):?>
        <span class="flex items-center mt-auto h-full col-span-3"><?= mysqli_num_rows($query) ?> tadan <?= $firstList . '-' . ($firstList + $perPage) ?> Ko'rsatilyapti</span>
        <?else:?>
        <span class="flex items-center mt-auto h-full col-span-3"><?= mysqli_num_rows($query) ?> tadan <?= mysqli_num_rows($query)?> ta Ko'rsatilyapti</span>
        <?endif;?>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
          <nav aria-label="Table navigation">
            <ul class="inline-flex items-center">
              <? if ($listIndex - 1 != 0 && $list - 1 != 0) : ?>
                <li><a href="?page=pupils&list=<?= $listIndex - 1 ?>" class="px-4 py-2 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous"><svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                      <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg></a></li>
              <? endif; ?>

              <? for ($list = 1; $list <= $pages; $list++) : ?>
                <li><a href="?page=pupils&list=<?= $list ?>" class="px-4 py-2 <?= $listIndex == $list || (!$listIndex && $list == 1) ? "focus:outline-none focus:shadow-outline-purple text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md" : "rounded-md focus:outline-none focus:shadow-outline-purple" ?> "><?= $list ?></a></li>
                </li>
              <? endfor; ?>

              <? if ($listIndex + 1 <= $pages) : ?>
                <li><a href="?page=pupils&list=<?= $listIndex ? $listIndex + 1 : 2 ?>" class="px-4 py-2 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next"><svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                      <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg></a></li>
              <? endif; ?>
            </ul>
          </nav>
        </span>
      </div>
    </div>
  </div>
  <!-- Modal backdrop. This what you want to place close to the closing body tag -->
  <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal" @keydown.escape="closeModal" class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl" role="dialog" id="modal">
      <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
      <header class="flex justify-end">
        <button class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700" aria-label="close" @click="closeModal">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
            <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
          </svg>
        </button>
      </header>
      <!-- Modal body -->
      <div class="mt-4 mb-6">
        <!-- Modal title -->
        <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">Ogohlantirish</p>
        <!-- Modal description -->
        <p class="text-sm text-gray-700 dark:text-gray-400">Ushbu o'quvchi ma'lumotlari butkul O'chirib yuborilishiga rozimisiz</p>
      </div>
      <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
        <button @click="closeModal" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
          Bekor qilish
        </button>
        <button class="submit_btn w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Roziman</button>
      </footer>
    </div>
  </div>
  <!-- End of modal backdrop -->
</main>
</div>
</div>
<script src="js/delete-pupil.js?v=<?= time(); ?>"></script>
<script src="js/pupils.js?v=<?= time(); ?>"></script>