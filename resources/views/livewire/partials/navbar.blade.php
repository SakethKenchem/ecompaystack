<div>
  <!-- ========== HEADER ========== -->
  <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-2 sm:py-0 dark:bg-neutral-800 dark:border-neutral-700">
      <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
          <div class="flex items-center justify-between">
              <a wire:navigate class="flex-none text-xl font-semibold dark:text-white" href="/" aria-label="Brand">Ecommerce</a>
              <div class="sm:hidden">
                  <button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                      <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                      <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                  </button>
              </div>
          </div>
          <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
              <div class="flex flex-col sm:flex-row sm:items-center py-2 md:py-0 sm:ps-7">
                  <a wire:navigate class="py-3 ps-px sm:px-3 sm:py-6 font-medium text-gray-500 dark:text-blue-500" href="/products-page" >Products</a>
        
                  @auth
                      <a wire:navigate class="py-3 ps-px sm:px-3 sm:py-6 font-medium text-gray-500 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="/my-account">My Account</a>
                      <a wire:navigate class="py-3 ps-px sm:px-3 sm:py-6 font-medium text-gray-500 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="/my-orders">My Orders</a>
                      <a wire:navigate class="py-3 ps-px sm:px-3 sm:py-6 font-medium text-gray-500 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="/my-payments">My Payments</a>
                  @endauth

                  <div class="flex items-center gap-x-2 py-2 sm:py-0 sm:ms-auto">
                      @guest
                          <a wire:navigate class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 dark:text-neutral-400 dark:hover:text-blue-500" href="/login">
                              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                              Log in
                          </a>
                      @else
                          <a wire:navigate class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-red-600 dark:text-neutral-400 dark:hover:text-red-500" href="/logout">
                              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 12H3M15 12l-4 4m4-4l-4-4m6 4h1M21 3H3v18h18V3z"/></svg>
                              Log out
                          </a>
                      @endguest
                  </div>
              </div>
          </div>
      </nav>
  </header>
  <!-- ========== END HEADER ========== -->
</div>