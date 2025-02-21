<!-- component -->
<div class="flex-col">
    <div class="py-3">
        <div class="mx-auto px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded sm py-2">
                <x-inv-crumbs/>
            </div>
        </div>
    </div>
  
  <form action="/addInventory" method="POST" class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl mx-6">
    @csrf
      <div class="grid grid-cols-4 gap-4 auto-rows-auto text-sm my-3">
          <div class="col-span-4 text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 py-3 px-6">
            COMPUTER DETAILS
          </div>
          <div class="text-white py-3 px-6 break-words flex items-center">Name:</div>
          <input type="text" name="item_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
          <div class="text-white py-3 px-6 break-words flex items-center">IP Address:</div>
          <input type="text" name="ip_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
          <div class="text-white py-3 px-6 break-words flex items-center">User:</div>
          <input type="text" name="user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
          <div class="text-white py-3 px-6 break-words flex items-center">Mac Address:</div>
          <input type="text" id="mac_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
          <div class="text-white py-3 px-6 break-words flex items-center">Description:</div>
          <input type="text" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
          <div class="text-white py-3 px-6 break-words flex items-center">Computer Domain:</div>
          <input type="text" name="computer_domain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
      </div>
  
   <div class="grid grid-cols-4 gap-4 auto-rows-auto text-sm my-3">
      <div class="col-span-4 text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 py-3 px-6">
        Asset Details
      </div>
      <div class="text-white py-3 px-6 break-words flex items-center">Category:</div>
      <input type="text" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
      <div class="text-white py-3 px-6 break-words flex items-center">Tag:</div>
      <input type="text" name="tag" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
      <div class="text-white py-3 px-6 break-words flex items-center">Asset Status:</div>
      <input type="text" name="asset_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
      <div class="text-white py-3 px-6 break-words flex items-center">Asset Id:</div>
      <input type="text" name="asset_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
      <div class="text-white py-3 px-6 break-words flex items-center">QR Code:</div>
      <div class="text-white py-3 px-6 break-words text-center text-gray-500 dark:text-gray-400 flex items-center"> </div>
  </div>
  
  <div class="grid grid-cols-4 gap-4 auto-rows-auto text-sm my-3">
    <div class="col-span-4 text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 py-3 px-6">
      User Details
    </div>
    <div class="text-white py-3 px-6 break-words flex items-center">Owner:</div>
    <input type="text" name="owner" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
    <div class="text-white py-3 px-6 break-words flex items-center">Technical Contact:</div>
    <input type="text" name="technical_contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
  </div>
  
  <div class="grid grid-cols-4 gap-4 auto-rows-auto text-sm my-3">
    <div class="col-span-4 text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 py-3 px-6">
      Attachment Details
    </div>
    <div class="col-span-4 text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 py-12 px-12 ">
      <input
      type="file"
      class="file:mr-4 file:rounded-full file:border-0 file:bg-violet-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-violet-700 hover:file:bg-violet-100 dark:file:bg-violet-600 dark:file:text-violet-100 dark:hover:file:bg-violet-500 item-center"
    />
    </div>

            <button class="rounded-full bg-sky-500 hover:bg-sky-700">Save Changes</button>
</form>