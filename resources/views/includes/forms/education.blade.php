<div class="page-title">
    <h2>Insert Education Data</h2>
</div>
<div class="section-content">
    <div class="col-xl-12">
        <form method="POST" action="{{ route('education.store') }}">
            @csrf
            <div class="block-title" style="margin-bottom: -10px;">
                <h3>Education</h3>
            </div>
            <div class="controls two-columns">
                <div class="fields clearfix">
                    <div class="left-column">
                        <label class="custom-label">Institution Name</label>
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
                        <label class="custom-label">Major Name</label>
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
                        <label class="custom-label">
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
                        <label class="custom-label">
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
