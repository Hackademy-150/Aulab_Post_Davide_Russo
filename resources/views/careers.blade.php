        <x-layout>
            <div class="container-fluid p-5 bg-info text-center text white">
                <div class="row justify-content-center">
                    <h1 class="display-1 text">
                    Lavora con noi
                    </h1>
                </div>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center align-items-center border rounded p-2 shadow">
                    <div class="col-12 col-md-6">
                        <h2>Lavora come amministratore</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum provident tenetur, aliquid placeat enim cumque excepturi distinctio dolor doloribus, mollitia a nemo delectus animi assumenda odio eligendi nisi eaque.</p>
                            <h2>Lavora come revisore</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eaque similique ut aperiam ullam explicabo quae cum nam odio quam omnis beatae consequatur, dolore nobis, error iste alias fugiat earum!</p>
                            <h2>Lavora come redattore</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorem iusto minus omnis aliquam labore incidunt rerum, soluta adipisci, aut quae cupiditate dolor, repellat excepturi! Cumque commodi quod saepe explicabo?</p>
                    </div>
                    <div class="col-12 col-md-6">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                    
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="" method="" class="p-5">
                            @csrf
                            <div class="mb-3">
                                <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="">Scegli qui</option>
                                    <option value="admin">Amministratore</option>
                                    <option value="revisor">Revisore</option>
                                    <option value="writer">Redattore</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ old ('email') ?? Auth::user()->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Parlaci di te</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{ old('message')}}</textarea>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-info text-white">Invia la tua candidatura</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


    </x-layout> 