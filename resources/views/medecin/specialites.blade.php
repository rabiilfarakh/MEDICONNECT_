<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="md:flex md:flex-wrap mt-24 text-center md:-mx-4">
        @foreach($medecins as $medecin)
        <div class="md:w-1/2 md:px-4 lg:w-1/4 mb-4">
            <a href="{{ route('medecin', ['id' => $medecin->id]) }}" class="text-black">
                <div class="bg-white rounded-lg border border-gray-300 p-8 min-h-full">
                    <img src="{{asset('images/teeth-whitening.svg')}}" alt="" class="h-20 mx-auto">
                    <h4 class="text-xl font-bold mt-4">{{$medecin->name}}</h4>
                    <p class="mt-1">Let us show you how our experience.</p>
                    <a href="#" class="block mt-4">Read More</a>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</body>
</html>