<x-layout>
    <x-slot name="title">Contact</x-slot>
    <x-slot name="content">
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">Contact Us</h1>
            <div class="row text-white mb-5">
                <p class="mx-auto mb-5">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat quaerat animi deleniti illo eius ad fuga omnis, libero dolores distinctio id amet natus incidunt dicta dolor pariatur eveniet commodi delectus!
                </p>
                <div class="col-sm-9 mb-5">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="userName">Your Name</label>
                                <input type="text" name="userName" id="userName" class="form-control mt-2" required>
                            </div>
                            <div class="col-md-6">
                                <label for="userEmail">Your Email</label>
                                <input type="text" name="userEmail" id="userEmail" class="form-control mt-2" required>
                            </div>
                            <div class="col-md-12">
                                <label for="subject">Your Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control mt-2" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="userMessage">Your Message</label>
                                <textarea type="text" name="userMessage" id="userMessage" class="form-control mt-2" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa-solid fa-location-dot fa-2x"></i>
                            <p>Surat, Gujarat</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone fa-2x mt-4"></i>
                            <p>+91 8765457790</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope fa-2x mt-4"></i>
                            <p>abc@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mb-4">
            <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-instagram mx-3 fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp mx-3 fa-2x"></i></a>
        </div>
    </x-slot>
</x-layout>