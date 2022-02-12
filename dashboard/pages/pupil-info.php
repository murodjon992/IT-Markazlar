<?
    $id = $_GET['id'];
    if (isset($id)) :
    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '{$id}'");
    $user = mysqli_fetch_assoc($query);
    ?>
    <main class="h-full pb-16 overflow-y-auto">
      <div class="container grid px-6 mx-auto">
        <!-- Right Side -->
        <div class="w-full mx-2 h-64">
          <!-- Profile tab -->
          <!-- About Section -->
          <div class="p-3 shadow-sm rounded-sm">
            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
              <span class="tracking-wide dark:text-gray-100 py-4"><?= $user['name']?> Ma'lumotlari</span>
            </div>
            <div class="text-gray-700 dark:text-gray-400">
              <div class="grid md:grid-cols-2 text-sm">
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Ismi</div>
                  <div class="px-4 py-2"><?= $user['name']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Familiyasi</div>
                  <div class="px-4 py-2"><?= $user['surname']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Jinsi</div>
                  <div class="px-4 py-2"><?= $user['gender']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Tug'ilgan kuni</div>
                  <div class="px-4 py-2"><?= $user['birthday']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Kursga yozilgan sanasi</div>
                  <div class="px-4 py-2"><?= $user['app_date']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Manzili</div>
                  <div class="px-4 py-2"><?= $user['address']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Telefon raqami</div>
                  <div class="px-4 py-2"><?= $user['phone']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Passporti</div>
                  <div class="px-4 py-2"><?= $user['passport']?></div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Kurs turi</div>
                  <div class="px-4 py-2"><?= $user['dev_type']?></div>
                </div>
                <div class="grid grid-cols-2 relative">
                  <div class="px-4 py-2 font-semibold dark:text-gray-200">Paroli</div>
                  <input type="password" value="<?= $user['password']?>" readonly class="user_pass px-4 py-2" style="background: none; outline: none;">
                  <p class="view_pass font-semi-bold dark:text-gray-200 absolute text-purple-600" style="top: 75%; left: 100px; transform: translateY(-50%); cursor:pointer">Ko'rish</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End of about section -->
        </div>
      </div>
    </main>
  </div>
  <script>
      document.querySelector('.view_pass').addEventListener('click', function(){
        document.querySelector('.user_pass').type = 'text';
      });
  </script>
  <?else : echo "<h1>O'quvchi topilmadi</h1>";
    endif;
  ?>