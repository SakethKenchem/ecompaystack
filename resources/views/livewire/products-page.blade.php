<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto ">
        <section class="py-10 bg-gray-50 font-poppins dark:bg-gray-800 rounded-lg">
          <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
            <div class="flex flex-wrap mb-24 -mx-3">
              <div class="w-full pr-2 lg:w-1/4 lg:block">
              </div>
              <div class="w-full px-3 lg:w-3/4">

                <div class="flex flex-wrap items-left ">
                
                    @foreach($products as $product)
                  <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
                    <div class="border border-gray-300 dark:border-gray-700">
                      <div class="relative bg-gray-200">
                        <a wire:navigate href="{{ auth()->check() ? '/products-page/'.$product->name : 'login' }}" class="">
                          <img src="{{url('storage', $product->images[0])}}" alt="" class="object-cover w-full h-56 mx-auto ">
                        </a>
                      </div>
                      <div class="p-3 ">
                        <div class="flex items-center justify-between gap-2 mb-2">
                          <h3 class="text-xl font-medium dark:text-gray-400">
                            {{ $product->name }}
                          </h3>
                        </div>
                        <p class="text-lg ">
                          <span class="text-green-600 dark:text-green-600">KES {{$product->price}}</span>
                        </p>
                      </div>
                      <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">
      
                        <a wire:navigate href="{{ auth()->check() ? '/products-page/'.$product->name : 'login' }}"  class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-orange-400 dark:hover:text-red-300">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                          </svg><span>View Details</span>
                        </a>
      
                      </div>
                    </div>
                  </div>
                    @endforeach
      
                </div>
                <!-- pagination start -->
                <div class="flex justify-end mt-6">
                  <nav aria-label="page-navigation">
                    <ul class="flex list-style-none">
                      <li class="page-item disabled ">
                        <a href="#" class="relative block pointer-events-none px-3 py-1.5 mr-3 text-base text-gray-700 transition-all duration-300  rounded-md dark:text-gray-400 hover:text-gray-100 hover:bg-blue-600">Previous
                        </a>
                      </li>
                      <li class="page-item ">
                        <a href="#" class="relative block px-3 py-1.5 mr-3 text-base hover:text-blue-700 transition-all duration-300 hover:bg-blue-200 dark:hover:text-gray-400 dark:hover:bg-gray-700 rounded-md text-gray-100 bg-blue-400">1
                        </a>
                      </li>
                      <li class="page-item ">
                        <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-blue-100 rounded-md mr-3  ">2
                        </a>
                      </li>
                      <li class="page-item ">
                        <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-blue-100 rounded-md mr-3 ">3
                        </a>
                      </li>
                      <li class="page-item ">
                        <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-blue-100 rounded-md ">Next
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- pagination end -->
              </div>
            </div>
          </div>
        </section>
      
      </div>

</div>
