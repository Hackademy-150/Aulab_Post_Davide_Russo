<x-layout>
    <div class="container-fluid p-5 bg-info text-center text white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Lavora con noi
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center border-rounded p-2 shadow">
            <div class="col-12 col-md-6">  
                <h2>Lavora come amministratore</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit dolorem iste, inventore dolor explicabo facilis, pariatur animi nulla perspiciatis autem optio laboriosam veniam repellat nisi quos quaerat, molestias aliquam culpa.</p>
                <h2>Lavora come revisore</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nostrum eum beatae doloribus recusandae, ipsum laudantium atque nihil natus, facilis ea consequatur pariatur dolores ad corporis perspiciatis modi consequuntur a?</p>
                <h2>Lavora come redattore</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, consequuntur amet fugiat dolorum aut odit rem? Ullam culpa sapiente dolorem magni quia nulla tenetur deserunt perspiciatis consequuntur suscipit? Commodi, illo.</p>
            </div>
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="" method="">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti sei candidato</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old ('email') ?? Auth::user()->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7"  class="form-control">{{ old('message') }}</textarea>
                        
                        
                        <div class="mt-2">
                            <button  type="submit" class="btn btn-info text-white ">Invia la tua candidatura</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>    