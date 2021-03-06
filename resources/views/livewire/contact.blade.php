<div>
    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
    <div class="relative bg-white">
        <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
            <div class="py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                <div class="max-w-lg mx-auto">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
                        Get in touch
                    </h2>
                    <p class="mt-3 text-lg leading-6 text-gray-500">
                        If you need our services, send us a message and we'll get back to you as soon as we can.
                    </p>
                    <dl class="mt-8 text-base text-gray-500">
                        <div>
                            <dt class="sr-only">Postal address</dt>
                            <dd>
                                <p>600 Wallach Drive</p>
                                <p>Eureka, MO 63025</p>
                            </dd>
                        </div>
                        <div class="mt-6">
                            <dt class="sr-only">Phone number</dt>
                            <dd class="flex">
                                <!-- Heroicon name: phone -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <a href="tel:3146659212" class="ml-3">
                                    +1 (314) 665-9212
                                </a>
                            </dd>
                        </div>
                        <div class="mt-3">
                            <dt class="sr-only">Email</dt>
                            <dd class="flex">
                                <!-- Heroicon name: mail -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <a class="ml-3" href="mailto:markleyc58@gmail.com">
                                    markleyc58@gmail.com
                                </a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                <div class="max-w-lg mx-auto lg:max-w-none">
                    <form method="POST" wire:submit.prevent="submit" class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="name" class="sr-only">Full name</label>
                            <input required wire:model.defer="name" type="text" name="name" id="name" autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-orange-500 focus:border-orange-500 border-gray-300 rounded-md" placeholder="Full name">
                            @error('name')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input required wire:model.defer="email" id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-orange-500 focus:border-orange-500 border-gray-300 rounded-md" placeholder="Email">
                            @error('email')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="sr-only">Phone</label>
                            <input required min="10" max="12" wire:model.defer="phone" type="text" name="phone" id="phone" autocomplete="tel" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-orange-500 focus:border-orange-500 border-gray-300 rounded-md" placeholder="Phone">
                            @error('phone')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="message" class="sr-only">Message</label>
                            <textarea required wire:model.defer="message" maxlength="2048" id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-orange-500 focus:border-orange-500 border-gray-300 rounded-md" placeholder="Message"></textarea>
                            @error('message')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
