<div>
  <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
      <section class="overflow-hidden bg-white py-11 font-poppins dark:bg-gray-800 shadow-md rounded-lg">
          <div class="max-w-6xl px-4 py-8 mx-auto lg:py-12 md:px-6">
              <div class="flex flex-wrap -mx-4">
                  <div class="w-full md:w-1/2" x-data="{mainImage: '{{url('storage', $product->images[0])}}', quantity: 1}">
                      <div class="sticky top-0 overflow-hidden rounded-lg bg-white dark:bg-gray-800">
                          <div class="relative mb-6 lg:mb-10">
                              <img :src="mainImage" alt="Product Image" class="object-cover w-full rounded-lg">
                          </div>
                          <div class="flex-wrap hidden md:flex">
                              @foreach ($product->images as $image)
                                  <div class="w-1/2 p-2 sm:w-1/4" @click="mainImage='{{url('storage', $image)}}'">
                                      <img src="{{url('storage', $image)}}" alt="Thumbnail" class="object-cover w-full lg:h-20 cursor-pointer hover:border hover:border-blue-500 rounded-lg">
                                  </div>
                              @endforeach
                          </div>
                          <div class="px-6 pb-6 mt-6 border-t border-gray-300 dark:border-gray-400">
                              <div class="w-32 mb-8">
                                  <label for="quantity" class="w-full pb-1 text-xl font-semibold text-gray-700 dark:text-gray-400">Quantity</label>
                                  <div class="relative flex flex-row w-full h-10 mt-2 bg-transparent">
                                      <button @click="quantity > 1 ? quantity-- : quantity" class="w-10 h-full text-gray-600 bg-gray-300 rounded-l dark:hover:bg-gray-700 dark:text-gray-400 hover:text-gray-700 dark:bg-gray-900 hover:bg-gray-400">
                                          <span class="m-auto text-2xl font-thin">-</span>
                                      </button>
                                      <input type="number" :value="quantity" readonly x-model="quantity" class="flex items-center w-full text-center text-gray-700 bg-gray-300 dark:text-gray-400 dark:bg-gray-900 focus:outline-none rounded-none">
                                      <button @click="quantity++" class="w-10 h-full text-gray-600 bg-gray-300 rounded-r dark:hover:bg-gray-700 dark:text-gray-400 dark:bg-gray-900 hover:text-gray-700 hover:bg-gray-400">
                                          <span class="m-auto text-2xl font-thin">+</span>
                                      </button>
                                  </div>
                              </div>
                              <div class="flex flex-wrap items-center gap-4 mt-4">
                                  <button type="button" class="w-full py-3 px-6 bg-blue-500 rounded-lg text-white lg:w-2/5 dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-blue-600" @click="scrollToForm()">
                                      Pay Below
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="w-full px-4 md:w-1/2 mt-10 md:mt-0">
                      <div class="lg:pl-20">
                          <div class="mb-8">
                              <h2 class="text-2xl font-bold dark:text-gray-400 md:text-3xl">{{$product->name}}</h2>
                              <p class="text-xl font-bold text-gray-700 dark:text-gray-400 mt-4">
                                  <span>KES{{$product->price}}</span>
                              </p>
                              <p class="text-gray-700 dark:text-gray-400 mt-2">
                                  {{$product->description}}
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section id="payment-section" class="bg-gray-100 py-8 mt-10">
          <div class="container mx-auto">
              <form id="paymentForm" class="bg-white p-8 rounded-lg shadow-md dark:bg-gray-800" x-data="paymentFormData">
                  <h2 class="text-2xl mb-4 font-bold dark:text-gray-200">Payment Details</h2>
                  <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                      <div class="form-group">
                          <label for="email" class="block text-gray-700 dark:text-gray-300">Email Address</label>
                          <input type="email" value="{{ Auth::user()->email }}" id="email-address" class="w-full p-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300" required />
                      </div>
                      <div class="form-group">
                          <label for="price" class="block text-gray-700 dark:text-gray-300">Price</label>
                          <input type="tel" id="price" value="{{$product->price}}" readonly class="w-full p-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300" required />
                      </div>
                      <div class="form-group">
                          <label for="product-name" class="block text-gray-700 dark:text-gray-300">Product Name</label>
                          <input type="text" id="product-name" value="{{$product->name}}" readonly class="w-full p-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300" required/>
                      </div>
                      <div class="form-group">
                          <label for="first-name" class="block text-gray-700 dark:text-gray-300">First Name</label>
                          <input type="text" value="{{ Auth::user()->name }}" id="first-name" class="w-full p-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300" required />
                      </div>
                      <div class="form-group">
                          <label for="last-name" class="block text-gray-700 dark:text-gray-300">Last Name</label>
                          <input type="text" id="last-name" class="w-full p-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300" required/>
                      </div>
                      <div class="form-group">
                          <label for="phone" class="block text-gray-700 dark:text-gray-300">Phone Number</label>
                          <input type="tel" id="phone" class="w-full p-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300" required />
                      </div>
                      <div class="form-group mb-4">
                          <label for="address" class="block text-gray-700 dark:text-gray-300">Address</label>
                          <textarea id="address" class="w-full p-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300" required></textarea>
                      </div>
                  </div>
                  <div class="mt-6">
                    <button type="button" class="py-3 px-6 bg-blue-500 text-white rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700 hover:bg-blue-600" @click.prevent="payWithPaystack()">
                        <img src="{{ asset('images/paystack.256x252.png') }}" alt="Paystack Logo" class="inline-block mr-2" width="30" height="30" >
                        Pay with Paystack
                    </button>
                </div>
              </form>
          </div>
      </section>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js" integrity="sha512-1puPcw554+XGSwXtgoR3D+NVaefz5ASry8Y5uUKCZouqk8WJlXtqMktE7XgkhoUpZ4I4viOo+YvvAiYYIPphGA==" crossorigin="anonymous"></script>
  <script src="https://js.paystack.co/v1/inline.js" async></script>
  <script>
      document.addEventListener('alpine:init', () => {
          Alpine.data('paymentFormData', () => ({
              quantity: 1,
              async payWithPaystack() {
                  const handler = PaystackPop.setup({
                      key: 'pk_test_ce6c87961277ec34fd79d9e2e3742bde02fc316e', // Replace with your public key
                      email: document.getElementById('email-address').value,
                      amount: document.getElementById('price').value * this.quantity * 100,
                      metadata: {
                          custom_fields: [
                              {
                                  display_name: 'Product Name',
                                  variable_name: 'product_name',
                                  value: document.getElementById('product-name').value
                              },
                              {
                                  display_name: 'Product Price',
                                  variable_name: 'product_price',
                                  value: document.getElementById('price').value
                              },
                              {
                                  display_name: 'Quantity',
                                  variable_name: 'quantity',
                                  value: this.quantity
                              },
                              {
                                  display_name: 'First Name',
                                  variable_name: 'first_name',
                                  value: document.getElementById('first-name').value
                              },
                              {
                                  display_name: 'Last Name',
                                  variable_name: 'last_name',
                                  value: document.getElementById('last-name').value
                              },
                              {
                                  display_name: 'Address',
                                  variable_name: 'address',
                                  value: document.getElementById('address').value
                              },
                              {
                                  display_name: 'Phone Number',
                                  variable_name: 'phone_number',
                                  value: document.getElementById('phone').value
                              },
                          ]
                      },
                      currency: 'KES',
                      ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference
                      onClose: function () {
                          alert('Window closed.');
                      },
                      callback: function (response) {
                          alert('Payment complete! Reference: ' + response.reference);
                          const redirectUrl = "{{ route('callback') }}?reference=" + response.reference;
                          window.location.href = redirectUrl;
                      }
                  });

                  handler.openIframe();
              }
          }));
      });

      function scrollToForm() {
          document.getElementById('payment-section').scrollIntoView({ behavior: 'smooth' });
      }
  </script>
  <style>
      .form-group label {
          font-weight: 600;
          margin-bottom: 5px;
      }
  </style>
</div>