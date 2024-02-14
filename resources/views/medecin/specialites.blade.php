<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="build/tailwind.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   
    <div class="md:flex md:flex-wrap mt-24 text-center md:-mx-4">
        @foreach($medecins as $medecin)
        <div class="md:w-1/2 md:px-4 lg:w-1/4 mb-4">
            <a href="}}" class="text-black">
                <div class="bg-white rounded-lg border border-gray-300 p-8 min-h-full">
                    <img src="{{asset('images/teeth-whitening.svg')}}" alt="" class="h-20 mx-auto">
                    <h4 class="text-xl font-bold mt-4">{{$medecin->user->name}}</h4>
                    <p class="mt-1">specialite: {{$medecin->specialite->name}}</p>
                    <a href="#" class="block mt-4">Read More</a>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</body>
</html>