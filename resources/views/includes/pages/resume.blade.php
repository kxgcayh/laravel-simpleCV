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
                        <span class="value">{{ Auth::user()->phone }}</span>
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
                @foreach ($user->experiences as $experience)
                    <div class="block-title">
                        <h3>Experience</h3>
                    </div>
                    <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                            <div class="left-part">
                                <h5 class="item-period">
                                    {{ $experience->from_date }} s/d {{ $experience->to_date }}
                                </h5>
                                <span class="item-company">
                                    {{ $experience->company }}
                                </span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                                <h4 class="item-title">
                                    {{ $experience->title }}
                                </h4>
                                <p>
                                    {{ $experience->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
