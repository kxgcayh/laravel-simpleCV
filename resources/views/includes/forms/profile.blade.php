<div class="page-title">
    <h2>Create CV</h2>
</div>
<div class="section-content">
    <div class="col-xl-12">
        <div class="block-title">
            <h3>Your <span>Curriculum Vitae</span> is not complete yet</h3>
            <span>Please Update your Profile because there is no Experience and Education in your data</span>
        </div>
        <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="block-title" style="margin-bottom: -10px;">
                <h3>Personal Info</h3>
            </div>
            <div class="controls two-columns">
                <div class="fields clearfix">
                    <div class="left-column">
                        <label class="custom-label">Full Name</label>
                        <div class="form-group form-group-with-icon">
                            <input id="name" type="text" name="name" value="{{ Auth::user()->name }}"
                                class="form-control @error('name') is-invalid @enderror" required autocomplete="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Email Address</label>
                        <div class="form-group form-group-with-icon">
                            <input id="email" type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ Auth::user()->email }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Title</label>
                        <div class="form-group form-group-with-icon">
                            <input id="title" type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ Auth::user()->title }}" required>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Password</label>
                        <div class="form-group form-group-with-icon">
                            <input id="password" type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Phone Number</label>
                        <div class="form-group form-group-with-icon">
                            <input id="phone" type="number" name="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                value="0{{ Auth::user()->phone }}" required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="right-column">
                        <label class="custom-label">Address</label>
                        <div class="form-group form-group-with-icon">
                            <textarea id="address" name="address" rows="1"
                                class="form-control @error('address') is-invalid @enderror" style="height: 41px;"
                                required>
                            {{ auth()->user()->address }}
                            </textarea>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">About Me</label>
                        <div class="form-group form-group-with-icon">
                            <textarea id="about" name="about" rows="1"
                                class="form-control @error('about') is-invalid @enderror" style="height: 41px;"
                                required>
                            {{ Auth::user()->about }}
                            </textarea>
                            @error('about')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">
                            Date Of Birth
                        </label>
                        <div class="form-group form-group-with-icon">
                            <input id="dateofbirth" type="date" name="dateofbirth"
                                class="form-control @error('dateofbirth') is-invalid @enderror"
                                value="{{ Auth::user()->dateofbirth }}" required placeholder="Date of Birth">
                            @error('dateofbirth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Profile Picture</label>
                        <div class="form-group form-group-with-icon"
                            style="margin-left: -15px; margin-top: 2px; height: 46px;">
                            <input type="file" id="image" name="image" data-toggle="custom-file-input"
                                class="form-control @error('image') is-invalid @enderror" aria-label="Profile Picture">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="button btn-send">Update Your CV</button>
            </div>
        </form>
    </div>
</div>
