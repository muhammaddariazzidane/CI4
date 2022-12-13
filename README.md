  <?php if ($user) : ?>
          <div class="relative">
            <img class="w-[2.4rem] h-[2.2rem] hover:cursor-pointer myHover rounded-full" src="<?= base_url('assets/img/') . $user['image'] ?>" alt="">
            <div class="absolute myContent hidden right-0 z-20 w-36 py-2 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
              <hr class="border-gray-200 ">
              <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform  hover:bg-indigo-400 hover:text-white ">
                view profile
              </a>
              <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform  hover:bg-indigo-400 hover:text-white ">
                Settings
              </a>
              <hr class="border-gray-200">
              <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform  hover:bg-indigo-400 hover:text-white ">
                Help
              </a>
              <a href="<?= base_url('auth/logout') ?>" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform  hover:bg-indigo-400 hover:text-white ">
                Sign Out
              </a>
            </div>
          </div>
        <?php else : ?>
          <a class="block lg:hidden uppercase mx-auto shadow bg-indigo-600 hover:bg-indigo-500 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-5 rounded" href="<?= base_url('auth') ?>">Login</a>
          <div class="hidden lg:flex items-center">
            <div class="mb-1">
              <a class="block uppercase mx-auto shadow bg-indigo-600 hover:bg-indigo-500 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-5 rounded" href="<?= base_url('auth') ?>">Login</a>
            </div>
          </div>
        <?php endif ?>