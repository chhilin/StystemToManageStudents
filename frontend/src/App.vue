
<template>
  <div class="flex flex-col justify-center items-center h-full">
    <div class="container">
      <div class="flex justify-center items-center flex-column">
        <nav
          class="flex justify-center w-full h-fit bg-black border-x-yellow-500 border"
        >
          <img src="/src/assets/icons/duc-logo.png" alt="" class="w-14 h-14" />
        </nav>
      </div>
      <div class="flex flex-col justify-center">
        <h3 class="text-center py-5 font-serif font-bold">
          Like, Share and Command
        </h3>
        <div class="flex justify-center">
          <form action="" class="flex">
            <div class="flex flex-col justify-center font-serif">
              <div class="flex flex-col">
                <label>Stories</label>
                <select
                  id="countries"
                  class="border shadow-md border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                  <option selected>Stories</option>
                  <option value="US">United States</option>
                  <option value="CA">Canada</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                </select>
              </div>
              <div class="flex flex-col py-3">
                <label>Student Name</label>
                <select
                  id="countries"
                  class="border shadow-md border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                  <option selected>Student Name</option>
                  <option value="US">United States</option>
                  <option value="CA">Canada</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                </select>
              </div>
              <div class="flex flex-col">
                <label>Social Media</label>
                <select
                  id="countries"
                  class="border shadow-md border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                  <option selected>Social Media</option>
                  <option value="US">United States</option>
                  <option value="CA">Canada</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                </select>
              </div>
              <div class="flex flex-col py-3">
                <label>Link</label>
                <input
                  type="text"
                  placeholder="Link"
                  class="border shadow-md border-gray-300 text-sm rounded-lg w-full p-2.5"
                />
              </div>
              <div class="flex flex-col">
                <label for="">Image</label>
                <input type="file" id="myFile" name="filename" class="" />
              </div>
              <div class="flex flex-col py-3">
                <textarea
                  name=""
                  id=""
                  rows="3"
                  cols="40"
                  class="border border-gray-300 rounded-lg shadow-md mt-3"
                ></textarea>
              </div>
              <!-- <div class=" flex justify-center py-3  border shadow-md border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block   "> -->
              <div class="flex justify-end">
                <button class="border rounded-lg p-1 my-3 shadow-md w-24 bg-blue-500 cursor-pointerm hover:bg-gray-50">
                  Submit
                </button>
              </div>
              <!-- </div> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
// import Home from "./pages/Home.vue";
// export default {
//   pages: {
//     Home
//   }}
// export default {}
</script>



