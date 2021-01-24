<div class="page-title">
    <h2>Create CV</h2>
</div>
<div class="section-content">
    <div class="col-xl-12">
        <div class="block-title">
            <h3>Your <span>Curriculum Vitae</span> is not complete yet</h3>
            <span>Please Update your Profile because there is no Experience and Education in your data</span>
        </div>
        <form method="POST" action="{{ route('education.store') }}">
            @csrf
            <div class="block-title" style="margin-bottom: -10px;">
                <h3>Educations</h3>
            </div>
            <div class="controls two-columns">
                <div class="fields clearfix">
                    <div class="left-column">
                        <label style="color: #04b4e0; font-size: 13px;">Institution Name</label>
                        <div class="form-group form-group-with-icon">
                            <input id="institution" type="text" name="institution"
                                class="form-control @error('institution') is-invalid @enderror"
                                autocomplete="institution">
                            @error('institution')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label style="color: #04b4e0; font-size: 13px;">Major Name</label>
                        <div class="form-group form-group-with-icon">
                            <input id="major" type="text" name="major"
                                class="form-control @error('major') is-invalid @enderror" autocomplete="major">
                            @error('major')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="right-column">
                        <label style="color: #04b4e0; font-size: 13px;">
                            Date
                        </label>
                        <div class="form-group form-group-with-icon">
                            <input id="date" type="date" name="date"
                                class="form-control @error('date') is-invalid @enderror" placeholder="Date of Birth">
                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label style="color: #04b4e0; font-size: 13px;">
                            Education Description
                        </label>
                        <div class="form-group form-group-with-icon">
                            <textarea id="edu_description" type="text" name="edu_description"
                                class="form-control @error('edu_description') is-invalid @enderror"
                                autocomplete="edu_description" style="height: 41px;"></textarea>
                            @error('edu_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="button btn-send">Insert Education Data</button>
            </div>
        </form>
    </div>
</div>
