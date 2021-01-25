<div class="page-title">
    <h2>Create CV</h2>
</div>
<div class="section-content">
    <div class="col-xl-12">
        <div class="block-title">
            <h3>Already create your <span>Curriculum Vitae?</span></h3>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="controls two-columns">
                <div class="fields clearfix">
                    <label class="custom-label">Email Address</label>
                    <div class="form-group form-group-with-icon">
                        <input id="login_email" type="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label class="custom-label">Password</label>
                    <div class="form-group form-group-with-icon">
                        <input id="login_password" type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" required
                            autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="button btn-send">Get Generated CV</button>
            </div>
        </form>
    </div>
</div>
