    <?
    $userEmail = $_SESSION['usLogEmail'];
    $query = mysqli_query($conn, "SELECT * FROM `ustalar` WHERE `us_email` = '{$userEmail}'");
    $user = mysqli_fetch_assoc($query);
    ?>
    <main class="h-full pb-16 overflow-y-auto">
      <div class="container grid px-6 mx-auto">
        <!-- Left Side -->
        <div class="w-full md:w-3/12 md:mx-2" style="display: flex; justify-content:space-between; align-items: center;">
          <!-- Profile Card -->
          <div class="p-3 mt-6 border-t-4 border-green-400">
            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1 dark:text-gray-100" style="text-transform: capitalize;"><?= $user['us_name']?></h1>
            <h3 class="text-gray-600 font-lg text-semibold leading-6 dark:text-gray-400">Buloqboshi IT Center o'qituvchisi</h3>
          </div>
          <!-- End of profile card -->
          <a href="components/admin-logout.php" class="submit_btn w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" style="height: max-content; width:max-content;">Chiqish</a>
        </div> 
        <!-- Right Side -->
        <div class="w-full md:w-9/12 mx-2 h-64">
          <!-- Profile tab -->
          <!-- About Section -->
          <div class="p-3 shadow-sm rounded-sm">
            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
              <span class="tracking-wide dark:text-gray-100">Batafsil</span>
            </div>
            <div class="text-gray-700 dark:text-gray-400">
              <div class="grid md:grid-cols-2 text-sm">
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Ismi</div>
                  <div class="px-4 py-2"><?= $user['us_name']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Emaili</div>
                  <div class="px-4 py-2"><?= $user['us_email']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Paroli</div>
                  <div class="px-4 py-2"><?= $user['us_pass']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">ID raqami</div>
                  <div class="px-4 py-2"><?= $user['us_id']?></div>
                </div>
              </div>
            </div>
          </div>
          <!-- End of about section -->
        </div>
      </div>
    </main>
  </div>