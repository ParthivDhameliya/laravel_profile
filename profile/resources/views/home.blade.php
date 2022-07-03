<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="content">
        <div class="text-white mt-5">
            <div class="text-center">
                <img src="{{asset('images/pic.jpg')}}" alt="" class="img-thumbnail" width="250px" height="150px">
            </div>
            <div class="mt-5 mx-5 text-white text-justify">
                <h1 class="fw-bold">Hello,</h1>
                <div class="px-4" style="lign-height: 2rem;">
                    <p style="text-indent: 100px;">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, ut? Neque itaque cumque dolore fugit est consequatur, illo perspiciatis nihil placeat aut, quia nisi. Numquam, doloribus doloremque. Facere, possimus? Nemo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, ut? Neque itaque cumque dolore fugit est consequatur.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, ut? Neque itaque cumque dolore fugit est consequatur, illo perspiciatis nihil placeat aut, quia nisi. Numquam, doloribus doloremque. Facere, possimus? Nemo! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, ut? Neque itaque cumque dolore fugit est consequatur.
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('contact') }}" class="btn btn-outline-warning mx-5 my-3">Contact</a>
                <a href="{{ route('skill') }}" class="btn btn-outline-info mx-5 my-3">Skills</a>
            </div>
        </div>
    </x-slot>
</x-layout>