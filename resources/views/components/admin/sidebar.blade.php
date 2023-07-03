<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
     
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{route('admin.news.index')}}">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              {{__('News')}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{route('admin.categories.index')}}">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              {{__('Categories')}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{route('admin.sources.index')}}">
              <svg class="bi"><use xlink:href="#cart"/></svg>
              {{__('Sources')}}
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#people"/></svg>
              {{__('Users')}}
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{route('admin.feedback.index')}}">
              <svg class="bi"><use xlink:href="#people"/></svg>
              {{__('Feedback')}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{route('admin.orders.index')}}">
              <svg class="bi"><use xlink:href="#people"/></svg>
              {{__('Orders')}}
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
              {{__("Settings")}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#door-closed"/></svg>
              {{__("Sign out")}}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>