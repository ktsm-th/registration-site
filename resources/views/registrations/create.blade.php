<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased h-screen">
      <div class="w-full h-screen flex flex-col justify-center items-center">
        <div>
          <h1 class="font-bold mb-4 text-3xl text-pink-200">Register Below!</h1>
        </div>
        <div class="flex justify-center h-auto bg-orange-200 py-10 px-5 rounded drop-shadow">
          <form action="/registrations" method="post">
                  @csrf
                  <div class="mb-2">
                      <label class="text-white font-bold"for="first_name">First Name:</label>
                      <input class="bg-orange-100 rounded w-full mt-1 px-2 py-1 drop-shadow-sm" type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                  </div>
                  <div class="mb-2">
                  <label class="text-white font-bold" for="last_name">Last Name:</label>
                      <input class="bg-orange-100 rounded w-full mt-1 px-2 py-1 drop-shadow-sm	" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                  </div>
                  <div class="mb-2">
                  <label class="text-white font-bold" for="email">Email:</label>
                      <input class="bg-orange-100 rounded w-full mt-1 px-2 py-1 drop-shadow-sm	" type="text" id="email" name="email"  value="{{ old('email') }}" required>
                  </div>
                  <div class="mb-2">
                  <label class="text-white font-bold" for="arrival">Time Of Arrival</label>
                      <input class="ml-1 mt-1 rounded px-2 drop-shadow-sm" type="time" id="arrival" name="arrival" min="011:00" max="19:00" step='900'  value="{{ old('arrival') }}" required />
                  </div>
                  <div class="mb-2">
                  <label class="text-white font-bold" for="referral">How did you hear about us?</label>
                      <select class="mt-1 px-2 rounded drop-shadow-sm" id="referral" name="referral">
                        <option value="" selected disabled hidden>Choose here</option>
                        <option value="friend">Through a friend</option>
                        <option value="physical-ad">Physical Advertisments</option>
                        <option value="digital-ad">Digital Advertisments</option>
                        <option value="search-engine">Search Engine</option>
                        <option value="social-media">Through Social Media</option>
                        <option value="institution">Through School or Work</option>
                      </select>
                  </div>
                  <button type="submit" class="rounded mt-4 px-4 py-2 bg-white text-orange-200 font-bold hover:bg-pink-200 hover:text-white">Submit!</button>
              </form>
        </div>
        @if(session('success'))
                  <div class="text-pink-200 mt-4 font-bold">{{ session('success') }}</div>
              @endif

              @error('first_name')
                  <div class="text-pink-200 mt-4 font-bold">{{ $message }}</div>
              @enderror

              @error('last_name')
                  <div class="text-pink-200 mt-4 font-bold">{{ $message }}</div>
              @enderror

              @error('email')
                  <div class="text-pink-200 mt-4 font-bold">{{ $message }}</div>
              @enderror

              @error('arrival')
                  <div class="text-pink-200 mt-4 font-bold">{{ $message }}</div>
              @enderror

              @error('referral')
                  <div class="text-pink-200 mt-4 font-bold">{{ $message }}</div>
              @enderror
      </div>
</body>
</html>
