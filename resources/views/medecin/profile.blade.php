<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="bg-gray-100">
        <div class="container mx-auto py-8">
            <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                <div class="col-span-4 sm:col-span-3">
                    <div class="bg-white shadow rounded-lg p-6">
                        <div class="flex flex-col items-center">
                            <img src="https://randomuser.me/api/portraits/men/94.jpg" class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">
                            <h1 class="text-xl font-bold">{{$medecin->user->name}}</h1>
                            <p class="text-gray-700">Médecin</p>
                            <div class="mt-6 flex flex-wrap gap-4 justify-center">
                                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Prendre rendez-vous</a>
                                <button name="favorie" onclick="toggleFavorite()" class="focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" id="favorite-icon">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <hr class="my-6 border-t border-gray-300">
                        <div class="flex flex-col">
                            <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Spécialités</span>
                            <ul>
                                <li class="mb-2">{{$specialite->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-4 sm:col-span-9">
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-xl font-bold mb-4">À propos de moi</h2>
                        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit. Nunc finibus vel ante id euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Nulla vulputate pharetra tellus, in luctus risus rhoncus id.</p>
                        <h2 class="text-xl font-bold mt-6 mb-4">Expérience</h2>
                        <div class="mb-6">
                            <div class="flex justify-between flex-wrap gap-2 w-full">
                                <span class="text-gray-700 font-bold">Médecin généraliste</span>
                                <p>
                                    <span class="text-gray-700 mr-2">à Hôpital XYZ</span>
                                    <span class="text-gray-700">2015 - Présent</span>
                                </p>
                            </div>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit.</p>
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between flex-wrap gap-2 w-full">
                                <span class="text-gray-700 font-bold">Stage en cardiologie</span>
                                <p>
                                    <span class="text-gray-700 mr-2">à Centre médical ABC</span>
                                    <span class="text-gray-700">2013 - 2015</span>
                                </p>
                            </div>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit.</p>
                        </div>
                        <h2 class="text-xl font-bold mt-6 mb-4">Éducation</h2>
                        <div class="mb-6">
                            <div class="flex justify-between flex-wrap gap-2 w-full">
                                <span class="text-gray-700 font-bold">Doctorat en médecine</span>
                                <p>
                                    <span class="text-gray-700 mr-2">à Université de ABC</span>
                                    <span class="text-gray-700">2008 - 2013</span>
                                </p>
                            </div>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit.</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold mt-6 mb-4">Comments</h2>
                    <!-- Comment Section -->
                    <div id="comments" class="space-y-6">
                        <!-- Sample Comment -->
                        <div class="flex space-x-3">
                            <img src="https://randomuser.me/api/portraits/men/94.jpg" alt="Profile Picture" class="w-10 h-10 rounded-full">
                            <div class="flex-1 bg-gray-100 rounded-lg p-4">
                                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas suscipit.</p>
                                <p class="text-gray-500 text-xs">Posted by John Doe on February 10th, 2024</p>
                            </div>
                        </div>
                        <!-- End of Sample Comment -->
                    </div>
                    <form id="comment-form" class="mt-8" action="#" method="POST">
                        <div class="flex flex-col space-y-4">
                            <label for="comment" class="text-gray-700 font-semibold">Leave a Comment</label>
                            <textarea id="comment" name="comment" rows="5" class="form-textarea border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            
                        </div>
                        <input type="hidden" name="medecin_id" value="{{ $medecin->id }}">
                        <div class="flex items-center space-x-2">
                            <label for="rating" class="text-gray-700">Note :</label>
                            <div>
                                <input type="radio" id="rating1" name="rating" value="1" class="hidden" />
                                <label for="rating1" class="text-xl text-yellow-500 cursor-pointer">&#9733;</label>
                            </div>
                            <div>
                                <input type="radio" id="rating2" name="rating" value="2" class="hidden" />
                                <label for="rating2" class="text-xl text-yellow-500 cursor-pointer">&#9733;</label>
                            </div>
                            <div>
                                <input type="radio" id="rating3" name="rating" value="3" class="hidden" />
                                <label for="rating3" class="text-xl text-yellow-500 cursor-pointer">&#9733;</label>
                            </div>
                            <div>
                                <input type="radio" id="rating4" name="rating" value="4" class="hidden" />
                                <label for="rating4" class="text-xl text-yellow-500 cursor-pointer">&#9733;</label>
                            </div>
                            <div>
                                <input type="radio" id="rating5" name="rating" value="5" class="hidden" />
                                <label for="rating5" class="text-xl text-yellow-500 cursor-pointer">&#9733;</label>
                            </div>
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
                        </form>
                    <!-- End of New Comment Form -->
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleFavorite() {
          var favoriteIcon = document.getElementById('favorite-icon');
          favoriteIcon.classList.toggle('text-yellow-500');
        }
    </script>
</body>
</html>
