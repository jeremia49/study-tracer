<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    @vite('resources/css/app.css')
  </head>
  <body>
    <div class="h-[100vh]">
      <div class="w-full h-full bg-black/70 fixed -z-10"></div>
      <div class="flex justify-center items-center z-40 h-full ">
        <div  class="bg-white px-40 py-8 rounded-xl">
          <svg
            class="animate-spin -ml-1 mr-3 h-40 w-40 text-main"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
          >
            <circle
              class="opacity-25"
              cx="12"
              cy="12"
              r="10"
              stroke="currentColor"
              stroke-width="4"
            ></circle>
            <path
              class="opacity-75"
              fill="currentColor"
              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
            ></path>
          </svg>
            <h1 class="text-center font-semibold text-3xl mt-10 ">Redirecting...</h1>
        </div>
      </div>
    </div>
  </body>
</html>
