<?
session_start();
$isLogin = $_SESSION['is_login'];
if ($isLogin) :
  
$id = $_GET['id'];
$isEdit = $id ? true : false;
include_once('../components/db.php');
$query = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '{$id}'");
$user = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create account - Windmill Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
  <link rel="stylesheet" href="../assets/css/style.css?v=<?= time()?>">
</head>

<body>
  <div class="flex items-center min-h-screen p-4 bg-gray-50 dark:bg-gray-900">
    <div class="flex-1 h-full mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="<?= !$isEdit ? "../assets/img/create-account-office.jpeg" : "../assets/img/login-office.jpeg"?>" alt="Office" />
          <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="../assets/img/create-account-office-dark.jpeg" alt="Office" />
        </div>
        <div class="flex items-center justify-center md:w-1/3 form_blog">
          <form class="w-full pupil_form flex" method="POST" action="#">

            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"><?= !$isEdit ? "O'quvchi qo'shish" : "'" . $user["name"] . "' ni Tahrirlash"?></h1>
            <div class="error_alert"></div>
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Ismi</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" name="name" value="<?= $isEdit ? $user['name'] : ''?>" placeholder="Ism..." required>
            </label>
            <label class="block text-sm ">
              <span class="text-gray-700 dark:text-gray-400">Familiyasi</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" name="surname" value="<?= $isEdit ? $user['surname'] : ''?>" placeholder="Familiya..." required>
            </label>
            <label class="block text-sm ">
              <span class="text-gray-700 dark:text-gray-400">Jinsi</span>
              <div class="mt-2">
                  <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input type="radio"class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="gender" value="erkak" <?= $isEdit && $user['gender']=='erkak' ? 'checked' : ''?> required>
                    <span class="ml-2">Erkak</span>
                  </label>
                  <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input type="radio"class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="gender" value="ayol" <?= $isEdit && $user['gender']=='ayol' ? 'checked' : ''?> required>
                    <span class="ml-2">Ayol</span>
                  </label>
              </div>
            </label>
            <label class="block text-sm ">
              <span class="text-gray-700 dark:text-gray-400">Tug'ilgan sanasi</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="date" name="birthday" value="<?= $isEdit ? $user['birthday'] : ''?>" required>
            </label>
            <label class="block text-sm ">
              <span class="text-gray-700 dark:text-gray-400">Kursga yozilgan sanasi</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="date" name="app_date" value="<?= $isEdit ? $user['app_date'] : ''?>" required>
            </label>
            <label class="block text-sm ">
              <span class="text-gray-700 dark:text-gray-400">Manzili</span>
              <select class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" name="address" placeholder="Buloqboshi..." value="<?= $isEdit ? $user['address'] : ''?>" required>
                <option value="Andijon Shaxar">Andijon Shaxar</option>
                <option value="Andijon Tuman">Andijon Tuman</option>
                <option value="Asaka">Asaka</option>
                <option value="Baliqchi">Baliqchi</option>
                <option value="Buloqboshi">Buloqboshi</option>
                <option value="Bo'ston">Bo'ston</option>
                <option value="Izboskan">Izboskan</option>
                <option value="Jalaquduq">Jalaquduq</option>
                <option value="Marxamat">Marxamat</option>
                <option value="Paxtaobod">Paxtaobod</option>
                <option value="Oltinko'l">Oltinko'l</option>
                <option value="Qo'rg'ontepa">Qo'rg'ontepa</option>
                <option value="Shaxrixon">Shaxrixon</option>
                <option value="Ulug'nor">Ulug'nor</option>
                <option value="Xo'jaobod">Xo'jaobod</option>
                <option value="Xonobod">Xonobod</option>
              </select>
            </label>
            <label class="block text-sm ">
              <span class="text-gray-700 dark:text-gray-400">Telefon raqami</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="number" name="phone" placeholder="998906225022..." value="<?= $isEdit ? $user['phone'] : ''?>" required>
            </label>
            <label class="block text-sm ">
              <span class="text-gray-700 dark:text-gray-400">Passport (Tug'ilganlik haqidagi guvohnoma) raqami</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" name="passport" placeholder="AA123456" value="<?= $isEdit ? $user['passport'] : ''?>" required>
            </label>
            <label class="block text-sm ">
              <span class="text-gray-700 dark:text-gray-400">Kurs turi</span>
              <select class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" name="dev_type" placeholder="Frontend..." value="<?= $isEdit ? $user['dev_type'] : ''?>" required>
                <option value="Kompyuter Savodhonligi">Kompyuter Savodhonligi</option>
                <option value="RITT">Raqamlashirish va IT Tadbirkorlik(RITT)</option>
                <option value="Frontend">Frontend Dasturlash</option>
                <option value="Backend">Backend Dasturlash</option>
                <option value="Grafik">Grafik Web Dizayn</option>
                <option value="Robototexnika">Robototexnika</option>
                <option value="Kibersport">Kibersport</option>
                <option value="SMM">SMM</option>
                <option value="3D">3D Dizayn</option>
                <option value="IT English">IT English</option>
                <option value="OMUC">One Million Uzbek Coders(OMUC)</option>
                <option value="Techbika">Techbika</option>
                <option value="ITWomanUZ">ITWomanUZ</option>
                <option value="FSU">Future Skills Uzbekistan(FSU)</option>
              </select>
            </label>           
            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Parol</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="password" placeholder="parol kiriting..." type="password" value="<?= $isEdit ? $user['password'] : ''?>" required>
              <input type="hidden" name="id" value="<?= $isEdit ? $user['id'] : ''?>">
            </label>

            <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple submit_btn" type="submit"><?= !$isEdit ? 'Tasdiqlash' : 'Tahrirlash'?></button>

          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="../assets/js/init-alpine.js"></script>
  <?$time = time();?>
  <?= !$isEdit ? "<script src='../js/add-pupil.js?v=$time'></script>" : "<script src='../js/edit-pupil.js?v=$time'></script>"?>
</body>
</html>
<?
else : header("Location: /");
endif;
?>