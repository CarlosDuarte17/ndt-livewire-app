<x-app-layout>
  <main>
    <section class="pt-20 px-4">
      <h1 class="text-2xl font-bold text-center">Profile</h1>
      <div class="flex flex-col lg:flex-row gap-8 justify-center mt-8">
        <div class="w-[300px] mx-auto lg:mx-0">
          <div class="relative group">
            <div class="absolute inset-0 h-full h-full flex items-center justify-center opacity-0 group-hover:opacity-90 transition-opacity ease-in-out duration-200">
              <label class="h-20 w-20 p-6 rounded-full bg-white text-black cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z"/>
                </svg>
                <input type="file" hidden accept="image/png,image/jpg,image/jpeg" name="avatar" id="input-avatar">
              </label>
            </div>
            <img src="https://avatars.githubusercontent.com/u/63825298?v=4" alt="profile-image" class="rounded-full object-cover">
          </div>
          <span class="block text-center text-xl mt-2 font-medium">Developer</span>
        </div>
        <div class="p-6 space-y-6 max-w-2xl w-full mx-auto lg:mx-0" x-data="{ currentTab: 0}">
          <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap gap-2 font-medium text-center" id="myTab" role="tablist">
              <li>
                <button class="p-2" :class="currentTab === 0 ? 'border-brand-orange font-bold' : 'text-gray-600'" @click="currentTab = 0">Information</button>
              </li>
              <li>
                <button class="p-2" :class="currentTab === 1 ? 'border-brand-orange font-bold' : 'text-gray-600'" @click="currentTab = 1">Change Password</button>
              </li>
            </ul>
          </div>
          <div>
            <form action="#" class="space-y-6" x-show="currentTab === 0" x-transition.duration.200ms>
              <div>
                <label for="first-name" class="text-sm font-medium text-gray-900 block mb-2">Name</label>
                <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Bonnie">
              </div>
              <div>
                <label for="last-name" class="text-sm font-medium text-gray-900 block mb-2">Position</label>
                <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Developer">
              </div>
              <div>
                <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Telephone</label>
                <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="56879088">
              </div>
              <button class="bg-cyan-600 hover:bg-cyan-900 text-white py-3 px-6 rounded-md">Save</button>
            </form>
            <form action="#" class="space-y-6" x-show="currentTab === 1" x-transition.duration.500ms>
              <div>
                <label for="first-name" class="text-sm font-medium text-gray-900 block mb-2">Password</label>
                <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
              </div>
              <div>
                <label for="last-name" class="text-sm font-medium text-gray-900 block mb-2">Password Confirmation</label>
                <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
              </div>
              <button class="bg-cyan-600 hover:bg-cyan-900 text-white py-3 px-6 rounded-md">Save</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</x-app-layout>
