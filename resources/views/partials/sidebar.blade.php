<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg> {{ __('Dashboard') }}</a></li>
                @if (auth()->user()->is_admin)
                    <li class="c-sidebar-nav-title">{{ __('Admin') }}</li>
                    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                        <a class="c-sidebar-nav-link" href="{{ route('admin.pages.index') }}">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
                            </svg> Pages</a>

                    </li>

                    <li class="c-sidebar-nav-title">{{ __('Manage checklists') }}</li>
                    @foreach (\App\Models\ChecklistGroup::with('checklists')->get() as $group)
                        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                            <a class="c-sidebar-nav-link" href="{{ route('admin.checklist_groups.edit', $group->id) }}">
                                <svg class="c-sidebar-nav-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
                                </svg> {{ $group->name }}</a>

                                <ul class="c-sidebar-nav-dropdown-items">
                                    @foreach ($group->checklists as $checklist)
                                        <li class="c-sidebar-nav-item">
                                            <a href="{{ route('admin.checklists.edit', $checklist->id) }}"
                                                class="c-sidebar-nav-link">
                                                <span class="c-sidebar-nav-icon">{{ $checklist->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                        </li>
                    @endforeach
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('admin.checklist_groups.create') }}" class="c-sidebar-nav-link">
                        {{ __('New checklist group') }}
                        </a>
                    </li>
                @endif
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('logout') }}"
                                                  onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"
                                                  >
                                                  <svg class="c-sidebar-nav-icon">
                                                      <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                                                  </svg>{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
