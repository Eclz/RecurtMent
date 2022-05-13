<a class="mobNavigation" data-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
    <i class="fas fa-bars mr-2"></i>Dashboard Navigation
</a>
 <div class="collapse" id="MobNav">
    <div class="dashboard-nav">
        <div class="dashboard-inner">
            <ul data-submenu-title="Main Navigation">
                <li class="{{ (request()->is('dashboard*')) ? 'active' : '' }}"><a href="/dashboard"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
                <li class="{{ (request()->is('company*')) ? 'active' : '' }}"><a href="/company"><i class="lni lni-home mr-2"></i>Hiring Company</a></li>
                <li class="{{ (request()->is('applicant*')) ? 'active' : '' }}"><a href="/applicant"><i class="lni lni-user mr-2"></i>Applicants
                      @if ($unsuccusfull>0)
                          <span class="count-tag bg-warning">{{$unsuccusfull}}</span>
                      @endif
                    </a>
                </li>
                <li class="{{ (request()->is('succus-applicant*')) ? 'active' : '' }}"><a href="/succus-applicant"><i class="lni lni-enter mr-2"></i>Admitted Applicants
                        @if ($succusfull>0)
                           <span class="count-tag bg-info">{{$succusfull}}</span>
                        @endif
                    </a>
                </li>
                <li class="{{ (request()->is('messeges-admin*')) ? 'active' : '' }}"><a href="/messeges-admin"><i class="lni lni-add-files mr-2"></i>Messeges 
                    @if ($messege>0)
                        <span class="count-tag bg-danger">{{$messege}}</span>
                    @endif  
                    </a>
                </li>
            </ul> 
            <ul data-submenu-title="My Accounts">
                <li class="{{ (request()->is('change_password*')) ? 'active' : '' }}"><a href="/password/reset"><i class="lni lni-key mr-2"></i>Rest Password</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="lni lni-power-switch mr-2"></i>
                        Log Out
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            @Session::flush();
                        </form>
                    </a>
                </li>
            </ul>
        </div>					
    </div>
</div>