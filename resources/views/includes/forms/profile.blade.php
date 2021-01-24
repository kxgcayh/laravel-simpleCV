<div class="page-title">
    <h2>Create CV</h2>
</div>
<div class="section-content">
    <div class="col-xl-12">
        <div class="block-title">
            <h3>Your <span>Curriculum Vitae</span> is not complete yet</h3>
            <span>Please Update your Profile because there is no Experience and Education in your data</span>
        </div>
        <form method="POST" action="{{ route('user.update') }}">
            @csrf
            @method('PUT')
            <div class="block-title" style="margin-bottom: -10px;">
                <h3>Personal Info</h3>
            </div>
            <div class="controls two-columns">
                <div class="fields clearfix">
                    <div class="left-column">
                        <label style="color: #04b4e0; font-size: 13px;">Full Name</label>
                        <div class="form-group form-group-with-icon">
                            <input id="name" type="text" name="name" value="{{ Auth::user()->name }}"
                                class="form-control @error('name') is-invalid @enderror" required autocomplete="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label style="color: #04b4e0; font-size: 13px;">Email Address</label>
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
                        <label style="color: #04b4e0; font-size: 13px;">Title</label>
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
                        <label style="color: #04b4e0; font-size: 13px;">Password</label>
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
                        <label style="color: #04b4e0; font-size: 13px;">Phone Number</label>
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
                        <label style="color: #04b4e0; font-size: 13px;">Address</label>
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
                        <label style="color: #04b4e0; font-size: 13px;">About Me</label>
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
                        <label style="color: #04b4e0; font-size: 13px;">
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
                        <label style="color: #04b4e0; font-size: 13px;">Password Confirm</label>
                        <div class="form-group form-group-with-icon">
                            <input id="password-confirm" type="password" name="password_confirmation"
                                class="form-control" autocomplete="new-password">
                            @error('password_confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label style="color: #04b4e0; font-size: 13px;">Choose new avatar</label>
                        <div class="form-group form-group-with-icon"
                            style="margin-left: -15px; margin-top: -5px; height: 46px;">
                            <input type="file" class="custom-file-input" id="image" name="image"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="button btn-send">Update Your CV</button>
            </div>
        </form>
    </div>
</div>
