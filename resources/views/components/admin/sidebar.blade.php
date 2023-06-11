<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      {{-- <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div> --}}
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.index')) active @endif d-flex align-items-center gap-2 " href="{{route('admin.index')}}" aria-current="page" href="#">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Homepage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.categories.*')) active @endif d-flex align-items-center gap-2" href="{{route('admin.categories.index')}}">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.news.*')) active @endif d-flex align-items-center gap-2" href="{{route('admin.news.index')}}">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              News
            </a>
          </li>
        </ul>

        
        

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
              Settings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#door-closed"/></svg>
              Sign out
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>