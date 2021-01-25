<div class="page-title">
    <h2>Create CV</h2>
</div>
<div class="section-content">
    <div class="col-xl-12">
        <div class="block-title">
            <h3>Too lazy to create your <span>Curriculum Vitae?</span></h3>
        </div>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <div class="controls two-columns">
                <div class="fields clearfix">
                    <div class="left-column">
                        <label class="custom-label">Full Name</label>
                        <div class="form-group form-group-with-icon">
                            <input id="register_name" type="text" name="register_name"
                                value="{{ old('register_name') }}"
                                class="form-control @error('register_name') is-invalid @enderror" required
                                autocomplete="register_name" autofocus>
                            @error('register_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Email Address</label>
                        <div class="form-group form-group-with-icon">
                            <input id="register_email" type="email" name="register_email"
                                class="form-control @error('register_email') is-invalid @enderror"
                                value="{{ old('register_email') }}" required autocomplete="register_email">
                            @error('register_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Title</label>
                        <div class="form-group form-group-with-icon">
                            <input id="title" type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                                required>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Password</label>
                        <div class="form-group form-group-with-icon">
                            <input id="register_password" type="password" name="register_password"
                                class="form-control @error('register_password') is-invalid @enderror" required
                                autocomplete="new-password">
                            @error('register_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Phone Number</label>
                        <div class="form-group form-group-with-icon">
                            <input id="phone" type="number" name="phone"
                                class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                                required>
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
                                class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}"
                                style="height: 41px;" required></textarea>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">About Me</label>
                        <div class="form-group form-group-with-icon">
                            <textarea id="about" name="about" rows="1"
                                class="form-control @error('about') is-invalid @enderror" value="{{ old('about') }}"
                                style="height: 41px;" required></textarea>
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
                                value="{{ old('dateofbirth') }}" required placeholder="Date of Birth">
                            @error('dateofbirth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Password Confirm</label>
                        <div class="form-group form-group-with-icon">
                            <input id="password-confirm" type="password" name="password_confirmation"
                                class="form-control" required autocomplete="new-password">
                            @error('password_confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Choose new avatar</label>
                        <div class="form-group form-group-with-icon"
                            style="margin-left: -15px; margin-top: -5px; height: 46px;">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="avatar">Choose file</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="button btn-send">Generate CV</button>
            </div>
        </form>
    </div>
</div>
