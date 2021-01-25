<div class="page-title">
    <h2>Create CV</h2>
</div>
<div class="section-content">
    <div class="col-xl-12">
        <div class="block-title">
            <h3>Your <span>Curriculum Vitae</span> is not complete yet</h3>
            <span>Please Update your Profile because there is no Experience and Education in your data</span>
        </div>
        <form method="POST" action="{{ route('experience.store') }}">
            @csrf
            <div class="block-title" style="margin-bottom: -10px;">
                <h3>Experience</h3>
            </div>
            <div class="controls two-columns">
                <div class="fields clearfix">
                    <div class="left-column">
                        <label class="custom-label">Company Name</label>
                        <div class="form-group form-group-with-icon">
                            <input id="company" type="text" name="company"
                                class="form-control @error('company') is-invalid @enderror" autocomplete="company">
                            @error('company')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">Title</label>
                        <div class="form-group form-group-with-icon">
                            <input id="exp_title" type="text" name="exp_title"
                                class="form-control @error('exp_title') is-invalid @enderror" autocomplete="exp_title">
                            @error('exp_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="right-column">
                        <label class="custom-label">
                            From Date
                        </label>
                        <div class="form-group form-group-with-icon">
                            <input id="from_date" type="date" name="from_date"
                                class="form-control @error('from_date') is-invalid @enderror"
                                placeholder="Date of Birth">
                            @error('from_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="custom-label">
                            To Date
                        </label>
                        <div class="form-group form-group-with-icon">
                            <input id="to_date" type="date" name="to_date"
                                class="form-control @error('to_date') is-invalid @enderror" placeholder="Date of Birth">
                            @error('to_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <label class="custom-label">
                Experience Description
            </label>
            <div class="form-group form-group-with-icon">
                <textarea id="exp_description" type="text" name="exp_description"
                    class="form-control @error('exp_description') is-invalid @enderror"
                    autocomplete="exp_description"></textarea>
                @error('exp_description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="button btn-send">Insert Experience Data</button>
        </form>
    </div>
</div>
