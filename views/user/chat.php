<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ImmoConnect Chat</title>
  <link href="/ImmoConnect/public/css/tailwind.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container mx-auto">
    <div class="min-w-full border rounded lg:grid lg:grid-cols-3">
      <div class="border-r border-gray-300 lg:col-span-1">
        <div class="mx-3 my-3">
          <div class="relative text-gray-600">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 text-gray-300">
                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </span>
            <input type="search" class="block w-full py-2 pl-10 bg-gray-100 rounded outline-none" name="search" placeholder="Search" required />
          </div>
        </div>

        <ul class="overflow-auto h-[32rem]">
          <h2 class="my-2 mb-2 ml-2 text-lg text-gray-600">Chats</h2>
          <li>
            <?php foreach ($messages as $message) : ?>
    <a href="#" class="message-link flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none" data-recepteur="<?= $message['recepteur_id']; ?>">                <img class="object-cover w-10 h-10 rounded-full" src="https://cdn.pixabay.com/photo/2018/09/12/12/14/man-3672010__340.jpg" alt="username" />
                <div class="w-full pb-2">
                  <div class="flex justify-between">
                    <span class="block ml-2 font-semibold text-gray-600"><?= $message['nom_recepteur'] ?></span>
                    <span class="block ml-2 text-sm text-gray-600"><?= date('H:i', strtotime($message['sent_at'])); ?></span>
                  </div>
                  <span class="block ml-2 text-sm text-gray-600"><?= $message['message_text']; ?></span>
                </div>
              </a>
            <?php endforeach; ?>

          </li>
        </ul>
      </div>
      <div class="hidden lg:col-span-2 lg:block">
        <div class="w-full">
          <div id='recepteur_id' class="relative flex items-center p-3 border-b border-gray-300">
            <img class="object-cover w-10 h-10 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg" alt="username" />
            <span class="block ml-2 font-bold text-gray-600"><?= $message['nom_recepteur'] ?></span>
            <span class="absolute w-3 h-3 bg-green-600 rounded-full left-10 top-3">
            </span>
          </div>
          <div id="messages" class="relative w-full p-6 overflow-y-auto h-[40rem]">
            <ul class="space-y-2">

              <li class="flex justify-start">
                <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                  <span class="block"><?= $message['message_text'] ?></span>
                </div>
              </li>
              <?php foreach ($responses as $response) :
                if ($response['emetteur_id'] == $_SESSION['id']) { ?>
                  <li class="flex justify-end">
                    <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                      <span class="block"><?= $response['reply'] ?></span>
                    </div>
                  </li>
                <?php } else { ?>
                  <li class="flex justify-start">
                    <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                      <span class="block"><?= $response['reply'] ?></span>
                    </div>
                  </li>

              <?php }
              endforeach; ?>


            </ul>
          </div>
          <form action="addMessage" method="post">
            <div class="flex items-center justify-between w-full p-3 border-t border-gray-300">
              <input type="hidden" name="emetteur_id" value="<?= $message['emetteur_id'] ?>" />
              <input type="hidden" name="recepteur_id" value="<?= $message['recepteur_id'] ?>" />
              <input type="text" placeholder="Message" name="message" class="block w-full py-2 pl-4 mx-3 bg-gray-100 rounded-full outline-none focus:text-gray-700" required />
              <button type="submit" name="addMessage">
                <svg class="w-5 h-5 text-gray-500 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                </svg>
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</body>



</html>