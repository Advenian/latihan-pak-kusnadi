@extends('layouts.user')
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between position-relative">

            <div class="logo">
                <h1 class="text-light"><a href="{{ url('index.html') }}"><span>MISIBANG</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="{{ url('index.html') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('#hero') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('#about') }}">About Us</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('#services') }}">Services</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('#portfolio') }}">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('#team') }}">Team</a></li>
                    {{-- <li class="dropdown"><a href="{{ url("#") }}"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="{{ url("#") }}">Drop Down 1</a></li>
                  <li class="dropdown"><a href="{{ url("#") }}"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="{{ url("#") }}">Deep Drop Down 1</a></li>
                      <li><a href="{{ url("#") }}">Deep Drop Down 2</a></li>
                      <li><a href="{{ url("#") }}">Deep Drop Down 3</a></li>
                      <li><a href="{{ url("#") }}">Deep Drop Down 4</a></li>
                      <li><a href="{{ url("#") }}">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url("#") }}">Drop Down 2</a></li>
                  <li><a href="{{ url("#") }}">Drop Down 3</a></li>
                  <li><a href="{{ url("#") }}">Drop Down 4</a></li>
                </ul>
              </li>
              <li class="dropdown megamenu"><a href="{{ url("#") }}"><span>Mega Menu</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li>
                    <strong>Column 1</strong>
                    <a href="{{ url("#") }}">Column 1 link 1</a>
                    <a href="{{ url("#") }}">Column 1 link 2</a>
                    <a href="{{ url("#") }}">Column 1 link 3</a>
                  </li>
                  <li>
                    <strong>Column 2</strong>
                    <a href="{{ url("#") }}">Column 2 link 1</a>
                    <a href="{{ url("#") }}">Column 2 link 2</a>
                    <a href="{{ url("#") }}">Column 3 link 3</a>
                  </li>
                  <li>
                    <strong>Column 3</strong>
                    <a href="{{ url("#") }}">Column 3 link 1</a>
                    <a href="{{ url("#") }}">Column 3 link 2</a>
                    <a href="{{ url("#") }}">Column 3 link 3</a>
                  </li>
                  <li>
                    <strong>Column 4</strong>
                    <a href="{{ url("#") }}">Column 4 link 1</a>
                    <a href="{{ url("#") }}">Column 4 link 2</a>
                    <a href="{{ url("#") }}">Column 4 link 3</a>
                  </li>
                  <li>
                    <strong>Column 5</strong>
                    <a href="{{ url("#") }}">Column 5 link 1</a>
                    <a href="{{ url("#") }}">Column 5 link 2</a>
                    <a href="{{ url("#") }}">Column 5 link 3</a>
                  </li>
                </ul>
              </li> --}}
                    @if (auth()->check())
                        @if (auth()->user()->email === 'admin@gmail.com')
                            <li>
                                <a class="nav-link scrollto" href="{{ route('admin.index') }}">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a class="nav-link scrollto">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="nav-link scrollto" type="submit">Log Out</button>
                                    </form>
                                </a>
                            </li>
                        @endif
                    @else
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">Log In</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
                    @endif

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Misi Bang </h1>
            <h2>Your local team of computer builders and engineers!</h2>
            <a href="{{ url('#about') }}" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
            <!-- Modal -->
            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="margin-left: 15vw;margin-right: 15vw">
                    <div>
                        <div class="modal-content " style="width: 70vw">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div style="width: 50%" class="mx-auto">
                                    <ul class="nav nav-tabs justify-content-center mx-auto ul-tabs"
                                        style="width: clamp(40px, 100vw, 90%)" id="myTab" role="tablist">
                                        <li class="nav-item col-4" role="presentation">
                                            <button class="nav-link active mx-auto" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">Software</button>
                                        </li>
                                        <li class="nav-item col-4" role="presentation">
                                            <button class="nav-link mx-auto" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Hardware</button>
                                        </li>
                                        <li class="nav-item col-4" role="presentation">
                                            <button class="nav-link mx-auto" id="contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#contact" type="button" role="tab"
                                                aria-controls="contact" aria-selected="false">Diagnostic</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <form action="{{ route('user.software.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Issue</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('issue_description') }}"
                                                            id="exampleInputEmail1"
                                                            placeholder="Please provide a description of your issue"
                                                            name="issue_description">
                                                        @error('issue_description')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Operating System</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('os') }}" id="exampleInputEmail1"
                                                            placeholder="Please provide your operating system and its version"
                                                            name="os">
                                                        @error('os')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tasks to Perform:</label><br>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="virus_removal" name="tasks[]" value="Virus Removal">
                                                            <label class="form-check-label" for="virus_removal">Virus
                                                                Removal</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="update_software" name="tasks[]"
                                                                value="Software Update">
                                                            <label class="form-check-label" for="update_software">Software
                                                                Update</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="system_optimization" name="tasks[]"
                                                                value="System Optimization">
                                                            <label class="form-check-label"
                                                                for="system_optimization">System
                                                                Optimization</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="images">Upload Image</label>
                                                        <input type="file" class="form-control-file"
                                                            onchange="showPreview()" id="imageInput" name="image">
                                                        <img id="imagePreview" src="" alt="Image Preview"
                                                            style="max-width: 200px; display: none;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date_time">Date and Time:</label>
                                                        <input type="datetime-local" class="form-control" id="date_time"
                                                            name="date_time" required>
                                                    </div>


                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <form action="{{ route('admin.fixer.store') }}" method="POST">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Issue</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('name') }}" id="exampleInputEmail1"
                                                            placeholder="Please provide a description of your issue"
                                                            name="name">
                                                        @error('name')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Operating System</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('name') }}" id="exampleInputEmail1"
                                                            placeholder="Please provide your operating system and its version"
                                                            name="name">
                                                        @error('name')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tasks to Perform:</label><br>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="virus_removal" name="tasks[]" value="Virus Removal">
                                                            <label class="form-check-label" for="virus_removal">Virus
                                                                Removal</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="update_software" name="tasks[]"
                                                                value="Software Update">
                                                            <label class="form-check-label" for="update_software">Software
                                                                Update</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="system_optimization" name="tasks[]"
                                                                value="System Optimization">
                                                            <label class="form-check-label"
                                                                for="system_optimization">System
                                                                Optimization</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="images">Upload Images (multiple allowed):</label>
                                                        <input type="file" class="form-control-file" id="images"
                                                            name="images[]" multiple>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date_time">Date and Time:</label>
                                                        <input type="datetime-local" class="form-control" id="date_time"
                                                            name="date_time" required>
                                                    </div>


                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            <form action="{{ route('admin.fixer.store') }}" method="POST">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Issue</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('name') }}" id="exampleInputEmail1"
                                                            placeholder="Please provide a description of your issue"
                                                            name="name">
                                                        @error('name')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Operating System</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('name') }}" id="exampleInputEmail1"
                                                            placeholder="Please provide your operating system and its version"
                                                            name="name">
                                                        @error('name')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tasks to Perform:</label><br>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="virus_removal" name="tasks[]" value="Virus Removal">
                                                            <label class="form-check-label" for="virus_removal">Virus
                                                                Removal</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="update_software" name="tasks[]"
                                                                value="Software Update">
                                                            <label class="form-check-label" for="update_software">Software
                                                                Update</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="system_optimization" name="tasks[]"
                                                                value="System Optimization">
                                                            <label class="form-check-label"
                                                                for="system_optimization">System
                                                                Optimization</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="images">Upload Images (multiple allowed):</label>
                                                        <input type="file" class="form-control-file" id="images"
                                                            name="images[]" multiple>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date_time">Date and Time:</label>
                                                        <input type="datetime-local" class="form-control" id="date_time"
                                                            name="date_time" required>
                                                    </div>


                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="margin-left: 15vw;margin-right: 15vw">
                    <div>
                        <div class="modal-content " style="width: 70vw">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            @auth
                                <div class="modal-body">
                                    <div style="width: 50%" class="mx-auto">
                                        <ul class="nav nav-tabs justify-content-center mx-auto ul-tabs"
                                            style="width: clamp(40px, 100vw, 90%)" id="myTab" role="tablist">
                                            <li class="nav-item col-4" role="presentation">
                                                <button class="nav-link active mx-auto" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                    aria-selected="true">Software</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <form action="{{ route('user.software.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Issue</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ old('issue_description') }}" id="exampleInputEmail1"
                                                                placeholder="Please provide a description of your issue"
                                                                name="issue_description">
                                                            @error('issue_description')
                                                                <p>{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Operating System</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ old('os') }}" id="exampleInputEmail1"
                                                                placeholder="Please provide your operating system and its version"
                                                                name="os">
                                                            @error('os')
                                                                <p>{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tasks to Perform:</label><br>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="virus_removal" name="tasks[]" value="Virus Removal">
                                                                <label class="form-check-label" for="virus_removal">Virus
                                                                    Removal</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="update_software" name="tasks[]"
                                                                    value="Software Update">
                                                                <label class="form-check-label" for="update_software">Software
                                                                    Update</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="system_optimization" name="tasks[]"
                                                                    value="System Optimization">
                                                                <label class="form-check-label"
                                                                    for="system_optimization">System
                                                                    Optimization</label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="images">Upload Image</label>
                                                            <input type="file" class="form-control-file"
                                                                onchange="showPreview()" id="imageInput" name="image">
                                                            <img id="imagePreview" src="" alt="Image Preview"
                                                                style="max-width: 200px; display: none;">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date_time">Date and Time:</label>
                                                            <input type="datetime-local" class="form-control" id="date_time"
                                                                name="date_time" required>
                                                        </div>


                                                    </div>
                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}">Log In!</a>

                            @endauth
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" style="margin-left: 15vw;margin-right: 15vw">
                    <div>
                        <div class="modal-content " style="width: 70vw">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            @auth
                                <div class="modal-body">
                                    <div style="width: 50%" class="mx-auto">
                                        <ul class="nav nav-tabs justify-content-center mx-auto ul-tabs"
                                            style="width: clamp(40px, 100vw, 90%)" id="myTab" role="tablist">
                                            <li class="nav-item col-4" role="presentation">
                                                <button class="nav-link active mx-auto" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true">Hardware</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <form action="{{ route('user.hardware.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Issue</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ old('issue_description') }}"
                                                                id="exampleInputEmail1"
                                                                placeholder="Please provide a description of your issue"
                                                                name="issue_description">
                                                            @error('issue_description')
                                                                <p>{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Operating System</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ old('os') }}" id="exampleInputEmail1"
                                                                placeholder="Please provide your operating system and its version"
                                                                name="os">
                                                            @error('os')
                                                                <p>{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Operating System</label>
                                                            <select id="" name="brand">
                                                                <option value="ASUS">ASUS</option>
                                                                <option value="Acer">Acer</option>
                                                                <option value="Lenovo">Lenovo</option>
                                                                <option value="Hp">Hp</option>
                                                                <option value="Custom">Custom</option>
                                                            </select>
                                                            @error('os')
                                                                <p>{{ $message }}</p>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="images">Upload Image</label>
                                                            <input type="file" class="form-control-file"
                                                                onchange="showPreview()" id="imageInput" name="image">
                                                            <img id="imagePreview" src="" alt="Image Preview"
                                                                style="max-width: 200px; display: none;">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date_time">Date and Time:</label>
                                                            <input type="datetime-local" class="form-control" id="date_time"
                                                                name="date_time" required>
                                                        </div>


                                                    </div>
                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}">Log In!</a>
                            @endauth
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" style="margin-left: 15vw;margin-right: 15vw">
                    <div>
                        <div class="modal-content " style="width: 70vw">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div style="width: 50%" class="mx-auto">
                                    <ul class="nav nav-tabs justify-content-center mx-auto ul-tabs"
                                        style="width: clamp(40px, 100vw, 90%)" id="myTab" role="tablist">
                                        <li class="nav-item col-4" role="presentation">
                                            <button class="nav-link active mx-auto" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">Diagnostic</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            
                                            <a href="">Diagnosis</a>
                                            <a href="">Diagnosis+Fix</a>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="content">
                            <h3>About Us</h3>
                            <p>
                                Welcome to Misibang - Your Trusted Source for Computer and Laptop Repairs!

                            </p>
                            <p>

                                We understand the frustration that comes with a malfunctioning computer or
                                laptop. Whether it's a cracked screen, a virus infection, or a mysterious hardware issue,
                                we're here to make your life easier!
                            </p>
                            <a href="{{ url('#') }}" class="about-btn">About us <i
                                    class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row ">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-book-open"></i>
                                    <h4>Our Story</h4>
                                    <p>Misibang was founded by a team of passionate tech enthusiasts who recognized the need
                                        for a convenient and efficient solution to computer and laptop problems.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-award"></i>
                                    <h4>What Sets Us Apart</h4>
                                    <p>We believe in transparent pricing to make quality repair services accessible to
                                        everyone. Customer satisfaction is our top priority, and we strive to exceed your
                                        expectations.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-phone"></i>
                                    <h4>Get in Touch</h4>
                                    <p>Ready to get your tech back in top shape? Contact Misibang today to schedule an
                                        appointment. We're here to eliminate your tech troubles and ensure you stay
                                        connected and productive.</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Services</h2>
                    <p>Welcome to our computer and laptop fixing services! We specialize in providing top-notch solutions
                        for all your technology needs. </p>

                </div>

                <div class="row justify-content-center">

                    <div
                        class="col-md-6 col-lg-3 mt-3  justify-content-center d-flex align-items-stretch mb-5 mb-lg-0 w-50">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="{{ url('') }}">Software</a></h4>
                            <p class="description">We specialize in diagnosing and resolving a wide range of software
                                problems, ensuring that your computer runs smoothly and efficiently.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Order!
                            </button>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-3 mt-3  justify-content-center d-flex align-items-stretch mb-5 mb-lg-0 w-50">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="{{ url('') }}">Hardware</a></h4>
                            <p class="description">We offer quick and reliable hardware solutions to get your device back
                                in
                                optimal working condition.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1">
                                Order!
                            </button>
                        </div>
                    </div>
                    {{-- <div
                        class="col-md-6 col-lg-3 mt-3  justify-content-center d-flex align-items-stretch mb-5 mb-lg-0 w-50">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="{{ url('') }}">Diagnostic</a></h4>
                            <p class="description">Our experienced technicians will thoroughly examine your device,
                                identify any underlying issues, and provide you with a detailed report.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                                Launch demo modal
                            </button>
                        </div>
                    </div> --}}


                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts  section-bg">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hard Workers</strong></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Make an Appointment Now!</h3>
                    <p> Are you ready to schedule a computer or laptop repair appointment with Misibang? We've made it easy
                        for you to get started.</p>
                    <a class="cta-btn" href="{{ url('#') }}">Order</a>



                </div>

            </div>
        </section><!-- End Cta Section -->
        <!-- ======= Portfolio Section ======= -->
        {{-- <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-in">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/user/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ route('admin.index') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/user/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ url('assets/img/portfolio/portfolio-2.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/user/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ url('assets/img/portfolio/portfolio-3.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/user/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ url('assets/img/portfolio/portfolio-4.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/user/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ url('assets/img/portfolio/portfolio-5.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/user/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ url('assets/img/portfolio/portfolio-6.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/user/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ url('assets/img/portfolio/portfolio-7.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/user/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ url('assets/img/portfolio/portfolio-8.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/user/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ url('assets/img/portfolio/portfolio-9.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('/user/assets/img/testimonials/testimonials-1.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('/user/assets/img/testimonials/testimonials-2.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('/user/assets/img/testimonials/testimonials-3.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('/user/assets/img/testimonials/testimonials-4.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('/user/assets/img/testimonials/testimonials-5.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Team</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up">
                            <div class="pic"><img src="{{ asset('/user/assets/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="150">
                            <div class="pic"><img src="{{ asset('/user/assets/img/team/team-2.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('/user/assets/img/team/team-3.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section --> --}}

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.353310343079!2d106.8814155749903!3d-6.217052293770922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f36a76939ce9%3A0x1dd69348f251fa2a!2sVocational%20High%20School%20State%2046%20of%20East%20Jakarta!5e0!3m2!1sen!2sid!4v1690878331381!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Squadfree</h3>
                            <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam
                                    excepturi quod.</em></p>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="{{ url('#') }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="{{ url('#') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="{{ url('#') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="{{ url('#') }}" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="{{ url('#') }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Terms of
                                    service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Web Development</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Product
                                    Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Graphic Design</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="{{ url('#') }}" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


@endsection
