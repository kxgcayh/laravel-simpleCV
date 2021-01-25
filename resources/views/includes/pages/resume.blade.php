<div class="page-title">
    <h2>Resume</h2>
</div>
<div class="section-content">
    {{-- Personal Information --}}
    <div class="row">
        <div class="col-xs-12 col-sm-7">
            <p>
                {{ Auth::user()->about }}
            </p>
        </div>
        <div class="col-xs-12 col-sm-5">
            <div class="info-list">
                <ul>
                    <li>
                        <span class="title">Age</span>
                        <span
                            class="value">{{ \Carbon\Carbon::now()->year - substr(Auth::user()->dateofbirth, 0, 4) }}</span>
                    </li>
                    <li>
                        <span class="title">Date of Birth</span>
                        <span class="value">{{ Auth::user()->dateofbirth }}</span>
                    </li>
                    <li>
                        <span class="title">Address</span>
                        <span class="value">{{ Auth::user()->address }}</span>
                    </li>
                    <li>
                        <span class="title">e-mail</span>
                        <span class="value">{{ Auth::user()->email }}</span>
                    </li>
                    <li>
                        <span class="title">Phone</span>
                        <span class="value">0{{ Auth::user()->phone }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- End of Personal Information --}}
</div>
<br><br><br>
<div class="section-content">
    <div class="row">
        <div class="col-xs-12">
            @foreach ($users as $user)
                <div class="block-title">
                    <h3>Education</h3>
                </div>
                @foreach ($user->educations as $education)
                    <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                            <div class="left-part">
                                <h5 class="item-period">
                                    {{ substr($education->date, 0, 4) }}
                                </h5>
                                <span class="item-company">
                                    {{ $education->institution }}
                                </span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                                <h4 class="item-title">
                                    {{ $education->major }}
                                </h4>
                                <p>
                                    {{ $education->edu_description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="block-title">
                    <h3>Experience</h3>
                </div>
                @foreach ($user->experiences as $experience)
                    <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                            <div class="left-part">
                                <h5 class="item-period">
                                    {{ substr($experience->from_date, 0, 4) }} -
                                    {{ substr($experience->to_date, 0, 4) }}
                                </h5>
                                <span class="item-company">
                                    {{ $experience->company }}
                                </span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                                <h4 class="item-title">
                                    {{ $experience->exp_title }}
                                </h4>
                                <p>
                                    {{ $experience->exp_description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
